<?php
session_start();
?>
<form action='confirmInput.php' method='post'>
<label>Name</label>
<input type='text' value='' name='name'>
<br>

<label>Age</label>
<input type='text' value='' name='age'>
<br>

<input type='submit' value='confirm'>
<br>

<br>
</form>
<?php

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
$total=1;
$result=$db->query('select * from people');
while($row=$result->fetchArray(SQLITE3_ASSOC)){
	echo $row['id'] . ".";
	echo $row['name'] . "-";
	echo $row['age'] . "<br>";
	$total++;

}
$_SESSION['id']=$total;
?>
