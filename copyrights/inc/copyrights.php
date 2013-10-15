<?php
/**
 * Affiche le copyright correspondant à l’article traduit
 * @param  string $url L’URL de l’article original
 * @return string      Chaîne fournie par l’auteur ou l’éditeur
 */
if (!function_exists('copyright')) {
  function copyright($url) {
    $copyright = '';

    include_spip('inc/yaml');
    include_spip('inc/config');
    $url_copyrights = yaml_decode(lire_config("copyrights/config/list_urls"));

    foreach($url_copyrights as $key => $value){
      if(stristr($url, $key)){
        $copyright = $value;
        break;
      }
    }

    return $copyright;
  }
}

?>
