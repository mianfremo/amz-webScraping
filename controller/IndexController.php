<?php
class IndexController extends ControladorBase{
     
    public function __construct() {
        parent::__construct();
    }

    public function index(){
    	 $this->view("index",null);

    }
    
    public function hola(){
        echo"Hello world";
    }
 
}
?>
