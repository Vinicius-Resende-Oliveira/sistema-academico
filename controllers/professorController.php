<?php
class professorController extends controller{
    
    public function index(){
        $dados['professores'] = $this->professores->GetAll();
        if(!$dados['professores']){
            echo "Não há professores cadastrados";
            return; 
        }
        $this->loadTemplete('professores', $dados);
    }
    public function cadastro(){
        $this->loadTemplete('cadastroProfessor');
    }
    public function cadastrar(){
        $professor = new Professor();
        $professor->Nome = addslashes($_GET['nome']);
        $professor->CPF = addslashes($_GET['cpf']);
        $professor->Data_Nasc = $_GET['data_nasc'];
        $professor->Id = $this->professores->insert($professor);
        if($professor->Id != 0){
            header('Location: '.BASE_URL.'professor');
        }else{
            header('Location: '.BASE_URL.'notFound');
        }
    }

    public function atualizacao($Id){
        $dados['professor'] = $this->professores->get($Id);
        $this->loadTemplete('atualizacaoProfessor', $dados);
    }
    
    public function atualizar($Id){
        $professor = new Professor();
        $professor->Id = $Id;
        $professor->Nome = addslashes($_GET['nome']);
        $professor->CPF = addslashes($_GET['cpf']);
        $professor->Data_Nasc = $_GET['data_nasc'];

        if($this->professores->update($professor)){
            header('Location: '.BASE_URL.'professor');
        }else{
            header('Location: '.BASE_URL.'notFound');
        }
    }
    public function deletar($Id){
        $professor = new Professor();
        $professor->Id = $Id;

        if($this->professores->delete($professor)){
            header('Location: '.BASE_URL.'professor');
        }else{
            header('Location: '.BASE_URL.'notFound');
        }
    }
}