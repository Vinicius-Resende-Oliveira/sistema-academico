<?php
class professorController extends controller{
    
    public function index(){
        $professores = $this->professores->GetAll();
        if(!$professores){
            echo "Não há professores cadastrados";
            return; 
        }
        echo "<pre>";
        print_r($professores);
    }
    public function cadastro(){
        $this->loadView('cadastroProfessor');
    }
    public function cadastrar(){
        $professor = new Professor();
        $professor->Nome = addslahes($_GET['nome']);
        $professor->CPF = addslahes($_GET['cpf']);
        $professor->Data_Nasc = $_GET['data_nasc'];

        if($this->professores->insert($professor)){
            echo 'cadastrado';
        }else{
            echo 'error';
        }
    }

    public function atualizacao($Id){
        $dados['professor'] = $this->professores->get($Id);
        $this->loadView('atualizacaoProfessor', $dados);
    }
    public function atualizar($Id){
        $professor = new Professor();
        $professor->Id = $Id;
        $professor->Nome = addslashes($_GET['nome']);
        $professor->CPF = addslashes($_GET['cpf']);
        $professor->Data_Nasc = $_GET['data_nasc'];

        if($this->professores->update($professor)){
            echo 'atualizado';
        }else{
            echo 'error';
        }
    }
    public function deletar($Id){
        $professor = new Professor();
        $professor->Id = $Id;

        if($this->professores->delete($professor)){
            echo 'deletado';
        }else{
            echo 'error';
        }
    }
}