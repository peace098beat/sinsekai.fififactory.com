<?php
/**********************************************************
/ サブルーチン
* init()
* tbclear()
* add_data()
/**********************************************************/
//テーブル名 (ハイフン"-"は使用不可)
$TBNAME = "tbAsagiriDev";
$conn = init();
// データベースの初期設定 
function init() {
		// データベースに接続
		// $dsn = "mysql:dbname=dbasagirdev;host=localhost";
		// $$dsn = 'mysql:dbname=stafflist;host=localhost';
		// $user = 'root';
		// $password = '';
		
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

// データベースの初期化
// tbclear($TBNAME);
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
		day DATE,
		time TIME,
		URLmain VARCHAR(50) ,
		URLsub1 VARCHAR(50) ,
		URLsub2 VARCHAR(50) ,
		URLsub3 VARCHAR(50) ,
		URLsub4 VARCHAR(50) ,
		URLsub5 VARCHAR(50) ,
		URLsub6 VARCHAR(50) ,
		URLsub7 VARCHAR(50) ,
		URLsub8 VARCHAR(50) ,
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
function add_data($conn, $day, $time, $URLmain, $URLsub, $memo, $dt) {
	
	global $TBNAME;
	$id = 99999999999;
	$sql = "INSERT INTO ".$TBNAME. "(day, time, URLmain, URLsub1, URLsub2, URLsub3, URLsub4,URLsub5, URLsub6, URLsub7, URLsub8, memo, dt) 
									VALUES
									(:day, :time, :URLmain, :URLsub1, :URLsub2, :URLsub3, :URLsub4, :URLsub5, :URLsub6, :URLsub7, :URLsub8, :memo, :dt)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(":day", $day);
	$stmt->bindParam(":time", $time);

	$stmt->bindParam(":URLmain", $URLmain);
	$stmt->bindParam(":URLsub1", $URLsub[0]);
	$stmt->bindParam(":URLsub2", $URLsub[1]);
	$stmt->bindParam(":URLsub3", $URLsub[2]);
	$stmt->bindParam(":URLsub4", $URLsub[3]);
	$stmt->bindParam(":URLsub5", $URLsub[4]);
	$stmt->bindParam(":URLsub6", $URLsub[5]);
	$stmt->bindParam(":URLsub7", $URLsub[6]);
	$stmt->bindParam(":URLsub8", $URLsub[7]);
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

function viewAllData($conn, $TBNAME){
	// global $TBNAME;

	// 全データの取得
	$sql = "SELECT * FROM ".$TBNAME." ORDER BY dt DESC";
	if($stmt = $conn->prepare($sql) ){
		$stmt->execute();
		return $stmt;
	}else{
		echo "要素の取得に失敗";
	}

	// データの一覧表示
	// echo "<table border=\"1\">";
	// 	$stmt->execute();
	// 	if($row = $stmt->fetch()) {
	// 	    echo "<tr>";
	// 		foreach ($row as $key => $value) {
	// 			# code...
	// 			if(!is_int($key)){			echo "<td>$key</td>";	}
	// 		}
	// 	    echo "</tr>";
	// 	   }
	// 	$stmt->execute();

	// 	while ($row = $stmt->fetch()) {
	// 	    echo "<tr>";
	// 		foreach ($row as $key => $value) {
	// 			# code...
	// 			if(!is_int($key)){			echo "<td>".$value."</td>";	}
	// 		}
	// 	    echo "</tr>";
	// 	}
	// echo "</table>";
}
// viewerAllData($conn);

?>