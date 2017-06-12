<!DOCTYPE html>
<html>
<head>
	<title>BierHier - Recepten</title>
	<link href="https://fonts.googleapis.com/css?family=Concert+One|Dosis:500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/stylerecepten.css">
</head>
<body>
	<?php
		include ("header.html");
	?>
	<div id = "pagina_inhoud">
		<h1 class = "title">Recepten</h1>
        <br />
        <div id = "boom_blok">
            <div id = "boom">
                <?php
                    include("kerstboom.php");
                ?>
            </div>
            <div id = "form_boom">
                <form action="" method="GET">
                    Hoeveel lagen?
                    <input type="text" name="aantal">
                    <input type="submit" value="Teken kerstboom">
                </form>
            </div>
        </div>
	</div>
	<?php
		include ("footer.html");
	?>
</body>
</html>