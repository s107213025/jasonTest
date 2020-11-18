<?php
123456
張宸瑜吃大便
我是分支哈哈
你是智障嗎
require("dbconnect.php");
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$importance=mysqli_real_escape_string($conn,$_POST['importance']);

if ($title) { //if title is not empty
	$sql = "insert into todo1 (title, content, status, importance) values ('$title', '$content','$status', '$importance');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg= "Message added";
	header("Location:listTodo.php?m=$msg");
} else {
	$msg= "Message title cannot be empty";
}

?>
