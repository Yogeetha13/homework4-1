<?php
$name=filter_input(INPUT_POST,'name');
if($name==null||$name==false)
{
	$error = "Invalid data. Check all fields and try again";
	include('error.php');
}
else{
require_once('database.php');
$query = 'INSERT INTO categories_guitar2(categoryName) VALUES (:name)';
$statement = $db->prepare($query);
$statement->bindValue(':name',$name);
$statement->execute();
$statement->closeCursor();
include('category_list.php');
}
?>
