<?php

App::uses('Controller', 'Controller');

class CommitmentsController extends AppController {

    public $components = array('Paginator', 'Flash', 'Session');
    public $layout = "dashboard";

    public function index() {
        $user_auth = $this->Session->read('user_auth');
        $datas=$this->Commitment->find('all',array(
            'conditions'=>array(
                'Commitment.user_id'=>$user_auth['User']['id']
            ),
            'order'=>array(
                'Commitment.id'=>'DESC'
            )
        ));
        $this->set(compact('datas'));
    }

////////////////////////////////////
    public function add() {
        $user_auth = $this->Session->read('user_auth');
        /////Check if Bank Account Exists//////
        $this->loadModel('Bank');
        $bank_exist = $this->Bank->find('count', array(
            'conditions' => array(
                'Bank.user_id' => $user_auth['User']['id'],
                'Bank.is_active' => 1
            )
        ));
        if ($bank_exist <= 0) {
            $this->Session->write('message_type', 'error');
            $this->Session->write('message', 'Add a Bank Account first !');
            $this->redirect(array(
                'controller' => 'banks',
                'action' => 'add'
            ));
        }
        ////End of checking Bank Account////////
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Commitment']['user_id'] = $user_auth['User']['id'];
            $code = $this->Commitment->query("select uuid() as uid");
            $code = $code[0][0]['uid'];
            $this->request->data['Commitment']['code'] = $code;
            /////Check if User Is Active///////
            $this->loadModel('User');
            $user_active = $this->User->find('count', array(
                'conditions' => array(
                    'User.id' => $user_auth['User']['id'],
                    'User.is_active' => 1
                )
            ));
            if ($user_active <= 0) {
                $this->Session->write('message_type', 'error');
                $this->Session->write('message', 'You are not active !');
                $this->redirect(array(
                    'controller' => 'sites',
                    'action' => 'index'
                ));
            }
            /////End of Checking if User Is Active///////
            $this->request->data['Commitment']['commitment_date'] = date('Y-m-d');
            $this->loadModel('Deposit');
            $pdata=$this->Deposit->find('first',array(
    'conditions'=>array(
        'Deposit.id'=>$this->request->data['scheme_id']
    ),
));
$deposit_days=$pdata['Deposit']['deposit_days'];
$return_per=$pdata['Deposit']['return_per'];
$this->request->data['Commitment']['deposit_days']=$deposit_days;
$this->request->data['Commitment']['return_per']=$return_per;
$return_date= mktime(0,0,0,date('m'),date('d')+$deposit_days,date('Y'));
$return_date=date('Y-m-d',$return_date);
$this->request->data['Commitment']['return_date']=$return_date;
$comm_amount=$this->request->data['Commitment']['commitment_amount'];
$return_amount=$comm_amount * ($return_per/100);
$return_amount=$comm_amount + $return_amount;
$return_amount=(integer)$return_amount;
$this->request->data['Commitment']['return_amount']=$return_amount;
            if ($this->Commitment->save($this->request->data)) {
                $this->Session->write('message_type', 'success');
                $this->Session->write('message', 'Saved Successfully !');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->write('message_type', 'error');
                $this->Session->write('message', 'Saving Failed !');
            }
        }
        $amounts = NULL;
        for ($i = 500; $i <= 50000; $i = $i + 500) {
            $amounts[$i] = $i;
        }
        $this->set(compact('amounts'));
        $this->loadModel('Deposit');
        $deposits = $this->Deposit->find('all', array(
            'order' => array(
                'Deposit.deposit_days'
            )
        ));
        $this->set(compact('deposits'));
    }

///////////////////////////////////////
}
