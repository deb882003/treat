<div id="page-wrapper">
  <div class="main-page">
<div class="forms">
  <div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
      <h4>Profile (You can not modify it):</h4>
    </div>
    <div class="form-body">
      <?php echo $this->Form->create('User'); ?>
        <div class="form-group"> <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
       </div>

        <div class="form-group"> <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile"> <p class="help-block">Example block-level help text here.</p>
          </div>

          <div class="checkbox">
            <label> <input type="checkbox"> Check me out </label>
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        <?php echo $this->Form->end(); ?>
    </div>
  </div>
</div>
</div>
</div>
