<?php

class contatoController extends controller{
    
    
    
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
        
                
$c= new cliente();
        
            $para = "didi_783@hotmail.com";
            $assunto = " Contato pelo site didipedras.com.br";
            $corpo = "Nome do interessado: " . $nome . "</br>"
                   . "-Celular: " . $celular . "</br>"
                   . "- Email do interessado: " . $email . "</br>"
                    . "-Tipo de Assunto: Pedras </br>"
                    . "-Mensagem: " . $mensagem;
            $cabecalho = "From:" . $email . "\r\n" .
                    "Reply-To:" . $email . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();
            mail($para, $assunto, $corpo, $cabecalho);
            if( $c->cadastrarInteressado($nome,$celular, $email,$mensagem)==TRUE){
           
            $dados['ok'] = "Enviado com sucesso";
            }else{
                $dados['erro']="Não foi possivel enviar, tente novamente";
            }

    }
    
$this->loadView("contato",$dados);    
        
    }
}
