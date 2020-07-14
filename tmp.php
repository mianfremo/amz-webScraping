<?php
require "core/SimpleHtmlDom.php";

function getProducts($url) {
        //iniciamos curl
	// $ch = curl_init();
 
	// curl_setopt($ch,CURLOPT_URL,$url);
 //        //Le pasamos a curl un useragent
	// curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0');
 //        //Le pasamos a curl el header del idioma
	// curl_setopt($ch,CURLOPT_HTTPHEADER,array("Accept-Language: es-es,en"));
 //        //Le pasamos True, 1, para seguir cualquier encabezado location
	// curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
 //        //Le pasamos true, 1, para que nos devuelva el resultado en una string
	// curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);    

	// //Guardar pagina
	// $html = str_get_html(curl_exec($ch)); 

	// curl_close($ch); //Cerramos la conexion CURL.
	$html = file_get_html($url);

	
	foreach($html->find('div[data-component-type=s-search-result]') as $element){
		$img = $element->find('img', -1)->src;
		$title = $element->find('h2',-1)->plaintext;
		$link = $element->find('h2',-1)->last_child(1)->href;
		$prize = $element->find('span[class=a-prize]', 0);

		$id = substr ($element->outertext, strrpos($element->outertext,"data-asin")+11 , strrpos($element->outertext,"data-asin")+5);
		// echo($id);
		// echo ($prize);
		echo($title);
       	echo($img);
       	echo"\n";
	}

}

getProducts("https://www.amazon.com/s?k=coffee%20grinder");
?>