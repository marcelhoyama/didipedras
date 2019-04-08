<?php

class palhetaController extends controller{
    
    public function index(){
        $dados=array();
        
        
        
        $this->loadTemplate("palheta", $dados);
        
    }
}


