<?php

class folhetaController extends controller{
    
    public function index(){
        $dados=array();
        
        
         $dados['linknome']= 'folheta';                  
        
         $dados['frase']= 'Pedras de Folhetas';
        
        $dados['foto']='folhetas/folheta(30).png';
        
        $this->loadTemplate("folheta", $dados);
        
    }
}


