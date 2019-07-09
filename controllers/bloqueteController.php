<?php

class bloqueteController extends controller{
    
    public function index(){
        $dados=array();
        
        
        
        $this->loadTemplate("bloquete", $dados);
        
    }
}


