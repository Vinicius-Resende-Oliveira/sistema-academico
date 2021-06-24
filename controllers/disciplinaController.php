<?php
class disciplinaController extends controller{
    
    public function index(){
        $disciplinas = $this->disciplinas->GetAll();
        if(!$disciplinas){
            echo "Não há disciplinas cadastrados";
            return; 
        }
        echo "<pre>";
        print_r($disciplinas);
    }
    public function cadastro(){
        $this->loadView('cadastroDisciplina');
    }
    public function cadastrar(){
        $disciplina = new Disciplina();
        $disciplina->Nome = addslahes($_GET['nome']);
        $disciplina->CPF = addslahes($_GET['professor']);

        if($this->disciplinas->insert($disciplina)){
            echo 'cadastrado';
        }else{
            echo 'error';
        }
    }

    public function atualizacao($Id){
        $dados['disciplina'] = $this->disciplinas->get($Id);
        $this->loadView('atualizacaoDisciplina', $dados);
    }
    public function atualizar($Id){
        $disciplina = new Disciplina();
        $disciplina->Id = $Id;
        $disciplina->Nome = addslashes($_GET['nome']);
        $disciplina->CPF = addslashes($_GET['professor']);

        if($this->disciplinas->update($disciplina)){
            echo 'atualizado';
        }else{
            echo 'error';
        }
    }
    public function deletar($Id){
        $disciplina = new Disciplina();
        $disciplina->Id = $Id;

        if($this->disciplinas->delete($disciplina)){
            echo 'deletado';
        }else{
            echo 'error';
        }
    }
}