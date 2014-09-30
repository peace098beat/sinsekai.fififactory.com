<?php
/**********************************************************
/ アップロードファイルの保存
/**********************************************************/
if( $data = $_FILES["photo"] ){
  move_uploaded_file( $data["tmp_name"], "./img/".date(U).$data["name"] );
  // move_uploaded_file( $data["tmp_name"], "./img/".$data["name"] );
  // echo("<img src='"."./img/".date(U).$data["name"]."' alt=''>");
}else{
  // echo "nono";
}


  header("HTTP/1.1 301 Moved Permanently");
  header("Location: http://orange.house.fififactory.com/www/index.php");
?>