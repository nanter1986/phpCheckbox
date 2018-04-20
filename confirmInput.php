<?php
session_start();

$name=$_POST['name'];
$age=$_POST['age'];
$id=$_SESSION['id'];

function createDate(){
	$d=date("Y-m-d h:i:sa");
	echo $d;
	return $d;
}

echo "$id"."-"."$name" ."-" . "$age";
class MyDB extends SQLite3 {
	function __construct() {
		$this->open('names.db');
	}
}

$db = new MyDB();
if(!$db){
	echo $db->lastErrorMsg();
} else {
	echo "Opened database successfully\n";
}
$date=createDate();
$result=$db->query("insert into people(id,name,age,registered) values($id,'$name',$age,'$date')");

echo "insert successful";
?>
