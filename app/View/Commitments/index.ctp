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
        <th>Comm. Date</th>
        <th>Comm. Amt.</th>
        <th>Duration</th>
        <th>Growth(%)</th>
        <th>Maturity Amt.</th>
        <th>Maturity Date</th>
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
         <td scope="row"><?php echo $i; ?></td>
         <td><?php echo date("d/m/Y",strtotime($data['Commitment']['commitment_date'])); ?></td>
         <td><?php echo $data['Commitment']['commitment_amount']; ?></td>
         <td><?php echo $data['Commitment']['deposit_days']; ?></td>
         <td><?php echo $data['Commitment']['return_per']; ?></td>
         <td><?php echo $data['Commitment']['return_amount']; ?></td>
         <td>
<?php
    echo date("d/m/Y",strtotime($data['Commitment']['return_date']));
 ?>
         </td>
         <td>
<?php
    
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
