<?php
App::uses('Model','AppModel');

class User extends AppModel{
  public $validate=array(
    'name'=>array(
      'notBlank'=>array(
        'rule'=>'notBlank',
        'message'=>'Name is required !'
      ),
    ),
    'login_id'=>array(
      'notBlank'=>array(
        'rule'=>'notBlank',
        'message'=>'Login ID is required !'
      ),
      'isUnique'=>array(
        'rule'=>'isUnique',
        'message'=>'Login ID already exists !'
      ),
    ),
    'mobile1'=>array(
      'notBlank'=>array(
        'rule'=>'notBlank',
        'message'=>'Mobile No. is required !'
      ),
      'isUnique'=>array(
        'rule'=>'isUnique',
        'message'=>'Mobile No. already exists !'
      ),
    ),
    'password'=>array(
      'notBlank'=>array(
        'rule'=>'notBlank',
        'message'=>'Password is required !'
      ),
    ),
    'ref_id'=>array(
      'notBlank'=>array(
        'rule'=>'notBlank',
        'message'=>'Reference ID is required !'
      ),
    ),
  );
}
