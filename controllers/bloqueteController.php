<?php

class bloqueteController extends controller{
    
    public function index(){
        $dados=array();
        
        
         $dados['linknome']= 'bloquete';                  
        
         $dados['frase']= 'Intertravados ou Bloquete';
        
        $dados['foto']='bloquete/bloquete(3).png';
        
        $this->loadTemplate("bloquete", $dados);
        
    }
}


