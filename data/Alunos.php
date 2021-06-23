<?php
class Alunos extends data{

    public function GetDisciplinaAllAlunos($Disciplina){
        $sql = "SELECT * FROM alunos A RIGHT JOIN estudantes E ON A.Id = E.Id WHERE Disciplina = :Disciplina";
        $sql = $db->prepare($sql);
        $sql->bindValue(':Id', $Disciplina->Id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $sql;
        }
        return false;
    }
    public function GetAlunosAllDisciplinas($Estudante){
        $sql = "SELECT * FROM alunos A RIGHT JOIN disciplinas D ON A.Id = D.Id WHERE Estudante = :Estudante";
        $sql = $db->prepare($sql);
        $sql->bindValue(':Id', $EstudanteId);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $sql;
        }
        return false;
    }
    public function Insert($aluno){
        $sql = "INSERT INTO alunos (Disciplina, Estudante) VALUES (:Disciplina, :Estudante)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Disciplina', $aluno->Disciplina);
        $sql->bindValue(':Estudante', $aluno->Estudante);
        if($sql->execute()){
            return true;
        }
        return false;
    }
    public function Update($aluno){
        $sql = "UPDATE alunos SET Disciplina = :Disciplina, Estudante = :Estudante WHERE Id = :Id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Id', $aluno->Id);
        $sql->bindValue(':Disciplina', $aluno->Disciplina);
        $sql->bindValue(':Estudante', $aluno->Estudante);
        if($sql->execute()){
            return true;
        }
        return false;
    }

    public function Delete($Id){
        $sql = "DELETE FROM alunos WHERE Id = :Id";
        $sql = $db->prepare($sql);
        $sql->bindValue(':Id', $Id);
        $sql->execute();

        if($sql->execute()){
            return true;
        }
        return false;
    }

    
}