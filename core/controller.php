<?php
class controller {

    public function __construct(){
        $this->alunos = new Alunos();
        $this->disciplinas = new Disciplinas();
        $this->estudantes = new Estudantes();
        $this->professores = new Professores();
    }
    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }

    public function loadTemplete($viewName, $viewData = array()){
        require 'views/templete.php';
    }
    
    public function loadViewInTemplete($viewName, $viewData = array()) {
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
}