<?php
App::uses('Controller', 'Controller');

class BanksController extends AppController{
public $components = array('Paginator', 'Flash','Session');

  public function index(){
      $this->layout="dashboard";
      $user_auth=$this->Session->read('user_auth');
      $datas=$this->Bank->find('all',array(
        'conditions'=>array(
          'Bank.user_id'=>$user_auth['User']['id']
        ),
        'order'=>array(
          'Bank.id'
        )
      ));
      $this->set(compact('datas'));
  }
////////////////////////////////////
public function add(){
  $this->layout='dashboard';
  $user_auth=$this->Session->read('user_auth');
  if($this->request->is(array('post','put'))){
    $code=$this->Bank->query("select uuid() as code");
    $code=$code[0][0]['code'];
    $this->request->data['Bank']['code']=$code;
    $this->request->data['Bank']['user_id']=$user_auth['User']['id'];
    if($this->Bank->save($this->request->data)){
      $this->Session->write('message_type','success');
      $this->Session->write('message','Successfully Saved !');
      $this->redirect(array('action'=>'index'));
    }else{
      $this->Session->write('message_type','error');
      $this->Session->write('message','Saving Failed !');
    }
  }
  $is_active=array('0'=>'In Active','1'=>'Active');
  $this->set(compact('is_active'));
}
////////////////////////////////////
public function edit($code){
    $this->layout='dashboard';
    $user_auth=$this->Session->read('user_auth');
  if($this->request->is(array('post','put'))){
    $this->request->data['Bank']['user_id']=$user_auth['User']['id'];
    if($this->Bank->save($this->request->data)){
      $this->Session->write('message_type','success');
      $this->Session->write('message','Successfully Saved !');
      $this->redirect(array('action'=>'index'));
    }else{
      $this->Session->write('message_type','error');
      $this->Session->write('message','Saving Failed !');
    }
  }
  $is_active=array('0'=>'In Active','1'=>'Active');
  $this->set(compact('is_active'));
  $this->request->data=$this->Bank->findByCode($code);
}
////////////////////////////////////
public function delete($code){
  $this->Bank->deleteAll(array(
      'code'=>$code
  ));
  $this->Session->write('message_type','success');
  $this->Session->write('message','Deleted Successfully !');
  $this->redirect(array('action'=>'index'));
}
}
