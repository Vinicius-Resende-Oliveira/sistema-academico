<?php
class estudanteController extends controller{
    
    public function index(){
        $estudantes = $this->estudantes->GetAll();
        if(!$estudantes){
            echo "Não há estudantes cadastrados";
            return; 
        }
        echo "<pre>";
        print_r($estudantes);
    }
    public function cadastro(){
        $this->loadView('cadastroEstudante');
    }
    public function cadastrar(){
        $estudante = new Estudante();
        $estudante->Nome = addslahes($_GET['nome']);
        $estudante->CPF = addslahes($_GET['cpf']);
        $estudante->Data_Nasc = $_GET['data_nasc'];

        if($this->estudantes->insert($estudante)){
            echo 'cadastrado';
        }else{
            echo 'error';
        }
    }

    public function atualizacao($Id){
        $dados['estudante'] = $this->estudantes->get($Id);
        $this->loadView('atualizacaoEstudante', $dados);
    }
    public function atualizar($Id){
        $estudante = new Estudante();
        $estudante->Id = $Id;
        $estudante->Nome = addslashes($_GET['nome']);
        $estudante->CPF = addslashes($_GET['cpf']);
        $estudante->Data_Nasc = $_GET['data_nasc'];

        if($this->estudantes->update($estudante)){
            echo 'atualizado';
        }else{
            echo 'error';
        }
    }
    public function deletar($Id){
        $estudante = new Estudante();
        $estudante->Id = $Id;

        if($this->estudantes->delete($estudante)){
            echo 'deletado';
        }else{
            echo 'error';
        }
    }
}