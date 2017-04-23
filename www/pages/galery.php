
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../public/main.css">
	<title>галерея</title>
</head>
<body>
 <?php require_once "../block/header.php" ?>
	<div id="content" style="width: 100%;">
		<h2>галерея</h2>
        <form action="galery.php" method="post" enctype='multipart/form-data'>
            <input type="file" name="file"><br>
            <br>
            <input type="submit" name="done">
            <br>
        </form>
        <br>
        <div id="image_conteiner">
            <?php

            require_once "add_image.php";
            ?>
        </div>

	</div>

	<?php require_once "../block/footer.php" ?>
</body>
</html>