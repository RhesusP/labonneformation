<?php
	$path=pathinfo(__FILE__)['dirname'].DIRECTORY_SEPARATOR;
	if(file_exists($path.'config.dev.php'))
		require_once($path.'config.dev.php');

	$protocol=(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']!=='off' || (array_key_exists('SERVER_PORT',$_SERVER) && $_SERVER['SERVER_PORT']==443))?'https':'http';
	if(!defined('DOMAIN')) define('DOMAIN',array_key_exists('HTTP_HOST',$_SERVER)?$_SERVER['HTTP_HOST']:'labonneformation.pole-emploi.fr');
	if(!defined('URL_BASE')) define('URL_BASE',$protocol.'://'.DOMAIN);
	if(!defined('URL_LBF')) define('URL_LBF',URL_BASE);
	if(!defined('COMBINE_SCRIPT')) define('COMBINE_SCRIPT',true);
	if(!defined('SHOW_INTERCARIF')) define('SHOW_INTERCARIF',false);
	if(!defined('SMTP_SERVER')) define('SMTP_SERVER','lbfsmtp');
	if(!defined('MAILTO_404')) define('MAILTO_404','');
	if(!defined('TOKEN_LBB')) define('TOKEN_LBB','');
	if(!defined('LBB_HMACKEY')) define('LBB_HMAC_KEY','');
	if(!defined('ENV_DEV')) define('ENV_DEV',true);
	if(!defined('ENV_NAME')) define('ENV_NAME','oss');
	if(!defined('DOWNLOAD_PATH')) define('DOWNLOAD_PATH','');
	if(!defined('URL_WSINTERCARIF')) define('URL_WSINTERCARIF','');
	if(!defined('URL_TREFLE')) define('URL_TREFLE','http://trefle.pole-emploi.fr');
	if(!defined('TREFLE_API_VERSION')) define('TREFLE_API_VERSION','0.7');
	if(!defined('URL_API_TREFLE')) define('URL_API_TREFLE',URL_TREFLE.(TREFLE_API_VERSION?"/".TREFLE_API_VERSION:""));
	if(!defined('CRYPT_PASS')) define('CRYPT_PASS','');
	if(!defined('KEY_STATS')) define('KEY_STATS','');
	if(!defined('EMAIL_MODALCONTACT')) define('EMAIL_MODALCONTACT','');
	if(!defined('EMAIL_CONTACT')) define('EMAIL_CONTACT','');
	if(!defined('TAG_SEO_PROD')) define('TAG_SEO_PROD','');
	if(!defined('TAG_SEO_RECETTE')) define('TAG_SEO_RECETTE','');
	if(!defined('TAG_ANALYTICS_PROD')) define('TAG_ANALYTICS_PROD','');
	if(!defined('TAG_ANALYTICS_RECETTE')) define('TAG_ANALYTICS_RECETTE','');
	if(!defined('TAG_OPTIMIZE_PROD')) define('TAG_OPTIMIZE_PROD','');
	if(!defined('TAG_OPTIMIZE_RECETTE')) define('TAG_OPTIMIZE_RECETTE','');
	if(!defined('TAG_HOTJAR_PROD')) define('TAG_HOTJAR_PROD','');
	if(!defined('TAG_HOTJAR_RECETTE')) define('TAG_HOTJAR_RECETTE','');
	if(!defined('TAG_CRISP_PROD')) define('TAG_CRISP_PROD','');
	if(!defined('TAG_CRISP_RECETTE')) define('TAG_CRISP_RECETTE','');

	if(!isset($databaseRead)) $databaseRead=array('host'=>'','user'=>'','password'=>'','db'=>'');
	if(!isset($databaseWrite)) $databaseWrite=array('host'=>'','user'=>'','password'=>''),'db'=>'');
	if(!isset($database)) $database=$databaseWrite;
?>
