<?php

class muroController extends controller{
    
    public function index(){
        $dados=array();
        
        
        
        $this->loadTemplate("muro", $dados);
        
    }
}


