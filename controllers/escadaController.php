<?php

class escadaController extends controller{
    
    public function index(){
        $dados=array();
        
        $this->loadTemplate("escada", $dados);
    }
}

