<?php

class folhetaController extends controller{
    
    public function index(){
        $dados=array();
        
        
        
        $this->loadTemplate("folheta", $dados);
        
    }
}


