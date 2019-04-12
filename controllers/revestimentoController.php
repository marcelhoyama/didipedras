<?php

class revestimentoController extends controller{
    
    public function index(){
        $dados=array();
        
        
        
        $this->loadTemplate("revestimento", $dados);
        
    }
}


