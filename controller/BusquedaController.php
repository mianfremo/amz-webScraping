<?php

class BusquedaController extends ControladorBase{
     
    public function __construct() {
        parent::__construct();
    }
     
    public function index(){
    	if(isset($_GET["k"])){
    		$search = new Busqueda($_GET["k"]);
    		$array = $search->saveProducts();
    		$this->view("busqueda",$array);
            
        }else{
        	$this->redirect();
        }
        
    }
     

}
?>
