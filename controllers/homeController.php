<?php

class homeController extends controller{
    
    
    
    public function index() {
    $dados=array();
 $dados['linknome']= '';                  
        
         $dados['frase']= 'e Procurando muros de Pedras? Ótimos preços para venda e Serviços de Pedras. Pode confiar!';
        
        $dados['foto']='didi.jpg';

    
$this->loadTemplate("home",$dados);    
        
    }
}

