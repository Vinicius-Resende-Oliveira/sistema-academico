<?php
class Disciplinas extends data{

    public function Get($Id){
        $sql = "SELECT D.Id, D.Nome, P.Id as pId, P.Nome as pNome, (select Count(Id) From alunos A WHERE A.Disciplina = D.Id) as Alunos FROM disciplinas D, professores P WHERE D.Professor = P.Id AND D.Id = :Id";
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
        $sql = "SELECT D.Id, D.Nome, P.Id as pId, P.Nome as pNome, (select Count(Id) From alunos A WHERE A.Disciplina = D.Id) as Alunos FROM disciplinas D, professores P WHERE D.Professor = P.Id";
        $sql = $this->db->prepare($sql);
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
            return $this->db->lastInsertId();
        }
        return 0;
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

    public function Delete($disciplina){
        $sql = "DELETE FROM disciplinas WHERE Id = :Id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Id', $disciplina->Id);
        $sql->execute();

        if($sql->execute()){
            return true;
        }
        return false;
    }

    
}