<?php
App::uses('Controller', 'Controller');

class DashboardController extends AppController{
public $components = array('Paginator', 'Flash','Session');

  public function index(){
      $this->layout="dashboard";
  }
////////////////////////////////////
}
