<div id="page-wrapper">
  <div class="main-page">
<div class="table-responsive bs-example widget-shadow">
  <h4>Deposit Schemes</h4>
  <div class="" style="float:right">
    <?php
echo $this->Html->link('Add New Deposit Scheme',array(
  'controller'=>'deposits',
  'action'=>'add'
));
     ?>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SL#</th>
        <th>Days</th>
        <th>Return %</th>
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
         <td><?php echo $data['Deposit']['deposit_days']; ?></td>
         <td><?php echo $data['Deposit']['return_per'].' %'; ?></td>
         <td>
           <?php
echo $this->Html->link('Edit',array(
  'action'=>'edit',
  $data['Deposit']['id']
));
            ?>
            &nbsp;&nbsp;
            <?php
 echo $this->Html->link('Delete',array(
   'action'=>'delete',
   $data['Deposit']['id']
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
