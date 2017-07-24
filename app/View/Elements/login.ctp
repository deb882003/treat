<div class="signin-form profile">
<h3 class="agileinfo_sign">Login</h3>
    <div class="login-form">
      <?php
echo $this->Form->create("User",array('url'=>'login'));
echo $this->Form->input('login_id',array(
  'div'=>false,
  'label'=>false,
  'placeholder'=>'Login ID',
  'required',
  'type'=>'text'
));
echo $this->Form->input('password',array(
  'div'=>false,
  'label'=>false,
  'placeholder'=>'Password',
  'required',
  'type'=>'password'
));
       ?>
        <div class="tp">
          <input type="submit" value="Login">
        </div>
      <?php
echo $this->Form->end();
       ?>
    </div>
    <p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
  </div>
