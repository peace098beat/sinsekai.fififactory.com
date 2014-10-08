<?php


//テーブル名 (ハイフン"-"は使用不可)
$TBNAME = "asagiridev";
// データベースの初期化
// tbclear($TBNAME);
// データベースへ接続
$conn = init();


/**********************************************************
/ アップロードファイルの保存
/**********************************************************/
// header("Content-Type: text/html; charset=UTF-8");
// 文字コードの設定

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

	    $url = $fname;
	    // $memo = sprintf($_FILES["upfile"]);
	    $dt = date("Y/m/d H:i:s");

	    add_data($conn, $url, $memo, $dt);
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
	if(!$stmt->execute()){echo "DB削除に失敗";}


	}catch(PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}

	$sql="CREATE TABLE IF NOT EXISTS ".$TBNAME."(
		id INTEGER PRIMARY KEY AUTO_INCREMENT,
		URL VARCHAR(50) NOT NULL,
		memo TEXT,
		dt DATETIME
	)";
	$stmt = $conn->prepare($sql);
	if(!$stmt->execute()){echo "新規作成に失敗";}
	$conn = null;
}

// データの追加
function add_data($conn, $url, $memo, $dt) {
	global $TBNAME;
    $sql = "INSERT INTO ".$TBNAME. "(url, memo, dt) VALUES(:url, :memo, :dt)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":url", $url);
    $stmt->bindParam(":memo", $memo);
    $stmt->bindParam(":dt", $dt);
	if(!$stmt->execute()){echo "要素の追加に失敗";}
    $id = $conn->lastInsertId();
    return $id;
}

// $link1 = "http://shinsekai.fififactory.com/dev/asagiri-jam/index.php";
// $link2 = "http://shinsekai.fififactory.com/dev/asagiri-jam/Grid-A-Licious.php";

// header("HTTP/1.1 301 Moved Permanently");
// header("Location: $link2");
?>