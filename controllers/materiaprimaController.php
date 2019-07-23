<?php

class materiaprimaController extends controller{
    
    public function index(){
        $dados=array();
        
        $dados['linknome']= 'materiaprima';                  
        
         $dados['frase']= 'Matéria-prima';
        
        $dados['foto']='materia-prima/materia (4).png';
        
    
         
        
        $this->loadTemplate("materiaprima", $dados);
        
    }
}


