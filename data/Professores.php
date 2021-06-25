<?php
class Professores extends data{

    public function Get($Id){
        $sql = "SELECT * FROM professores WHERE Id = :Id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Id', $Id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetch(PDO::FETCH_ASSOC);
            return $sql;
        }
        return false;
    }
    public function GetAll(){
        $sql = "SELECT * FROM professores ORDER BY Nome ASC";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $sql;
        }
        return false;
    }
    public function Insert($professor){
        $sql = "INSERT INTO professores (Nome, CPF, data_nasc) VALUES (:Nome, :CPF, :data_nasc)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Nome', $professor->Nome);
        $sql->bindValue(':CPF', $professor->CPF);
        $sql->bindValue(':data_nasc', $professor->Data_Nasc);
        if($sql->execute()){
            return $this->db->lastInsertId();
        }
        return 0;
    }
    public function Update($professor){
        $sql = "UPDATE professores SET Nome = :Nome, CPF = :CPF, data_nasc = :data_nasc WHERE Id = :Id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Id', $professor->Id);
        $sql->bindValue(':Nome', $professor->Nome);
        $sql->bindValue(':CPF', $professor->CPF);
        $sql->bindValue(':data_nasc', $professor->Data_Nasc);
        if($sql->execute()){
            return true;
        }
        return false;
    }

    public function Delete($Id){
        $sql = "DELETE FROM professores WHERE Id = :Id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Id', $Id);
        $sql->execute();

        if($sql->execute()){
            return true;
        }
        return false;
    }

    
}