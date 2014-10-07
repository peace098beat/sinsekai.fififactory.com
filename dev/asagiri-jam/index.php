<!DOCTYPE HTML>
<!--
	xxx
	http://xxxxx.fififactory.com/www/index.php
	2014.MM.DD fifi
-->
<html>
<head>
<title>新世界 | 朝霧JAM作戦</title>
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
<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
								<li class="active"><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
												<li class="divider"></li>
												<li><a href="#">One more separated link</a></li>
										</ul>
								</li>
						</ul>
						<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
										<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
						</form>
						<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link</a></li>
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
										</ul>
								</li>
						</ul>
				</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
</nav>

<!-- slider -->
<div class="container margin-b30">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li> 
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" style="height:300px">

		<div class="item active">
			<div class="carousel-caption">
				<h1></h1>
				<p>新世界</p>
			</div>
			<img src="./css/img/bg-triangle/2.jpg" alt="...">
		</div>
		<div class="item">
			<img src="./css/img/bg-triangle/4.jpg" alt="...">
			<div class="carousel-caption">
			<h1>A Full-Width Image Slider Template</h1>
			</div>
		</div>
		<div class="item">
			<img src="./css/img/bg-triangle/5.jpg" alt="...">
			<div class="carousel-caption">
			<h1>A Full-Width Image Slider Template</h1>
			</div>
		</div>
	</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
</div>
</div>

<!-- main -->
<div class="container margin-b30">
	<div class="row">

		<div class="col-xs-4">
				<div class="thumbnail color-wb">
					<!-- <img src="http://placeimg.com/320/320/people/sepia" alt="..."> -->
					<img class="img-rounded " src="./css/img/bg-triangle/7.jpg" alt="...">
					<div class="caption">
						<p>sample</p>
						<p>
							<a href="#" class="btn btn-primary" role="button">upload</a>
							<a href="#" class="btn btn-default bt" role="button">delete</a>
						</p>
					</div>
				</div>
		</div>

		<div class="col-xs-4">
				<div class="thumbnail color-wb">
					<!-- <img src="https://unsplash.it/320/320/?blur" alt="..."> -->
					<img class="img-rounded" src="./css/img/bg-triangle/6.jpg" alt="...">
					<div class="caption">
						<p>sample</p>
						<div class=""></div>
						<p>
							<a href="#" class="btn btn-primary" role="button">upload</a>
							<a href="#" class="btn btn-default" role="button">delete</a>
						</p>
					</div>
				</div>
		</div>
		<div class="col-xs-4">
				<div class="thumbnail color-wb">
					<!-- <img src="https://unsplash.it/320/320/?random" alt="..."> -->
					<img class="img-rounded" src="./css/img/bg-triangle/8.jpg" alt="...">
					<div class="caption">
						<p>sample</p>
						<p>
							<a href="#" class="btn btn-primary" role="button">upload</a>
							<a href="#" class="btn btn-default" role="button">delete</a>
						</p>
					</div>
				</div>
		</div>
	</div>
</div>

<style type="text/css">
.color-jumbotron{
	background-color: ##ff8080;
}
</style>
<!-- main2 -->
<div class="container margin-b30">
	<div class="jumbotron">
	<h1>Hello, world!</h1>
	<p>...</p>
	<p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
	</div>
</div>


<style type="text/css">
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>

	<div class="container">
			<span class="btn btn-default btn-file">Browse <input type="file">
			</span>
		</form>
	</div>

<style type="text/css">
#form2{
	background-color: #ff8080;
}
#form2 .container{
	background-color: #a98e32
}
</style>
	<div class="container">
		<form  class="form-signin" role="form" method="POST" action="./post.php">
			<input class="button " type="file" name="upfile" accept="image/*; capture=camera, video/*; capture=camera">
			<input class="button sign-up" type="submit" value="UPLOAD">
		</form>
	</div>
</body>
</html>