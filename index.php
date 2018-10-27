<?php
session_start();

$show="";
if (isset($_POST['btn1'])) {
            $u = $_POST['username'];
            $p = $_POST['password'];

            $mysqldb=new mysqli("localhost","root","","shop");

            $q="SELECT * from user where username='$u' AND password='$p'"; 
            $r=$mysqldb->query($q);

            if($r->num_rows>0){
              header('Location: dashboard.php');
            }
            else{
              $show= "Invalid Username or Password";
            }
        }
      
  ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" ng-app="news">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP </title>
<script language="javascript" type="text/javascript" src="js/angular(1.3.2).min.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> -->

  <script language="javascript" type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body ng-controller="stCtrl">
		<?php include 'header.php' ?>
		<div style="color: red; font-size: x-large; font-weight: bolder; text-align: center;">
			
<?php echo $show;?>


		</div>
	<!-- HEADER -->
	<!-- /HEADER -->

	<!-- NAVIGATION -->
			<?php include 'leftside navbar.php' ?>
			
			<?php include 'menubar.php' ?>

				
	<!-- /NAVIGATION -->

	<!-- HOME -->
			<?php include 'carasual.php' ?>

	<!-- /HOME -->

	<!-- section1 -->
		<?php include 'section1.php' ?>

	<!-- /section -->

	<!-- section2 -->
			<?php include 'section2.php' ?>

	<!-- /section2 -->

	<!-- section3 -->
			<?php include 'section3.php' ?>
	
	<!-- /section3 -->

	<!-- section4 -->
			<?php include 'section4.php' ?>
	
	<!-- /section4 -->

	<!-- FOOTER -->
			<?php include 'footer.php' ?>

	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
$(document).ready(function() {
$('#adsmodel').modal({show:true})    
});
</script>







<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login Page</h4>
    </div>
<div class="modal-body">
    <h3>Login</h3>
    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="btn1" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Sign Up</button>
</div>
</div>
</div>
</div>







</body>

</html>
