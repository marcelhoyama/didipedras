<?php

class contatoController extends controller{
    
    
    
    public function index() {
    $dados=array();
$dados['linknome']= 'contato';                  
        
         $dados['frase']= 'Contato';
        
        $dados['foto']='whatsapp.jpg';

    if(isset($_POST['nome']) && !empty($_POST['nome']) || isset($_POST['email']) && !empty($_POST['email'])){
        
        $nome= addslashes(trim($_POST['nome']));
        $email= addslashes(trim($_POST['email']));
        $celular= addslashes(trim($_POST['celular']));
        $mensagem= addslashes(trim($_POST['mensagem']));
        
       echo $nome;
       echo $email;
       echo $celular;
       echo $mensagem;
                
$c= new cliente();
        
//            $para = "didi_783@hotmail.com";
//            $assunto = " Contato pelo site didipedras.com.br";
//            $corpo = "Nome do interessado: " . $nome . "</br>"
//                   . "-Celular: " . $celular . "</br>"
//                   . "- Email do interessado: " . $email . "</br>"
//                    . "-Tipo de Assunto: Pedras </br>"
//                    . "-Mensagem: " . $mensagem;
//            $cabecalho = "From:" . $email . "\r\n" .
//                    "Reply-To:" . $email . "\r\n" .
//                    "X-Mailer: PHP/" . phpversion();
//            mail($para, $assunto, $corpo, $cabecalho);
            if( $c->cadastrarInteressado($nome,$celular, $email,$mensagem)==TRUE){
           
            $dados['ok'] = "Enviado com sucesso";
            }else{
                $dados['erro']="Não foi possivel enviar, tente novamente";
            }

    }
    
$this->loadTemplate("contato",$dados);    
        
    }
}

