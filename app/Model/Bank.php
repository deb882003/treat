<?php
App::uses('Model','AppModel');

class Bank extends AppModel{
    public $validate=array(
      'name'=>array(
        'notBlank'=>array(
          'rule'=>'notBlank',
          'message'=>'Name is required !'
        )
      ),
      'account_no'=>array(
        'notBlank'=>array(
          'rule'=>'notBlank',
          'message'=>'Account No. is required !'
        )
      ),
      'user_id'=>array(
        'notBlank'=>array(
          'rule'=>'notBlank',
          'message'=>'Select User !'
        )
      ),
      'ifsc'=>array(
        'notBlank'=>array(
          'rule'=>'notBlank',
          'message'=>'IFSC is required !'
        )
      ),
      'branch'=>array(
        'notBlank'=>array(
          'rule'=>'notBlank',
          'message'=>'Branch is required !'
        )
      ),
    );
}
