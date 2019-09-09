<div class="row section-footer">
	<div class="col-md-10 col-md-offset-1">
		<div class="row justify-content-start">
			<div class="col-md-3">
				<ul>
					<li><a href="<?php $this->rw('/conditions.php');?>" target="_blank">Conditions générales d'utilisation</a></li>
					<li><a href="<?php $this->rw('/accessibilite.php');?>" target="_blank">Accessibilité</a></li>
					<li><a href="<?php $this->rw('/stats.php');?>" target="_blank">Statistiques</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul>
					<li><a href="<?php $this->rw('/faq.php');?>" target="_blank">FAQ</a></li>
					<!--<li><button data-toggle="modal" data-target="#contactModal" onclick="javascript:afficherFormulaireMail('',<?php //_JS(EMAIL_FROM,'SIMPLE_QUOTE') ?>,'Je souhaite vous contacter','','','home','lbf');">Contactez notre équipe</button></li>-->
					<li><a href="mailto:<?php _M(EMAIL_CONTACT,array('subject'=>'Je souhaite vous contacter', 'body'=>"\nCe message sera transmis sur la boîte de La Bonne Formation, vous pouvez rédiger votre question ou nous signaler une anomalie.\n\nEnvoyé depuis la page ".$this->getUrl()));?>" target="_blank">Contactez notre équipe</a></li>
					<li><a href="<?php $this->rw('/orga.php');?>">Annuaire des organismes</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul>
					<li><a id="apis_esd" data-toggle="collapse" data-target="#apis-target"><span id="label_apis_esd">Retrouvez nos API</span><span id="indent_apis_esd">&nbsp;&nbsp;</span><span class="fa fa-chevron-down"></span></a>
						<div id="apis-target" class="collapse" style="indent:1">
							<ul>
								<li class="liens_apis_esd"><a href="https://www.emploi-store-dev.fr/portail-developpeur/detailapicatalogue/58ed0272243a5f0262fb0ed6" target="_blank">Taux de retour à l'emploi</a></li>
								<li class="liens_apis_esd"><a href="https://www.emploi-store-dev.fr/portail-developpeur/detailapicatalogue/anotea-notes-et-avis-sur-les-formations-v1?id=5b61aa65f085a9d152a0ca2e" target="_blank">Anotea</a></li>
								<li class="liens_apis_esd"><a href="https://www.emploi-store-dev.fr/portail-developpeur/detailapicatalogue/simulateur-de-financement-v1?id=5ca702c8243a5f418929f589" target="_blank">Simulateur de financement</a></li>
							</ul>
						</div>	
					</li>
				</ul>
			</div>
			<div class="col-md-3 pull-right">
				<ul>
					<li><img src="/img/logoPE-mono.png" class="logo" alt="logo pole-emploi"/></li>
				</ul>				
			</div>
		</div>
	</div>
</div>
