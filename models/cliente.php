<?php

class cliente extends model{
    
    
    public function cadastrarInteressado($nome,$celular, $email,$mensagem){
        try{
            $sql="INSERT INTO clientes(nome, celular, email, mensagem) VALUES(:nome,:celular,:email,:mensagem)";
            $sql= $this->db->prepare($sql);
            $sql->bindValue(":nome",$nome);
            $sql->bindValue(":celular",$celular);
            $sql->bindValue(":email",$email);
            $sql->bindValue(":mensagem",$mensagem);
            $sql->execute();
            if($sql->rowCount()>0){
                return TRUE;
            }
        } catch (Exception $ex) {
            echo 'Falhou:'.$ex->getMessage();
        }
        
}
}

