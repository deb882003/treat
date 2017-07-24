<!DOCTYPE HTML>
<html>
<head>
<title>User Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo $this->webroot; ?>theme/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo $this->webroot; ?>theme/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="<?php echo $this->webroot; ?>theme/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="<?php echo $this->webroot; ?>theme/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo $this->webroot; ?>theme/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--animate-->
<link href="<?php echo $this->webroot; ?>theme/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo $this->webroot; ?>theme/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="<?php echo $this->webroot; ?>theme/js/Chart.js"></script>
<!-- //chart -->
<!-- Metis Menu -->
<script src="<?php echo $this->webroot; ?>theme/js/metisMenu.min.js"></script>
<script src="<?php echo $this->webroot; ?>theme/js/custom.js"></script>
<link href="<?php echo $this->webroot; ?>theme/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<?php echo $this->element('user_menu'); ?>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
			<!--	<button id="showLeftPush"><i class="fa fa-bars"></i></button>-->
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="#">
						<h1>Welcome</h1>
						<span>
              <?php
$user_data= $this->Session->read('user_auth');
echo $user_data['User']['name'];
             ?></span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<!--<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div>--><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<?php echo $this->element('user_top_menu'); ?>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<?php echo $this->fetch('content'); ?>
		<script src="<?php echo $this->webroot; ?>alertify/src/alertify.js"></script>
	  <link rel="stylesheet" href="<?php echo $this->webroot; ?>alertify/themes/alertify.core.css" />
	  <link rel="stylesheet" href="<?php echo $this->webroot; ?>alertify/themes/alertify.default.css" />

	  <?php
	if($this->Session->read('message') != '' && $this->Session->read('message_type') == 'success'){
	?>

	  <script type="text/javascript">
	    alertify.success("<?php echo $this->Session->read('message'); ?>");
	  </script>
	<?php
	$_SESSION['message']=null;
	$_SESSION['message_type']=null;
	}
	   ?>
	   <?php
	if($this->Session->read('message') != '' && $this->Session->read('message_type') == 'error'){
	?>

	   <script type="text/javascript">
	     alertify.error("<?php echo $this->Session->read('message'); ?>");
	   </script>
	<?php
	$_SESSION['message']=null;
	$_SESSION['message_type']=null;
	}
	    ?>
	</div>
	<!-- Classie -->
		<script src="<?php echo $this->webroot; ?>theme/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};


			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="<?php echo $this->webroot; ?>theme/js/jquery.nicescroll.js"></script>
	<script src="<?php echo $this->webroot; ?>theme/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo $this->webroot; ?>theme/js/bootstrap.js"> </script>
</body>
</html>
