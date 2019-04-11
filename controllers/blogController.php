<?php

class blogController extends controller{
    
    public function index(){
        $dados=array();
        
        $this->loadTemplate("blog", $dados);
    }
}

