<?php
	$user=$this->get('user');

	global $users_apifinancement;
	
	$user=$users_apifinancement;

	$t=microtime(true);
	/* Test d'intégrité de l'url + controle du User + Signature */
	$test=false;
	if($user)
		if(array_key_exists($user,$usersPassword))
			if(Tools::queryControl($this->getGET(),$usersPassword[$user],600)!==false)
				$test=true;
	//xhprof_enable();
	if(ENV_DEV && $user=='NOCONTROL') $test=true;
	if($test)
	{
		$simulatorRules=new SimulatorRules();

		$data=file_get_contents('php://input');
		$res=json_decode($data,true);

		if($res===false) _LOG('api_error.log',"Reçu false en décodage json :\n".print_r($this->get(),true)."\n".print_r($data,true)."\n");
		//@_LOG('api-de.log',print_r($data+$_SERVER,true));
		$data=$res;

		$this->header('Content-Type: application/json');
		$legacy=false; //swtich pour basculer sur l'ancien moteur

		// Test les erreurs en entrées
		$erreurs=$simulatorRules->checkApiData($this,$data);

		if(!$erreurs && !$legacy)
		{
			$data=$simulatorRules->getRulesTrefle($data,true);
			if(ENV_DEV) _LOG('time_apimoteur.log',(microtime(true)-$t)."\n".print_r($_SERVER,true)."\n");

			// on test si on a pas un erreur 400 renvoyé par trèfle ou api détail on en déduit une formaiton non trouvée
			if(isset($data['error']) && 400>=intval($data['error']) && intval($data['error'])<500)
			{
				$erreurs[404][]=array('code'=>800,'message'=>'formation non trouvée');
				if(ENV_DEV) _LOG('api_error.log',print_r($erreurs,true)."\n");
			}
			else if(!$data)
			{
				$erreurs[500][]=array('code'=>000,'message'=>'Une erreur est survenue');
				if(ENV_DEV) _LOG('api_error.log',print_r($erreurs,true)."\n");
			}
			else
				$json=$data;
		}

		// Toutes les erreurs sont levées
		if(!$erreurs)
		{
			if($legacy)
			{
				$json=json_encode($simulatorRules->computeRulesAPI($this,$data));
				_LOG('time_apimoteur.log',(microtime(true)-$t)."\n".print_r($_SERVER,true)."\n");
			}
			_T($json);
		}
		else
		{
			_LOG('api_error.log',"Mauvaise utilisation de l'API\n".print_r($data,true).print_r($erreurs,true));
			// un seul erreur http à la fois
			http_response_code(current(array_keys($erreurs)));
			_T(json_encode(array_values($erreurs)[0]));
		}
		return;
	}
	else
	{
		_LOG('api_error.log',sprintf("API Financement: code 401 (utilisateur non authentifié: %s)",$user));
		http_response_code(401);
	}
?>
