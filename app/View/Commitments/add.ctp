<div id="page-wrapper">
  <div class="main-page">
<div class="forms">
  <div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
      <h4>New Commitment</h4>
    </div>

    <div class="form-body">
      <?php echo $this->Form->create('Commitment'); ?>

        <div class="form-group">
          <label>Commitment Amount</label>
          <?php
          echo $this->Form->input('commitment_amount',array(
            'label'=>false,
            'div'=>false,
            'class'=>'form-control',
            'options'=>$amounts,
            'empty'=>'-- Select Commitment Amount --',
            'required',
            'style'=>'width:300px'
          ));
          ?>
        </div>

      <div class="form-group">
          <label>Select Scheme</label>
          <table>
            <?php
foreach($deposits as $deposit){
  ?>
  <tr>
      <td><input type="radio" name="scheme_id" value="<?php echo $deposit['Deposit']['id']; ?>" checked='checked'></td>
    <td><?php echo "&nbsp;&nbsp;<strong>".$deposit['Deposit']['return_per'].' % </strong> Growth in'; ?></td>
    <td><?php echo "&nbsp;&nbsp;<strong>".$deposit['Deposit']['deposit_days'].' Days </strong>'; ?></td>
  </tr>
  <?php
}
             ?>
          </table>
        </div>
          <button type="submit" class="btn btn-default">Submit</button>
        <?php echo $this->Form->end(); ?>
    </div>

  </div>
</div>
</div>
</div>
