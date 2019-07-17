<?php

class escadaController extends controller{
    
    public function index(){
        $dados=array();
        
        $this->loadTemplate_1("escada", $dados);
        $this->loadTemplate("escada", $dados);
    }
}

