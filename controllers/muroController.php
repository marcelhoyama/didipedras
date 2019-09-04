<?php

class muroController extends controller{
    
    public function index(){
        $dados=array();
        
        
         $dados['linknome']= 'muro';                  
        
         $dados['frase']= 'Muro de Arrimo (pedras)';
        
        $dados['foto']='muro-de-pedras/foto(11).png';
        
        $this->loadTemplate("muro", $dados);
        
    }
}


