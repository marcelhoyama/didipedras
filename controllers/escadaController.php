<?php

class escadaController extends controller{
    
    public function index(){
        $dados=array();
        
        $dados['linknome']= 'escada';                  
        
         $dados['frase']= 'Escada de pedras';
        
        $dados['foto']='escadas/escada.png';
        
        
        $this->loadTemplate("escada", $dados);
       // $this->loadTemplate_1("escada", $dados);
    }
}

