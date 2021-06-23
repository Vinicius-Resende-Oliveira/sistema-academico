<?php
class controller {

    public function __construct(){
        // $this->users = new Users();
        // $this->prints = new Prints();
        // $this->groups = new Groups();
        // $this->members = new Members();
        // $this->requests = new Requests();
        // $this->weeklygoals = new WeeklyGoals();
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