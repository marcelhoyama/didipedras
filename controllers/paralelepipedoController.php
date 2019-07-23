<?php

class paralelepipedoController extends controller{
    
    public function index(){
        $dados=array();
        
         $dados['linknome']= 'paralelepipedo';                  
        
         $dados['frase']= 'Calçamento de Paralelepípedo';
        
        $dados['foto']='paralelepipedo/paralelepipedo(2).png';
        
        $this->loadTemplate("paralelepipedo", $dados);
        
    }
}


