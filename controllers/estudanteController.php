<?php
class estudanteController extends controller{
    
    public function index(){
        $dados['estudantes'] = $this->estudantes->GetAll();
        if(!$dados['estudantes']){
            echo "Não há estudantes cadastrados";
            return; 
        }
        $this->loadTemplete('estudantes', $dados);
    }
    public function cadastro(){
        $this->loadtemplete('cadastroEstudante');
    }
    public function cadastrar(){
        $estudante = new Estudante();
        $estudante->Nome = addslashes($_GET['nome']);
        $estudante->CPF = addslashes($_GET['cpf']);
        $estudante->Data_Nasc = $_GET['data_nasc'];
        $estudante->Id = $this->estudantes->insert($estudante);
        if($estudantes->Id != 0){
            header('Location: '.BASE_URL.'estudante');
        }else{
            header('Location: '.BASE_URL.'notFound');
        }
    }

    public function atualizacao($Id){
        $dados['estudante'] = $this->estudantes->get($Id);
        $this->loadTemplete('atualizacaoEstudante', $dados);
    }
    public function atualizar($Id){
        $estudante = new Estudante();
        $estudante->Id = $Id;
        $estudante->Nome = addslashes($_GET['nome']);
        $estudante->CPF = addslashes($_GET['cpf']);
        $estudante->Data_Nasc = $_GET['data_nasc'];

        if($this->estudantes->update($estudante)){
            header('Location: '.BASE_URL.'estudante');
        }else{
            header('Location: '.BASE_URL.'notFound');
        }
    }
    public function excluir($Id){
        $estudante = new Estudante();
        $estudante->Id = $Id;

        if($this->estudantes->delete($estudante)){
            if($this->alunos->deleteAllEstudante($estudante)){
                header('Location: '.BASE_URL.'estudante');
            }
        }else{
            header('Location: '.BASE_URL.'notFound');
        }
    }
}