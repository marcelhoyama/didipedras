<?php

class materiaprimaController extends controller{
    
    public function index(){
        $dados=array();
        
         for($i=0; $i <=21;$i++){
     
    echo 'numero'.$i; 
    
         }
        
        $this->loadTemplate("materiaprima", $dados);
        
    }
}


