<?php
我是分支2號
123456
張宸瑜吃大便
<<<<<<< HEAD
我再改main!!
=======
<<<<<<< HEAD
我是分支哈哈
你是智障嗎
=======
>>>>>>> tiff2
汪汪汪冠儀吃屎
哈哈哈我不會分之
>>>>>>> 67b2619504ec8d3757e5bef7c7f4203574f884d0
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
