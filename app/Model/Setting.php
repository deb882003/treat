<?php
App::uses('Model','AppModel');

class Setting extends AppModel{
  public $validate=array(
    'site_title'=>array(
      'notBlank'=>array(
        'rule'=>'notBlank',
        'message'=>'Site Title is required !'
      )
    )
  );
}
