<?php

class revestimentoController extends controller{
    
    public function index(){
        $dados=array();
        
        
         $dados['linknome']= 'revestimento';                  
        
         $dados['frase']= 'Revestimento em Pedras';
        
        $dados['foto']='revestimentos/revestimento(6).png';
        
        
        $this->loadTemplate("revestimento", $dados);
        
    }
}


