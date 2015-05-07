<html>
<head>
<meta charset="utf-8">
</head>
<body>N
<?php


$my_hand=$_GET["hand"];
$com_hand=rand(0,2);
if ($my_hand==1 && $com_hand==1){
	echo "勝敗はチョキであいこです！<br>";
}
elseif ($my_hand==0 && $com_hand==0){
	echo "勝敗はグーであいこです！<br>";
}
elseif ($my_hand==2 && $com_hand==2){
	echo "勝敗はパーであいこです！<br>";
}elseif ($my_hand-$com_hand==2){
	echo "勝利<br>";
	echo"あなたの手はパー、コンピューターはグーでした<br>";
}
elseif ($my_hand==2 && $com_hand==1){
	echo "負け<br>";
	echo"あなたの手はパー、コンピューターはチョキでした<br>";
}	
elseif ($my_hand==0 && $com_hand==1){
	echo "勝利<br>";
	echo"あなたの手はグー、コンピューターはチョキでした<br>";
}

elseif ($my_hand==1 && $com_hand==2 ){
	echo "勝利<br>";
	echo"あなたの手はチョキ、コンピューターはパーでした<br>";
}

elseif ($my_hand==1 && $com_hand==0){
	echo "負け<br>";
	echo"あなたの手はチョキ、コンピューターはグーでした<br>";
	
}
elseif ($com_hand-$my_hand==2){
	echo "負け<br>";
	echo"あなたの手はグー、コンピューターはパーでした<br>";
	}

?>
</body>
</html>