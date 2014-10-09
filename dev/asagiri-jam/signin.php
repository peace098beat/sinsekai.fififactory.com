<!DOCTYPE HTML>
<!--
	xxx用ページ
	http://xxxxx.fififactory.com/www/index.php
	2014.MM.DD fifi
-->
<html>
<head>
<title>Signin</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<!-- <link rel="stylesheet" href="./css/import.css"> -->

</head>

<style type="text/css">
#debugs{
	visibility:hidden;
	width: 200px;
	font-size: 10px;
	position:absolute;
	left:5px;
	top:50px;
	z-index: 5;
} 
#a{
	box-shadow: 0px 0px 10px 1px #999999;
	padding: 30px 30px 20px 30px;
	margin-bottom: 20px;
}
.color-wb{background-color: rgba(232, 248, 255, 0.87);}
.color-w{	background-color: #FFF;} 
.bg-img{ 	background-image: url(./css/img/bg-01.jpg); }
.form-signin{
	max-width: 330px;
	margin:0 auto;
}
body{
	padding: 40px;
}
</style>
<body class="bg-img">

	<!-- header -->
	<?php require("header.php"); ?>

<!-- header -->
<div  id="signin-space" class="container">
	<form  class="form-signin" role="form" method="POST" action="<?php echo "index.php" ?>">

	<h2 class="">Please sign in</h2>
		<input type="email" class="form-control" placeholder="Email address" value="a@a.a.a" required autofocus>
		<input type="password" class="form-control" placeholder="Password" value="aaabbbcccd" required>
			<label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	</form>
</div> <!-- /container -->

</body>
</html>