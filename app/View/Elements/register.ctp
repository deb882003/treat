<div class="signin-form profile">
<h3 class="agileinfo_sign">Register</h3>
    <div class="login-form">
      <?php
          echo $this->Form->create('User',array('url'=>'register'));
          echo $this->Form->input('name',array(
            'div'=>false,
            'label'=>false,
            'placeholder'=>'Name (Required)',
            'required'
          ));
          echo $this->Form->input('mail_id',array(
            'div'=>false,
            'label'=>false,
            'placeholder'=>'E-Mail ID (Optional)',
            'required'=>false,
            'type'=>'email'
          ));
          echo $this->Form->input('login_id',array(
            'div'=>false,
            'label'=>false,
            'placeholder'=>'Login ID (Required)',
            'required',
            'type'=>'text',
            'maxlength'=>'150',
            'onKeyUp'=>'checkloginid(this.value)',
          ));
          echo $this->Form->input('password',array(
            'div'=>false,
            'label'=>false,
            'placeholder'=>'Password (Required)',
            'required',
            'type'=>'password'
          ));
          echo $this->Form->input('mobile1',array(
            'div'=>false,
            'label'=>false,
            'placeholder'=>'Mobile No. (Required)',
            'required',
            'type'=>'text',
            'maxlength'=>'15'
          ));
          echo $this->Form->input('mobile2',array(
            'div'=>false,
            'label'=>false,
            'placeholder'=>'Alternate Mobile No. (Optional)',
            'required'=>false,
            'type'=>'text',
            'maxlength'=>'15'
          ));
          echo $this->Form->input('ref_id',array(
            'div'=>false,
            'label'=>false,
            'placeholder'=>'Reference ID (Required)',
            'required',
            'type'=>'text',
            'onKeyUp'=>'loadreference(this.value)',
            'maxlength'=>'150',
          ));
       ?>
       <div class="" id="div_ref">

       </div>
        <input type="submit" value="Register">
      <?php echo $this->Form->end(); ?>
    </div>
    <p><a href="#"> By clicking register, I agree to your terms</a></p>
  </div>
  <script type="text/javascript">
    function loadreference(str){
      var url="<?php echo SITE; ?>sites/referenceajax/"+str;
      $('#div_ref').html('');
      $.get(url,function(data){
        $('#div_ref').html(data);
      })
    }

    function checkloginid(str){
      var url="<?php echo SITE; ?>sites/checkloginid/"+str;
      $('#div_ref').html('');
      $.get(url,function(data){
        $('#div_ref').html(data);
      })
    }
  </script>
