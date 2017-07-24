<div id="page-wrapper">
  <div class="main-page">
<div class="forms">
  <div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
      <h4>Profile (You can not modify it):</h4>
    </div>

    <div class="form-body">
      <?php echo $this->Form->create('User'); ?>

        <div class="form-group">
          <label>Unique Code</label>
          <?php
          echo $this->Form->input('code',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'value'=>$data['User']['code'],
            'readonly'
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Name</label>
          <?php
          echo $this->Form->input('name',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'value'=>$data['User']['name'],
            'readonly'
          ));
          ?>
        </div>

        <div class="form-group">
          <label>E-Mail ID</label>
          <?php
          echo $this->Form->input('mail_id',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'value'=>$data['User']['mail_id'],
            'type'=>'text',
            'readonly'
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Login ID</label>
          <?php
          echo $this->Form->input('login_id',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'value'=>$data['User']['login_id'],
            'type'=>'text',
            'readonly'
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Mobile-1</label>
          <?php
          echo $this->Form->input('mobile1',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'value'=>$data['User']['mobile1'],
            'type'=>'text',
            'readonly'
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Mobile-2</label>
          <?php
          echo $this->Form->input('mobile2',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'value'=>$data['User']['mobile2'],
            'type'=>'text',
            'readonly'
          ));
          ?>
        </div>

        <div class="form-group">
          <label>City</label>
          <?php
          echo $this->Form->input('city',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'value'=>$data['User']['city'],
            'type'=>'text',
            'readonly'
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Address</label>
          <?php
          echo $this->Form->input('address',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'value'=>$data['User']['address'],
            'type'=>'textarea',
            'readonly'
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Registration Date</label>
          <?php
          $reg_date="";
          $reg_date=date('d/m/Y',strtotime($data['User']['reg_date']));
          //echo $reg_date;
          echo $this->Form->input('reg_date',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'value'=>$reg_date,
            'type'=>'text',
            'readonly'
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Status:
<?php
if($data['User']['is_active'] == 1){
  echo "<font color=green>Active</font>";
}else{
  echo "<font color=red>In Active</font>";
}
 ?>
          </label>
        </div>

        <div class="form-group">
          <label>Refered By:
      <?php
          echo "<strong>".$data['User']['name'].", Mobile: ".$data['User']['mobile1'].", E-Mail ID: ".$data['User']['mail_id'].", ID: ".$data['User']['login_id']."</strong>";
      ?>
          </label>
        </div>
          <!--<button type="submit" class="btn btn-default">Submit</button>-->
        <?php echo $this->Form->end(); ?>
    </div>

  </div>
</div>
</div>
</div>
