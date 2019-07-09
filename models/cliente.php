<?php

class cliente extends model{
    
    
    public function cadastrarInteressado($nome,$celular, $email,$mensagem){
        try{
            $sql="INSERT INTO clientes(nome, celular, email, mensagem, data_cadastro) VALUES(:nome,:celular,:email,:mensagem,:data_cadastro)";
            $sql= $this->db->prepare($sql);
            $sql->bindValue(":nome",$nome);
            $sql->bindValue(":celular",$celular);
            $sql->bindValue(":email",$email);
            $sql->bindValue(":mensagem",$mensagem);
            $sql->bindValue(":data_cadastro","curdate() ");
            
            $sql->execute();
            if($sql->rowCount()>0){
                return TRUE;
            }
        } catch (Exception $ex) {
            echo 'Falhou:'.$ex->getMessage();
        }
        
}
}

