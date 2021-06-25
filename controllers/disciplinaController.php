<?php
class disciplinaController extends controller{
    
    public function index(){
        $dados['disciplinas'] = $this->disciplinas->GetAll();
        if(!$dados['disciplinas']){
            echo "Não há disciplinas cadastrados";
            return; 
        }
        $this->loadTemplete('disciplinas', $dados);
    }

    public function cadastro(){
        $dados['professores'] = $this->professores->getAll();
        $this->loadTemplete('cadastroDisciplina', $dados);
    }

    public function cadastrar(){
        $disciplina = new Disciplina();
        $disciplina->Nome = addslashes($_GET['nome']);
        $disciplina->Professor = addslashes($_GET['professor']);
        $disciplina->Id = $this->disciplinas->insert($disciplina);
        if($disciplina->Id != 0){
            header('Location: '.BASE_URL.'disciplina/show/'.$disciplina->Id);
        }else{
            // header('Location: '.BASE_URL.'notFound');
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
            header('Location: '.BASE_URL.'disciplina/show/'.$disciplina->Id);
        }else{
            header('Location: '.BASE_URL.'notFound');
        }
    }

    public function excluir($Id){
        $disciplina = new Disciplina();
        $disciplina->Id = $Id;

        if($this->disciplinas->delete($disciplina)){
            if($this->alunos->deleteAllDisciplina($disciplina)){
                header('Location: '.BASE_URL.'disciplina');
            }
        }else{
            header('Location: '.BASE_URL.'notFound');
        }
    }

    public function show($Id){
        $dados['disciplina'] = $this->disciplinas->get($Id);
        $disciplina = new Disciplina();
        $disciplina->Id = $dados['disciplina']['Id'];
        $disciplina->Nome = $dados['disciplina']['Nome'];
        $disciplina->Professor = $dados['disciplina']['pId'];
        $dados['alunos'] = $this->alunos->GetDisciplinaAllAlunos($disciplina);
        $this->loadTemplete('getDisciplina', $dados);
    }

    public function estudantes($Id){
        $dados['disciplina'] = $this->disciplinas->get($Id);
        $disciplina = new Disciplina();
        $disciplina->Id = $dados['disciplina']['Id'];
        $disciplina->Nome = $dados['disciplina']['Nome'];
        $disciplina->Professor = $dados['disciplina']['pId'];
        $dados['alunos'] = $this->alunos->GetDisciplinaAllAlunos($disciplina);
        $dados['estudantes'] = $this->estudantes->getAll();
        $this->loadTemplete('adicionarAlunos', $dados);
    }

    public function addAluno($Id){
        $estudante = $_GET['estudante'];
        $aluno = new Aluno();
        $aluno->Estudante = $estudante;
        $aluno->Disciplina = $Id;
        if($this->estudantes->get($estudante) != false){
            if($this->alunos->Insert($aluno)){
                header('Location: '.BASE_URL.'/disciplina/estudantes/'.$Id);
            }else{
                header('Location: '.BASE_URL.'notFound');
            }
        }else{
            echo "aqui!";
        }
    }
    public function excluirAluno($Id){
        $aluno = new Aluno();
        $aluno->Disciplina = $Id;
        $aluno->Estudante = $_GET['estudante'];

        if($this->alunos->delete($aluno)){
            header('Location: '.BASE_URL.'disciplina/show/'.$aluno->Disciplina);
        }else{
            header('Location: '.BASE_URL.'notFound');
        }
    }
}