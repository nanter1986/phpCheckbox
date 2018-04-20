<?php

$name=$_POST['name'];
$age=$_POST['age'];
$id=$_POST['id'];

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
$result=$db->query("insert into people(id,name,age) values($id,'$name',$age)");

echo "insert successful";
?>
