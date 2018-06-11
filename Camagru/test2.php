<?php

	session_start();

	$answer1 = $_POST['answer1'];

	$_SESSION['answer1'] = $answer1;

?>


<!DOCTYPE html>
<html>
<head>
	<title>test2</title>
</head>
<body>
	<p>Вопрос 2</p>
	<p>3 + 3 = ?</p>
	<form action="test3.php" method="post">
		<input type="text" name="answer2">
		<input type="submit">
	</form>
</body>
</html>