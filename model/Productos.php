<?php

class Productos{
	private $id;
	private $title;
	private $img;
	private $prize;

	public function __construct($id,$title,$img,$prize){
		$this->id = $id;
		$this->title = $title;
		$this->img = $img;
		$this->prize = $prize;
	}

	public function getId(){
		return $this->id;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getImg(){
		return $this->img;
	}

	public function getPrize(){
		return $this->prize;
	}


}