<?php

    if (isset($_POST['name']) && (!empty($_POST['name']))) 
    {
        $name = $_POST['name'];
        setcookie('name', $name, time() - 3600);
    }
    else if (isset($_COOKIE['name'])) 
    {
        $name = $_COOKIE['name'];
    }
    else
        $name = 'Гость';
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Страница index.php</title>
    <meta charset="utf-8">
<body>
    <h1>Cтраница index.php</h1>
    <a href="page.php">Страница page.php</a>
    <br>
    <br>
    <p>Привет, <?php echo $name; ?></p>
    <form method="post">
            <input type="text" name="name">
            <input type="submit">
    </form>
</body>
</html>