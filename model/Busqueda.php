<?php

class Busqueda{
	private $keyword;
	private $url;

	public function __construct($keyword){
		$this->keyword = urlencode($keyword);
		$this->setUrl();
	}

	public function setUrl(){
		$this->url = "https://www.amazon.com/s?k=".$this->keyword;
	}

	public function getUrl(){
		return $this->url;
	}

	public function getProducts(){
		$html = file_get_html($this->url);

		return $html;

		
	}


	public function saveProducts(){
		$results = $this->getProducts();
		$array = array();

		foreach($results->find('div[data-component-type=s-search-result]') as $element){
			$prize = $element->find('span[class=a-offscreen]', -1);
			$img = $element->find('img', -1)->src;
			$title = $element->find('h2',-1)->plaintext;
			$id = substr ($element->outertext, strrpos($element->outertext,"data-asin")+11 , strrpos($element->outertext,"data-asin")+5);

			$product = new Productos($id, $title, $img, $prize);

			$array[] = $product; 

		}
		return $array;
	}
}