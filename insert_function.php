<?php

$username = "...";
$password = "...";

$name = (string)filter_input(INPUT_POST, 'name');
$score = (int)filter_input(INPUT_POST, 'score');

try{
	// $pdo = new PDO("mysql:host=ホスト名;dbname=DB名;charset=utf8",$username,$password);
	$pdo = new PDO("mysql:host=...;dbname=...;charset=utf8",$username,$password);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $e){
	exit("接続失敗".$e->getMessage());
}

if($name == null){
	$name = "GUEST";
}

// $stmt = $pdo->prepare("insert into user_data(name,score) value (:name,:score)");
$stmt = $pdo->prepare("INSERT INTO test2(id,name,score)VALUES(NULL,:name,:score)");
$stmt->bindParam(':name',$name,PDO::PARAM_STR);
$stmt->bindParam(':score',$score,PDO::PARAM_INT);
$stmt->execute();

?>

<!-- データをPHP経由でMySQLに格納 -->
