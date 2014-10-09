<!DOCTYPE HTML>
<!--
	xxx
	http://xxxxx.fififactory.com/www/index.php
	2014.MM.DD fifi
-->
<html>
<head>
<title>新世界 | 朝霧JAM作戦 | Grid-A-Licious</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="./js/jquery.grid-a-licious.min.js"></script>
<script src="./js/lightbox.min.js"></script>
<!-- <script src="./js/import.js"></script> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="./css/lightbox.css"/>
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
body{ padding: 40px;}
.shadow{ 	box-shadow: 0px 0px 10px 1px #999999;}
.color-wb{	background-color: rgba(232, 248, 255, 0.87);}
.color-w{	background-color: #FFF;} 
.bg-img1{ 	background-image: url(./css/img/bg-triangle/6.jpg); }
.bg-img2{ 	background-image: url(./css/img/bg-triangle/21.jpg); }
.bg-img3{ 	background-image: url(./css/img/bg-triangle/3.jpg); }
.bg-img4{ 	background-image: url(./css/img/bg-triangle/4.jpg); }
.bg-img5{ 	background-image: url(./css/img/bg-triangle/5.jpg); }
.margin-b30{
	margin-bottom: 30px;
}
#cardlist{}
.card{
	margin-bottom: 30px;
	box-shadow: 0px 0px 10px 1px #999999;
}
.card-thumneil50{
	width:49%;
	margin-bottom: 5px;
}
.card-thumneil100{
	width:99%;
	margin-bottom: 5px;
}
#upload-form{
	max-width: 330px;
	margin:0 auto;
}

</style>

<body class="bg-img">
	<!-- header -->
	<?php require("header.php"); ?>

	<!-- card viewer -->
	<div class="container">
		<!-- 入力フォーム php -->
		<p>複数フォーム</p>
		<!-- <form id="upload-form" class="form" role="form" action="saveToUpfile.php" enctype="multipart/form-data" method="post"> -->
		<form id="upload-form" class="form" role="form" action="dummy.php" enctype="multipart/form-data" method="post">
		
			<div class="form-group">
				<input class="form-control"  type="date" value="<?php echo date("Y-m-d"); ?>" name="day">
				<input class="form-control"  type="time" value="<?php echo date("H:")."00";?>" name="time">
				<input class="button  btn-primary btn-block" type="file" name="upfile_main" accept="image/*; capture=camera, video/*; capture=camera" >
				<input class="button  btn-primary btn-block" type="file" name="upfile_sub[]" accept="image/*; capture=camera, video/*; capture=camera" multiple>
				<input class="form-control"  type="text" value="message:メッセージを入れてください" name="memo">
				<input class="button" type="submit" value="SAVE">
			</div>
		</form>
	</div>



	<?php	require("card-dev.php") ?>

	

<!-- // デバックコンソール -->
<div id="debugs">
<?php
foreach($debugs as $key => $value){
	print(@$key);
	print("::");
	print(@$value);
	print("<br>");
}
?>
</div>

</body>
</html>