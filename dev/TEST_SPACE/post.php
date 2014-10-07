<?php
/**********************************************************
/ アップロードファイルの保存
/**********************************************************/
if( $data = $_FILES["upfile"] ){
  move_uploaded_file( $data["tmp_name"], "./img/".date(U).$data["name"] );
  move_uploaded_file( $data["tmp_name"], "./img/".$data["name"] );
  echo("<img src='"."./img/".date(U).$data["name"]."' alt=''>");
  echo("<video src='"."./img/".date(U).$data["name"]."' alt=''>");

  echo "昔の方法ではせいこうです。";
}else{
  echo "nono";
}


// http://www.tagindex.com/html5/form/input_file.html
if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "img/" . $_FILES["upfile"]["name"])) {
    chmod("img/" . $_FILES["upfile"]["name"], 0644);
    echo $_FILES["upfile"]["name"] . "をアップロードしました。";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "ファイルが選択されていません。";
}


  // header("HTTP/1.1 301 Moved Permanently");
  // header("Location: http://shinsekai.fififactory.com/TEST_SPACE/index.php");
?>