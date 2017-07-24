<?php
App::uses('Controller', 'Controller');

class SitesController extends AppController{
public $components = array('Paginator', 'Flash','Session');

  public function index(){
      $this->layout="website";
      $this->loadModel('Setting');
      $site_title=$this->Setting->find('first');
      $site_title=$site_title['Setting']['site_title'];
      $this->set(compact('site_title'));
  }
  ///////////////////////////////
  public function register(){
    if($this->request->is(array('post'))){
      $this->loadModel('User');
      $code=$this->User->query("select uuid() as uid");
      $code=$code[0][0]['uid'];
      $this->request->data['User']['code']=$code;
      $this->request->data['User']['name']=trim(strtoupper($this->request->data['User']['name']));
      $this->request->data['User']['login_id']=trim($this->request->data['User']['login_id']);
      $this->request->data['User']['password']=trim($this->request->data['User']['password']);
      $this->request->data['User']['reg_date']=date('Y-m-d');
      $this->request->data['User']['is_active']=0;
      $this->request->data['User']['reason']='Verification';

$error="";
if(trim($this->request->data['User']['ref_id']) == ""){
  $error="Reference ID is required !";
}

$ref_exist=$this->User->find('count',array(
  'conditions'=>array(
    'User.login_id'=>$this->request->data['User']['ref_id']
  )
));
if($ref_exist <= 0){
  $error="Invalid Reference ID !";
}

if($error == ""){
  $ref_id=$this->User->find('first',array(
    'conditions'=>array(
      'User.login_id'=>$this->request->data['User']['ref_id'],
    )
  ));
  $this->request->data['User']['ref_id']=$ref_id['User']['id'];
  if($this->User->save($this->request->data)){
    $this->Session->write('message_type','success');
    $this->Session->write('message','Registration Completed Successfully !');
    $this->redirect(array('action'=>'index'));
  }else{
    $this->Session->write('message_type','error');
    $this->Session->write('message','Registration Failed !');
      $this->redirect(array('action'=>'index'));
  }
}else{
  $this->Session->write('message_type','error');
  $this->Session->write('message',$error);
  $this->redirect(array('action'=>'index'));
}
    }
    exit();
  }
/////////////////////////////////
public function referenceajax($str=""){
  $this->loadModel('User');
  if($str == ""){
    echo "";
  }else{
    $refer_by=$this->User->find('first',array(
      'conditions'=>array(
        'User.login_id'=>$str
      ),
    ));
    echo "Refered By : ".@$refer_by['User']['name'];
  }
  exit();
}
//////////////////////////////////
public function checkloginid($str=""){
  $this->loadModel('User');
  if($str == ""){
    echo "";
  }else{
    $ifexist=$this->User->find('count',array(
      'conditions'=>array(
        'User.login_id'=>$str
      ),
    ));
    if($ifexist > 0){
      echo "<font color=red>Sorry ! Login ID Already Exists !</font>";
    }else{
        echo "<font color=green>Congrates ! Login ID is Available !</font>";
    }
  }
  exit();
}
////////////////////////////////////
public function login(){
  $this->loadModel('User');
  if($this->request->is(array('post','put'))){
        $user_exist=$this->User->find('count',array(
          'conditions'=>array(
            'User.login_id'=>$this->request->data['User']['login_id'],
            'User.password'=>$this->request->data['User']['password']
          )
        ));

if($user_exist > 0){
  $data=$this->User->find('first',array(
    'conditions'=>array(
      'User.login_id'=>$this->request->data['User']['login_id'],
      'User.password'=>$this->request->data['User']['password']
    )
  ));
  if($data['User']['is_active'] == 1){
      $this->Session->write('user_auth',$data);
      $this->redirect(array(
        'controller'=>'dashboard',
        'action'=>'index'
      ));
  }else{
    if($data['User']['reason'] == 'Verification'){
      echo "<center>Your registration is not confirmed yet ! Please wait till you are being verified by the person who refered you.</center>";
      exit();
    }
  }
}else{
  $this->Session->write('message_type','error');
  $this->Session->write('message','Invalid Credential !');
  $this->redirect(array(
    'controller'=>'sites',
    'action'=>'index'
  ));
}

  }
  exit();
}
///////////////////////
}
