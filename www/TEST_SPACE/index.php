<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Thu Sep 04 2014 13:13:50 GMT+0000 (UTC) -->
<html data-wf-site="540861d86996865637ef2410" data-wf-page="540861d86996865637ef2412">
<head>
  <meta charset="utf-8">
  <title>orage.house</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/oragehouse.webflow.css">
  <script src="./js/jquery-1.10.2.min.js"></script>
  <script src="./js/lightbox-2.6.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/lightbox.css">


  <script>
    WebFont.load({
      google: {
        families: ["Montserrat:400,700","Varela Round:400","Varela:400"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/webclip-gallio.png">
  <link rel="apple-touch-icon" href="images/webclip-gallio.png">
</head>
<body>
  <header class="nav-bar">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4 brand-column">
          <img class="logo" src="images/1-logo.png" width="41px" alt="56173961-991d-4ed7-8529-a235d3aabaf6_1-logo.png">
          <div class="company">Orange House</div>
        </div>
        <nav class="w-col w-col-8 nav-column"><a class="nav-link" href="#features">Features</a>
        </nav>
      </div>
    </div>
  </header>
  <div class="section hero">
    <div class="w-container">
      <h1 class="hero-heading">Welcom Orange House Photo Album</h1>
      <p class="hero-subhead">オレンジハウス用のフォトアルバムです.みんな写真をあげてね.</p>
      
      <div class="button-group">
        <!-- <a class="button sign-up" href="#">upload</a> -->

      <form action="post.php" enctype="multipart/form-data" method="post">
        <input class="button " type="file" name="photo" accept="image/*; capture=camera">
        <input class="button sign-up" type="submit" value="UPLOAD">
      </form>


      </div>
    </div>
  </div>



<?php
/**********************************************************
/ ディレクトリ内の情報を取得する
/**********************************************************/
$array = scandir("./img/");
// mb_convert_variables("EUC-JP", "UTF-8", $array);
// mb_convert_variables("UTF-8", "UTF-8", $array);


// 画像ファイル以外を配列から削除;
$i = 0;
while($file_name = $array[$i]){
  $path = "./img/".$file_name;
  // echo "<p>".$path;
  if(@getimagesize($path)){
    $i ++;
  }else{
    array_splice($array, $i, 1);
  }
}

/**********************************************************
/ サムネイル表示
/**********************************************************/
$j=0;
while($temp = $array[$j]) {
  
  echo '<div class="section" id="mobile"><div class="w-container photo-con"><div class="w-row">';

  if($a=$array[$j]){
    echo '<div class="w-col w-col-3"><img class="photo-img" src=" '."./img/".$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>
    ';
  }
  if($a=$array[$j]){
    echo '<div class="w-col w-col-3"><img class="photo-img" src=" '."./img/".$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>
    ';
  }
  if($a=$array[$j]){
    echo '<div class="w-col w-col-3"><img class="photo-img" src=" '."./img/".$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>
    ';
  }
  if($a=$array[$j]){
    echo '<div class="w-col w-col-3"><img class="photo-img" src=" '."./img/".$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>
    ';
  }
  
  // echo '<div class="w-col w-col-3"><img class="photo-img" src=" '."./img/".$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>';
  // echo '<div class="w-col w-col-3"><img class="photo-img" src=" '."./img/".$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>';
  // echo '<div class="w-col w-col-3"><img class="photo-img" src=" '."./img/".$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>';

  echo '</div></div></div>';

}

?>

<?php
/**********************************************************
/ lightboxを使ってみる
/**********************************************************/
// $j=999;
// while($temp = $array[$j]) {
  
//   echo '<div class="section" id="mobile">
//   <div class="w-container photo-con">
//   <div class="w-row">';

//   echo '
//   <div class="w-col w-col-3">
//     <a href="./img/'.$array[$j].' " data-lightbox="roadtrip"><img src="./img/'.$array[$j++].' " ></a></div>
//   <div class="w-col w-col-3">
//     <a href="./img/'.$array[$j].' " data-lightbox="roadtrip"><img src="./img/'.$array[$j++].' " ></a></div>
//   <div class="w-col w-col-3">
//     <a href="./img/'.$array[$j].' " data-lightbox="roadtrip"><img src="./img/'.$array[$j++].' " ></a></div>
//   <div class="w-col w-col-3">
//     <a href="./img/'.$array[$j].' " data-lightbox="roadtrip"><img src="./img/'.$array[$j++].' " ></a></div>

//   ';
//   // <img class="photo-img" src=" '."./img/".$array[$j++].' " alt=" '.$array[$j].' ">
//   echo '</div></div></div>';
// }
?>


  <footer class="section footer">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <div class="footer-text">FiFiFactory.com</div>
        </div>
        <div class="w-col w-col-6 right-footer-col">
          <a class="w-inline-block social-icon" href="mailto:support@webflow.com?subject=Hello">
            <img src="images/14-social-email.png" width="20" alt="35ec5a20-6309-494a-9d48-0e463a4d6214_14-social-email.png">
          </a>
          <a class="w-inline-block social-icon" href="http://facebook.com/webflow" target="_blank">
            <img src="images/14-social-facebook.png" width="20" alt="8643c589-cd4b-46b1-956b-2eb95815c79c_14-social-facebook.png">
          </a>
          <a class="w-inline-block social-icon" href="http://www.twitter.com/webflowapp" target="_blank">
            <img src="images/14-social-twitter.png" width="20" alt="a1c85180-93b5-44b0-9d23-1cfa6881fdfe_14-social-twitter.png">
          </a>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>