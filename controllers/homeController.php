<?php

class homeController extends controller{
    
    
    
    public function index() {
    $dados=array();


    if(isset($_POST['nome']) && !empty($_POST['nome']) || isset($_POST['email']) && !empty($_POST['email'])){
        
        $nome= addslashes(trim($_POST['nome']));
        $email= addslashes(trim($_POST['email']));
        $celular= addslashes(trim($_POST['celular']));
        $mensagem= addslashes(trim($_POST['mensagem']));
        
        echo 'nome'.$nome."<br>";
        echo 'email'.$email."<br>";
        echo'celular'.$celular."<br>";
        echo 'mensagem'.$mensagem."<br>";
        exit;
        
    }
    
$this->loadTemplate("home",$dados);    
        
    }
}

