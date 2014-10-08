<?php
/**********************************************************
/ アップロードファイルの保存
/**********************************************************/
// header("Content-Type: text/html; charset=UTF-8");
// 文字コードの設定

// print_r($_FILES);

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
	    // echo $_FILES["upfile"]["name"] . "をアップロードしました。";
	  } else {
	    // echo "<p>ファイルをアップロードできませんでした。</p>";
	  }
	} else {
	  // echo "<p>ファイルが選択されていません。";
	}
}

/**********************************************************
/ データベースへの保存
/**********************************************************/
//テーブル名 (ハイフン"-"は使用不可)
$TBNAME = "asagiridev";

// データベースの初期化
tbclear($TBNAME);

// データベースへ接続
$conn = init();

// データベースの初期設定 
function init() {
		// データベースに接続
		$dsn = "mysql:dbname=sddb0040169390;host=sddb0040169390.cgidb";
		$user = 'sddbNDg4NjQ3';
		$password = 'wQ5vs7MD';

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
	$stmt->execute();
	}catch(PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}


	$sql="CREATE TABLE IF NOT EXISTS ".$TBNAME."(
		id INTEGER PRIMARY KEY AUTO_INCREMENT,
		user VARCHAR(50) NOT NULL,
		publishd VARCHAR(50) NOT NULL,
		story VARCHAR(50) ,
		plan VARCHAR(50) ,
		memo TEXT,
		ordmaild VARCHAR(50) ,
		phogetd VARCHAR(50) ,
		scand VARCHAR(50) ,
		mkvideod VARCHAR(50) ,
		mkdvdd VARCHAR(50) ,
		postd VARCHAR(50) ,
		deliverd VARCHAR(50) ,
		dt DATETIME
	)";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$conn = null;
}



// $link1 = "http://shinsekai.fififactory.com/dev/asagiri-jam/index.php";
// $link2 = "http://shinsekai.fififactory.com/dev/asagiri-jam/Grid-A-Licious.php";

// header("HTTP/1.1 301 Moved Permanently");
// header("Location: $link2");
?>