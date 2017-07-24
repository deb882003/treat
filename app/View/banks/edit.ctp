<div id="page-wrapper">
  <div class="main-page">
<div class="forms">
  <div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
      <h4>Add Bank Account</h4>
    </div>

    <div class="form-body">
      <?php echo $this->Form->create('Bank'); ?>

        <div class="form-group">
          <label>Bank Name</label>
          <?php
          echo $this->Form->input('id');
          echo $this->Form->input('code',array('type'=>'hidden'));
          echo $this->Form->input('name',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Account Number</label>
          <?php
          echo $this->Form->input('account_no',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'type'=>'text'
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Branch</label>
          <?php
          echo $this->Form->input('branch',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
          ));
          ?>
        </div>

        <div class="form-group">
          <label>IFSC</label>
          <?php
          echo $this->Form->input('ifsc',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Is Active</label>
          <?php
          echo $this->Form->input('is_active',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'options'=>$is_active,
            'default'=>1
          ));
          ?>
        </div>

          <button type="submit" class="btn btn-default">Submit</button>
        <?php echo $this->Form->end(); ?>
    </div>

  </div>
</div>
</div>
</div>
