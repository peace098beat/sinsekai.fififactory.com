	<div id="cardlist" class="container margin-b30">';


	<?php
	$TBNAME = "tbAsagiriDev";
	require("dbSDK.php");
	
	function cardlist($s){

		$html_card14 = '
		<div id="card" class="container">
			<div class="card-title"><h1>title 19:30</h1></div>
			<div class="row margin-b30">
				<div class="col-xs-6 " style="padding:0px;">
						<img class="card-thumneil50" src="http://placehold.it/320x180">
						<img class="card-thumneil50" src="http://placehold.it/320x180">
						<img class="card-thumneil50" src="http://placehold.it/320x180">
						<img class="card-thumneil50" src="http://placehold.it/320x180">
				</div>
				<div class="col-xs-6" style="padding:0px;">
						<img class="card-thumneil50" src="http://placehold.it/320x180">
						<img class="card-thumneil50" src="http://placehold.it/320x180">
						<img class="card-thumneil50" src="http://placehold.it/320x180">
						<img class="card-thumneil50" src="http://placehold.it/320x180">
				</div>
			</div> <!-- row -->
			<div class="card-message"><p>準備が始まりました。台風の予感。。。無事開催されることを願います。</p></div>
		</div> <!-- card -->';
		

		$html_card44 = '
		<div id="card" class="container">
			<div class="card-title"><h1>%s %s</div>
			<div class="row margin-b30">
				<div class="col-xs-6 " style="padding:0px;">
						<img class="card-thumneil100" src="%s">
				</div>
				<div class="col-xs-6" style="padding:0px;">
						<img class="card-thumneil50" src="%s">
						<img class="card-thumneil50" src="%s">
						<img class="card-thumneil50" src="%s">
						<img class="card-thumneil50" src="%s">
				</div>
			</div> <!-- row -->
			<div class="card-message"><p>%s</p></div>
		</div> <!-- card -->
		';

		if($s == 1){
			return $html_card14;
		}else{
			return $html_card44;
		}
	}

	$conn = init();
	// $stmt = viewAllData($conn, $TBNAME);
	$sql = "SELECT * FROM ".$TBNAME." ORDER BY dt DESC";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$HTML = cardlist(2);
	$PATH = "./updata/";
	while($row = $stmt -> fetch()){
		// var_dump($row);
		$ary = null;
		$ary=array();
		$ary[]=$row["day"];
		$ary[]=$row["time"];
		$ary[]=$PATH."s-".$row["URLmain"];
		$ary[]=$PATH."s-".$row["URLsub1"];
		$ary[]=$PATH."s-".$row["URLsub2"];
		$ary[]=$PATH."s-".$row["URLsub3"];
		$ary[]=$PATH."s-".$row["URLsub4"];
		$ary[]=$row["memo"];
		echo vsprintf($HTML, $ary );
	}

	?>
</div> <!-- cardlist -->