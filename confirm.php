<?php

$myA=$_POST['myarray'];
foreach($myA as $a){
	echo $a . "<br>";

}
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
$result=$db->query('select * from people');
while($row=$result->fetchArray(SQLITE3_ASSOC)){
	echo $row['id'] . ".";
	echo $row['name'] . "-";
	echo $row['age'] . "<br>";

}
?>
