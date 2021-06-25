<?php
class Alunos extends data{

    public function GetDisciplinaAllAlunos($Disciplina){
        $sql = "SELECT * FROM alunos A RIGHT JOIN estudantes E ON A.Estudante = E.Id WHERE Disciplina = :Disciplina";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Disciplina', $Disciplina->Id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $sql;
        }
        return array();
    }
    public function GetAlunosAllDisciplinas($Estudante){
        $sql = "SELECT * FROM alunos A RIGHT JOIN disciplinas D ON A.Disciplina = D.Id WHERE Estudante = :Estudante";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Estudante', $Estudante->Id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $sql;
        }
        return array();
    }
    public function Insert($aluno){
        $sql = "INSERT INTO alunos (Disciplina, Estudante) VALUES (:Disciplina, :Estudante)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Disciplina', $aluno->Disciplina);
        $sql->bindValue(':Estudante', $aluno->Estudante);
        if($sql->execute()){
            return $this->db->lastInsertId();
        }
        return 0;
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

    public function Delete($aluno){
        $sql = "DELETE FROM alunos WHERE Disciplina = :Disciplina AND Estudante = :Estudante";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Disciplina', $aluno->Disciplina);
        $sql->bindValue(':Estudante', $aluno->Estudante);
        $sql->execute();

        if($sql->execute()){
            return true;
        }
        return false;
    }
    public function DeleteAllDisciplina($disciplina){
        $sql = "DELETE FROM alunos WHERE Disciplina = :Disciplina";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Disciplina', $disciplina->Id);
        $sql->execute();

        if($sql->execute()){
            return true;
        }
        return false;
    }
    public function deleteAllEstudante($estudante){
        $sql = "DELETE FROM alunos WHERE Estudante = :Estudante";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':Estudante', $estudante->Id);
        $sql->execute();

        if($sql->execute()){
            return true;
        }
        return false;
    }
}