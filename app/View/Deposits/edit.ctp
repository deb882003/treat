<div id="page-wrapper">
  <div class="main-page">
<div class="forms">
  <div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
      <h4>Modify Deposit Scheme</h4>
    </div>

    <div class="form-body">
      <?php echo $this->Form->create('Deposit'); ?>

        <div class="form-group">
          <label>Deposit Days</label>
          <?php
          echo $this->Form->input('id');
          echo $this->Form->input('deposit_days',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'required',
            'style'=>'width:300px',
            'type'=>'number',
          ));
          ?>
        </div>

        <div class="form-group">
          <label>Return %</label>
          <?php
          echo $this->Form->input('return_per',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'type'=>'number',
            'style'=>'width:300px',
            'required'
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
