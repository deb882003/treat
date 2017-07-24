<div id="page-wrapper">
  <div class="main-page">
<div class="table-responsive bs-example widget-shadow">
  <h4>My Direct References</h4>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SL#</th>
        <th>Name</th>
        <th>E-Mail ID</th>
        <th>Mobile#</th>
        <th>City</th>
        <th>Reg. Date</th>
        <th>Is Verified ?</th>
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
         <td><?php echo $data['User']['name']; ?></td>
         <td><?php echo $data['User']['mail_id']; ?></td>
         <td><?php echo $data['User']['mobile1']; ?></td>
         <td><?php echo $data['User']['city']; ?></td>
         <td><?php echo date('d/m/Y',strtotime($data['User']['reg_date'])); ?></td>
         <td>
<?php
if($data['User']['is_active'] == 0 && $data['User']['reason'] == 'Verification'){
  echo "<font color=red>Not Verified Yet</font><br>";
  echo $this->Html->link('Click to Verify',array(
    'controller'=>'users',
    'action'=>'verify',
    $data['User']['code']
  ));
}else{
  if($data['User']['is_active'] == 1){
    echo "<font color=green>Active</font>";
  }
}

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
