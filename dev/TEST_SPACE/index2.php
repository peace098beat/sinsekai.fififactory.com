
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sinsekai</title>
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <script src="./js/jquery-1.10.2.min.js"></script>
  <script src="./js/lightbox-2.6.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/lightbox.css">
 <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />

  <!-- GUIでデザイン付くって、自動でHTMLを作るソフトを作ってくれるサービスを使っているので、コードが複雑 -->
  <!-- あんまり意味分かりません。 -->
</head>
<style type="text/css">
	.photo-img{
		width:100px;
	}
</style>
<body>

      <form action="post.php" enctype="multipart/form-data" method="post">
        <input class="button " type="file" name="upfile" accept="image/*; capture=camera, video/*; capture=camera">
        <input class="button sign-up" type="submit" value="UPLOAD">
      </form>

<?php
/**********************************************************
//
// 1. ディレクトリ内の情報を取得する
//
/**********************************************************/
// ディレクトリ内の画像ファイルの"ファイル名"を配列に格納
$CUR_FILE_PATH = "./img/";
$array = scandir($CUR_FILE_PATH);
// mb_convert_variables("EUC-JP", "UTF-8", $array);
// mb_convert_variables("UTF-8", "UTF-8", $array);

$i = 0;
// 名前を格納した配列$arrayから、一つづつ$file_nameに入れて、存在するか確認している。存在する間whileが回る。
while($file_name = $array[$i]){
  $path = $CUR_FILE_PATH.$file_name;

  if(@getimagesize($path)){ // もし画像なら、imagesizeが0以上になる
    $i ++; //何もせず、配列番号をインクリメント
  }else{
    array_splice($array, $i, 1); // 画像じゃないなら、配列から要素(文字列)ごと削除する。
  }
}

/**********************************************************
//
// 2. サムネイル表示
//
/**********************************************************/
$j=99;
while($temp = $array[$j]) {
  
  echo '<div class="container"><div class="w-container photo-con"><div class="w-row">';

  // 1行に4列表示
  // つまり1行に4枚の画像を読み出して、URLを指定してあげて、htmlに埋め込んでいる。
  // このif文は、画像があるかないかを見ているだけ。(最後のほうで画像が無いときは、"画像無し"のアイコンになってみっともないから、無いときは表示しない)
  // ほとんどはHTMLのおまじない. 
  if($a=$array[$j]){
    echo '<div class="w-col w-col-3"><img class="photo-img" src=" '.$CUR_FILE_PATH.$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>
    ';
  }
  if($a=$array[$j]){
    echo '<div class="w-col w-col-3"><img class="photo-img" src=" '.$CUR_FILE_PATH.$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>
    ';
  }
  if($a=$array[$j]){
    echo '<div class="w-col w-col-3"><img class="photo-img" src=" '.$CUR_FILE_PATH.$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>
    ';
  }
  if($a=$array[$j]){
    echo '<div class="w-col w-col-3"><img class="photo-img" src=" '.$CUR_FILE_PATH.$array[$j].' " alt=" '.$array[$j].' ">'.$array[$j++].'</div>
    ';
  }

  echo '</div></div></div>';
}
?>

<!-- lightbox -->
<?php
/**********************************************************
/ lightboxを使ってみる
/**********************************************************/
$j=0;
while($temp = $array[$j]) {
  
  echo '<div class="section"><div class="container">
  <div class="fluid">';

  echo '
  <div>
    <a href="./img/'.$array[$j].' " data-lightbox="roadtrip"><img class="photo-img" src="./img/'.$array[$j++].' " ></a></div>  ';

  echo '</div></div></div>';
}
?>








	<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>