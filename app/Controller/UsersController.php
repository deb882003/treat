<?php
App::uses('Controller', 'Controller');

class UsersController extends AppController{
public $components = array('Paginator', 'Flash','Session');

  public function index(){

  }
/////////////////////////////////////////
public function add(){
//  if($this->request->is(array('post','put'))){
          $code=$this->User->query("select uuid() as uid");
          $code=$code[0][0]['uid'];
          $this->request->data['User']['code']=$code;
          $this->request->data['User']['name']=trim(strtoupper($this->request->data['User']['name']));
          $this->request->data['User']['login_id']=trim($this->request->data['User']['login_id']);
          $this->request->data['User']['password']=trim($this->request->data['User']['password']);
          $this->request->data['User']['reg_date']=date('Y-m-d');
          $this->request->data['User']['is_active']=0;
          $this->request->data['User']['reason']='';
//  }
  exit();
}
////////////////////////////////////////
public function viewprofile(){
  $this->layout="dashboard";
  $data=$this->Session->read('user_auth');
  $refer=$this->User->find('first',array(
    'conditions'=>array(
      'User.id'=>$data['User']['ref_id']
    )
  ));
  $this->set(compact('data','refer'));

}
////////////////////////////////////
public function directreferences(){
  $this->layout="dashboard";
  $user_auth=$this->Session->read('user_auth');
  $datas=$this->User->find('all',array(
    'conditions'=>array(
      'User.ref_id'=>$user_auth['User']['id'],
    ),
    'order'=>array(
      'User.created'=>'DESC'
    )
  ));
  $this->set(compact('datas'));
}
/////////////////////////////////////
public function verify($code){
  $this->User->query("update users set reason='',is_active=1 where code='".$code."'");
  $this->Session->write('message_type','success');
  $this->Session->write('message','User Verified Successfully !');
  $this->redirect(array('action'=>'directreferences'));
}
/////////////////////////////////////
public function logout(){
  $this->Session->write('user_auth','');
  session_destroy();
  $this->redirect(array(
    'controller'=>'sites',
    'action'=>'index'
  ));
}
///////////////////////////////////////
}
