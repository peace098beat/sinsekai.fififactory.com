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
#a{
	box-shadow: 0px 0px 10px 1px #999999;
	padding: 30px 30px 20px 30px;
	margin-bottom: 20px;
}
.color-wb{	background-color: rgba(232, 248, 255, 0.87);}
.color-w{	background-color: #FFF;} 
.bg-img1{ 	background-image: url(./css/img/bg-triangle/1.jpg); }
.bg-img2{ 	background-image: url(./css/img/bg-triangle/2.jpg); }
.bg-img3{ 	background-image: url(./css/img/bg-triangle/3.jpg); }
.bg-img4{ 	background-image: url(./css/img/bg-triangle/4.jpg); }
.bg-img5{ 	background-image: url(./css/img/bg-triangle/5.jpg); }
.margin-b30{
	margin-bottom: 30px;
}
.form-signin{
	max-width: 330px;
	margin:0 auto;
}
body{
	padding: 40px;
}
</style>



<body class="bg-img1">

	<!-- header -->
	<?php require("header.php"); ?>

<?php

?>

<div class="container">
	<p>複数フォーム</p>
	<!-- 入力フォーム php -->
	<form class="form" role="form" action="post.php" enctype="multipart/form-data" method="post">
		<div class="form-group">
        <input class="button " type="file" name="upfile[]" accept="image/*; capture=camera, video/*; capture=camera" multiple>
			<input class="button sign-up" type="submit" value="UPLOAD">
		</div>
	</form>
</div>


	<!-- hello -->
	<?php // require("hello.php"); ?>

	<!-- main -->
	<div class="container">
		<div id="grid-a-1">
			<?php 
			// 画像ファイルの呼び出し
			$dir_name = "./img/img-suiko/";
			$img_ary = scandir($dir_name);
			$file_name=array();
			// 画像ファイル以外を配列から削除;
			foreach ($img_ary as $key => $value) {
				$path=$dir_name.$value;
				if(@getimagesize($path)){
					$file_name[] = $value;
				}
			}
			count($file_name);
			// Gridで表示
			for ($i=1; $i < count($file_name); $i++) { 
				# code...
				$thtml = '
				<div class="item color-w">
				<a href="./img/img-suiko/suiko-%1$03d.jpg" data-lightbox="roadtrip"><img src="./img/img-suiko/s-suiko-%1$03d.jpg"></a>
				</div>
				';
				$html = vsprintf($thtml, $i);
				// echo $html;
			}
			?>
		</div>
	</div>


</body>

<script>
// </body>の下だと動く。
$("#grid-a-1").gridalicious({
  // width: 75, 
 gutter: 1, 
 selector: '.item',
  animate: false, 
  animationOptions: { 
    speed: 200, 
    duration: 300, 
    }
});
</script>

</html>