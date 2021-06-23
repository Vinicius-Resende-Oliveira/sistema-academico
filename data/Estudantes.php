<?php
class Estudantes extends data{

    public function Get($Id){
        $sql = "SELECT * FROM estudantes WHERE Id = :Id";
        $sql = $db->prepare($sql);
        $sql->bindValue(':Id', $Id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetch(PDO::FETCH_ASSOC);
            return $sql;
        }
        return false;
    }
    public function GetAll(){
        $sql = "SELECT * FROM estudantes ORDER BY Nome ASC";
        $sql = $db->prepare($sql);
        $sql->bindValue(':Id', $Id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetch(PDO::FETCH_ASSOC);
            return $sql;
        }
        return false;
    }
    public function Insert($estudante){
        $sql = "INSERT INTO estudantes (Id, Nome, CPF, data_nasc) VALUES (:Id, :Nome, :CPF, :data_nasc)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Id', $estudante->Id);
        $sql->bindValue(':Nome', $estudante->Nome);
        $sql->bindValue(':CPF', $estudante->CPF);
        $sql->bindValue(':data_nasc', $estudante->Data_Nasc);
        if($sql->execute()){
            return true;
        }
        return false;
    }
    public function Update($estudante){
        $sql = "UPDATE estudantes SET Nome = :Nome, CPF = :CPF, data_nasc = :data_nasc WHERE Id = :Id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Id', $estudante->Id);
        $sql->bindValue(':Nome', $estudante->Nome);
        $sql->bindValue(':CPF', $estudante->CPF);
        $sql->bindValue(':data_nasc', $estudante->Data_Nasc);
        if($sql->execute()){
            return true;
        }
        return false;
    }

    public function Delete($Id){
        $sql = "DELETE FROM estudantes WHERE Id = :Id";
        $sql = $db->prepare($sql);
        $sql->bindValue(':Id', $Id);
        $sql->execute();

        if($sql->execute()){
            return true;
        }
        return false;
    }

    
}