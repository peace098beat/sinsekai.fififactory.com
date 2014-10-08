<?php
/**********************************************************
/ アップロードファイルの保存
/**********************************************************/
// header("Content-Type: text/html; charset=UTF-8");
// 文字コードの設定
// try {
// 	// if( $data = $_FILES["upfile"] ){
// 	// move_uploaded_file( $data["tmp_name"], "./updata/".date(U)."-".$data["name"] );
// 	// move_uploaded_file( $data["tmp_name"], "./updata/".$data["name"] );
// 	// echo("<img src='"."./img/".date(U).$data["name"]."' alt=''>");
// 	// echo("<video src='"."./img/".date(U).$data["name"]."' alt=''>");

// 	// echo "昔の方法ではせいこうです。";
// 	// }else{
// 	// echo "nono";
// 	// echo "昔の方法では失敗です";
// 	// }
// } catch (Exception $e) {
// 	// echo $e;
	
// }


// var_dump($_FILES);
// print_r($_FILES);
// print_r($_POST);

// http://www.tagindex.com/html5/form/input_file.html
// if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
//   if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "./updata/".date(U)."-".$_FILES["upfile"]["name"])) {
//     chmod("./updata/".date(U)."-".$_FILES["upfile"]["name"], 0644);
//     // echo $_FILES["upfile"]["name"] . "をアップロードしました。";
//   } else {
//     echo "<p>ファイルをアップロードできませんでした。</p>";
//   }
// } else {
//   echo "<p>ファイルが選択されていません。";
// }

// 複数ファイルに対応
$file_n = count($_FILES["upfile"]["tmp_name"]);

for ($i=0; $i < $file_n; $i++) { 
	if (is_uploaded_file($_FILES["upfile"]["tmp_name"][$i])) {
		// 保存するファイル名
		$fname_t = "./updata/".time()."%02d"."-".$_FILES["upfile"]["name"][$i];
		$fname = sprintf($fname_t, $i);
	  if (move_uploaded_file($_FILES["upfile"]["tmp_name"][$i], $fname)) {
	  	// ファイルのパーミッションを変更
	    chmod($fname, 0644);
	    echo $_FILES["upfile"]["name"] . "をアップロードしました。";
	  } else {
	    echo "<p>ファイルをアップロードできませんでした。</p>";
	  }
	} else {
	  echo "<p>ファイルが選択されていません。";
	}
}

$link1 = "http://shinsekai.fififactory.com/dev/asagiri-jam/index.php";
$link2 = "http://shinsekai.fififactory.com/dev/asagiri-jam/Grid-A-Licious.php";

// header("HTTP/1.1 301 Moved Permanently");
// header("Location: $link2");
?>