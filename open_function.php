<?php

// $username = "MySQL ユーザー名";
// $password = "MySQL パスワード";
$username = "...";
$password = "...";

try{
	// $pdo = new PDO("mysql:host=ホスト名;dbname=データベース名;charset=utf8",$username,$password);
	$pdo = new PDO("mysql:host=...;dbname=...;charset=utf8",$username,$password);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $e){
	exit("接続失敗".$e->getMessage());
}

$stmt = $pdo->prepare("SELECT * FROM test2");
$stmt->execute();
$ranking = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($ranking); //json形式に変換して出力
?>

<!-- //データをUnity側へ出力 -->
