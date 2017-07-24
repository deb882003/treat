<div id="page-wrapper">
  <div class="main-page">
<div class="table-responsive bs-example widget-shadow">
  <h4>My Commitments</h4>
  <div class="" style="float:right">
    <?php
echo $this->Html->link('Add New Commitment',array(
  'controller'=>'commitments',
  'action'=>'add'
));
     ?>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SL#</th>
        <th>Name</th>
        <th>Account No.</th>
        <th>Branch</th>
        <th>IFSC</th>
        <th>Is Active ?</th>
        <th>Actions</th>
       </tr>
     </thead>
     <tbody>
<?php
$i=0;
foreach($datas as $data){
  $i++;
 ?>
       <tr>
         <th scope="row"><?php echo $i; ?></th>
         <td><?php echo $data['Bank']['name']; ?></td>
         <td><?php echo $data['Bank']['account_no']; ?></td>
         <td><?php echo $data['Bank']['branch']; ?></td>
         <td><?php echo $data['Bank']['ifsc']; ?></td>
         <td>
<?php
if($data['Bank']['is_active'] == 1){
  echo "<font color=green>Yes</font>";
}else{
  echo "<font color=red>No</font>";
}
 ?>
         </td>
         <td>
<?php
    echo $this->Html->link('Edit',array(
      'controller'=>'banks',
      'action'=>'edit',
       $data['Bank']['code']
    ));
    echo "&nbsp;&nbsp;||&nbsp;&nbsp;";
    echo $this->Html->link('Delete',array(
      'controller'=>'banks',
      'action'=>'delete',
      $data['Bank']['code']
    ));
 ?>
         </td>
       </tr>
       <?php
}
        ?>
      </tbody>
    </table>
</div>
</div>
</div>
