<?php

class vendaController extends controller{
    
    public function index(){
        $dados=array();
        
        $dados['linknome']= 'venda';                  
        
         $dados['frase']= 'Venda de Pedras';
        
        $dados['foto']='venda/venda (5).jpeg';
        
    
         
        
        $this->loadTemplate("venda", $dados);
        
    }
}


