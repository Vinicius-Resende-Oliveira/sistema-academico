<?php
class Disciplinas extends data{

    public function Get($Id){
        $sql = "SELECT * FROM disciplinas WHERE Id = :Id";
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
        $sql = "SELECT * FROM disciplinas ORDER BY Nome ASC";
        $sql->bindValue(':Id', $Id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $sql;
        }
        return false;
    }
    public function Insert($disciplina){
        $sql = "INSERT INTO disciplinas (Nome, Professor) VALUES (:Nome, :Professor)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Nome', $disciplina->Nome);
        $sql->bindValue(':Professor', $disciplina->Professor);
        if($sql->execute()){
            return true;
        }
        return false;
    }
    public function Update($disciplina){
        $sql = "UPDATE disciplinas SET Nome = :Nome, Professor = :Professor WHERE Id = :Id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Id', $disciplina->Id);
        $sql->bindValue(':Nome', $disciplina->Nome);
        $sql->bindValue(':Professor', $disciplina->Professor);
        if($sql->execute()){
            return true;
        }
        return false;
    }

    public function Delete($Id){
        $sql = "DELETE FROM disciplinas WHERE Id = :Id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Id', $Id);
        $sql->execute();

        if($sql->execute()){
            return true;
        }
        return false;
    }

    
}