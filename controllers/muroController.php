<?php

class muroController extends controller{
    
    public function index(){
        $dados=array();
        
        
         $dados['linknome']= 'muro';                  
        
         $dados['frase']= 'Muro de Arrimo';
        
        $dados['foto']='bruta_arrimo/foto(11).png';
        
        $this->loadTemplate("muro", $dados);
        
    }
}


