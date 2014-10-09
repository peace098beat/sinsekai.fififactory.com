<?php

/**********************************************************
*
*	saveToUpfile.php
*
/**********************************************************/
// 文字コードの設定
header("Content-Type: text/html; charset=UTF-8");

//テーブル名 (ハイフン"-"は使用不可)
$TBNAME = "asagiridev";
// データベースの初期化
// tbclear($TBNAME);
// データベースへ接続
$conn = init();

// 共通アクセスタイム
$timecode = time();
$dt = date("Y/m/d H:i:s");
// DB返却用の変数
$title = $_POST["title"];
$URLmain = "";
$URLsub1 = "";
$URLsub2 = "";
$memo = $_POST["message"];
$URLsub=array("","","","","","","","");


print_r($_FILES);
print_r($_POST);
echo mb_detect_encoding($_POST["message"]);
echo "<br>";

/**********************************************************
/ アップロードファイルの保存
/**********************************************************/
// mainファイルの確認
if (is_uploaded_file($_FILES["upfile_main"]["tmp_name"])) {
	// 保存するファイル名の作成
	$ori_name = $_FILES["upfile_main"]["name"];
	$ext = substr(strrchr($ori_name, '.'), 1);
	$fname_t = "./updata/".$timecode."_"."%s".".".$ext;
	$fname = sprintf($fname_t, "m");

  if (move_uploaded_file($_FILES["upfile_main"]["tmp_name"], $fname)) {
  	// ファイルのパーミッションを変更
    chmod($fname, 0644);
    echo $fname . "をアップロードしました。<br>";
    $URLmain = $fname;

  } else {
    echo "<p>ファイルをアップロードできませんでした。<br>";
  }
} else {
  echo "<p>ファイルが選択されていません。<br>";
}


// subファイルの保存
$fcount = count($_FILES["upfile_sub"]["tmp_name"]);

for ($i=0; $i < $fcount; $i++) { 
	if (is_uploaded_file($_FILES["upfile_sub"]["tmp_name"][$i])) {
		// 保存するファイル名の作成
		$ori_name = $_FILES["upfile_sub"]["name"][$i];
		$ext = substr(strrchr($ori_name, '.'), 1);
		$fname_t = "./updata/".$timecode."_"."%s%d".".".$ext;
		$fname = sprintf($fname_t, "s",$i);

	  if (move_uploaded_file($_FILES["upfile_sub"]["tmp_name"][$i], $fname)) {
	  	// ファイルのパーミッションを変更
	    chmod($fname, 0644);
	    echo $fname . "をアップロードしました。<br>";
	    $URLsub[$i]=$fname;
	  } else {
	    echo "<p>ファイルをアップロードできませんでした。</p><br>";
	  }
	} else {
	  echo "<p>ファイルが選択されていません。<br>";
	}
}

/**********************************************************
/ データベースへの保存
/**********************************************************/
$URLsub1 = $URLsub[0];
$URLsub2 = $URLsub[1];

add_data($conn, $title, $URLmain, $URLsub1, $URLsub2, $memo, $dt) ;

/**********************************************************
/ サブルーチン
* init()
* tbclear()
* add_data()
/**********************************************************/
// データベースの初期設定 
function init() {
		// データベースに接続
		$dsn = "mysql:dbname=dbasagirdev;host=localhost";
		$$dsn = 'mysql:dbname=stafflist;host=localhost';
		$user = 'root';
		$password = '';

		try{
			$conn = new PDO($dsn, $user, $password);
		}catch(PDOException $e){
			print('Error:'.$e->getMessage());
		die();
		}
		// 文字化け対策
		$sql = "SET NAMES utf8";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		return $conn;
}

// DBを初期化
function tbclear($TBNAME){

	$conn = init();
	// 既存のテーブルを削除
	try{
	$sql="DROP TABLE ".$TBNAME;
	$stmt = $conn->prepare($sql);
	if($stmt->execute()){
		echo "DBを削除<br>";
	}else{
		echo "DB削除に失敗<br>";
	}

	}catch(PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}

	$sql="CREATE TABLE IF NOT EXISTS ".$TBNAME."(
		id INTEGER PRIMARY KEY AUTO_INCREMENT,
		title VARCHAR(50),
		URLmain VARCHAR(50) ,
		URLsub1 VARCHAR(50) ,
		URLsub2 VARCHAR(50) ,
		memo TEXT,
		hidden INT NOT NULL DEFAULT '0',
		dt DATETIME
	)";
	$stmt = $conn->prepare($sql);
	if($stmt->execute()){
		echo "DBを新規作成<br>";
	}else{
		echo "新規作成に失敗<br>";
	}
	$conn = null;
}

// データの追加
function add_data($conn, $title, $URLmain, $URLsub1, $URLsub2, $memo, $dt) {
	
	global $TBNAME;
	$id = 99999999999;
    $sql = "INSERT INTO ".$TBNAME. "(title, URLmain, URLsub1, URLsub2, memo, dt) 
    								VALUES
    								(:title, :URLmain, :URLsub1, :URLsub2, :memo, :dt)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":URLmain", $URLmain);
    $stmt->bindParam(":URLsub1", $URLsub1);
    $stmt->bindParam(":URLsub2", $URLsub2);
    $stmt->bindParam(":memo", $memo);

    $stmt->bindParam(":dt", $dt);

	if(!$stmt->execute()){
		echo "要素の追加に失敗<br>";
	}else{
    	$id = $conn->lastInsertId();
		echo "要素の追加に成功<br>id=".$id."<br>";
	}
    return $id;
}

// $link1 = "http://shinsekai.fififactory.com/dev/asagiri-jam/index.php";
// $link2 = "http://shinsekai.fififactory.com/dev/asagiri-jam/Grid-A-Licious.php";

// header("HTTP/1.1 301 Moved Permanently");
// header("Location: $link2");
?>