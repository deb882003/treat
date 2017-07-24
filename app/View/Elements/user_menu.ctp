<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
  <ul class="nav" id="side-menu">
    <li>
      <?php
echo $this->Html->link('<i class="fa fa-home nav_icon"></i>Dashboard',array(
'controller'=>'dashboard',
'action'=>'index'
),array(
'escape'=>false,
));
       ?>
    </li>
    <li>
      <a href="#"><i class="fa fa-cogs nav_icon"></i>My Profile & Bank Accounts<span class="fa arrow"></span></a>
      <ul class="nav nav-second-level collapse">
        <li>
          <?php
              echo $this->Html->link('View Profile',array(
                'controller'=>'users',
                'action'=>'viewprofile'
              ));
           ?>
        </li>
        <li>
          <?php
              echo $this->Html->link('Bank Accounts',array(
                'controller'=>'banks',
                'action'=>'index'
              ));
           ?>
        </li>
      </ul>
      <!-- /nav-second-level -->
    </li>
    <li class="">
      <a href="#"><i class="fa fa-book nav_icon"></i>My Commitments <span class="fa arrow"></span></a>
      <ul class="nav nav-second-level collapse">
        <li>
          <?php
              echo $this->Html->link('New Commitment',array(
                'controller'=>'commitments',
                'action'=>'add'
              ));
           ?>
        </li>
        <li>
          <?php
              echo $this->Html->link('My Commitments',array(
                'controller'=>'commitments',
                'action'=>'index'
              ));
           ?>
        </li>
      </ul>
      <!-- /nav-second-level -->
    </li>

    <li>
      <?php
          echo $this->Html->link('<i class="fa fa-th-large nav_icon"></i>References',array(
            'controller'=>'users',
            'action'=>'directreferences'
          ),array(
            'escape'=>false
          ));
       ?>
    </li>

    <li>
      <?php
      $user_data=$this->Session->read('user_auth');
      if($user_data['User']['is_admin'] == 1){
        echo $this->Html->link('<i class="fa fa-th-large nav_icon"></i>Deposit Schemes',array(
          'controller'=>'deposits',
          'action'=>'index'
        ),array(
          'escape'=>false
        ));
      }
       ?>
    </li>

    <li>
      <a href="tables.html"><i class="fa fa-table nav_icon"></i>Tables <span class="nav-badge">05</span></a>
    </li>
    <li>
      <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>
      <ul class="nav nav-second-level collapse">
        <li>
          <a href="forms.html">Basic Forms <span class="nav-badge-btm">07</span></a>
        </li>
        <li>
          <a href="validation.html">Validation</a>
        </li>
      </ul>
      <!-- //nav-second-level -->
    </li>
    <li>
      <a href="#"><i class="fa fa-file-text-o nav_icon"></i>Pages<span class="nav-badge-btm">02</span><span class="fa arrow"></span></a>
      <ul class="nav nav-second-level collapse">
        <li>
          <a href="login.html">Login</a>
        </li>
        <li>
          <a href="signup.html">SignUp</a>
        </li>
        <li>
          <a href="blank-page.html">Blank Page</a>
        </li>
      </ul>
      <!-- //nav-second-level -->
    </li>
    <li>
      <a href="charts.html" class="chart-nav"><i class="fa fa-bar-chart nav_icon"></i>Charts <span class="nav-badge-btm pull-right">new</span></a>
    </li>
  </ul>
  <!-- //sidebar-collapse -->
</nav>
