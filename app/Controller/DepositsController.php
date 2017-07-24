<?php
App::uses('Controller', 'Controller');

class DepositsController extends AppController{
public $components = array('Paginator', 'Flash','Session');
public $layout="dashboard";

public function index(){
  $datas=$this->Deposit->find('all',array(
    'order'=>array(
      'Deposit.deposit_days'
    )
  ));
  $this->set(compact('datas'));
}
//////////////////////////////////////////////////
public function add(){
  if($this->request->is(array('post','put'))){
    if($this->Deposit->save($this->request->data)){
      $this->Session->write('message_type','success');
      $this->Session->write('message','Saved Successfully !');
      $this->redirect(array('action'=>'index'));
    }else{
      $this->Session->write('message_type','error');
      $this->Session->write('message','Saving Failed !');
    }
  }
}
////////////////////////////////////////////////////
public function edit($id){
  if($this->request->is(array('post','put'))){
    if($this->Deposit->save($this->request->data)){
      $this->Session->write('message_type','success');
      $this->Session->write('message','Saved Successfully !');
      $this->redirect(array('action'=>'index'));
    }else{
      $this->Session->write('message_type','error');
      $this->Session->write('message','Saving Failed !');
    }
  }
  $this->request->data=$this->Deposit->findById($id);
}
//////////////////////////////////////////////////////////
public function delete($id){
  $this->Deposit->delete($id);
  $this->Session->write('message_type','success');
  $this->Session->write('message','Deleted Successfully !');
  $this->redirect(array('action'=>'index'));
}
}
