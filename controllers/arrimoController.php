<?php

class arrimoController extends controller{
    
    public function index(){
        $dados=array();
        
        
        
        $this->loadTemplate("arrimo", $dados);
        
    }
}


