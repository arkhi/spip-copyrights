<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

function copyrights_upgrade($nom_meta_base_version, $version_cible){
	$maj = array();
	$maj['create'] = array(
		array('copyrights_create')
	);
	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}

function copyrights_create() {
	include_spip('inc/config');
	ecrire_config('copyrights/config/list_urls', '');
}

function copyrights_vider_tables($nom_meta_base_version) {
	effacer_meta("copyrights");
	effacer_meta($nom_meta_base_version);
}
?>
