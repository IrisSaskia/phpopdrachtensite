<!DOCTYPE html>
<html>
<head>
	<title>BierHier - Concerten</title>
	<link href="https://fonts.googleapis.com/css?family=Concert+One|Dosis:500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/styleconcerten.css">
</head>
<body>
	<?php
		include ("header.html");
	?>
	<h1 class = "title">Concerten</h1>
	<div id = "pagina_inhoud_concerten">
		<img id = "muziekplaatje" src = "images/concerten/muziek.jpg" />
        <div id = "float_right">
            <table>
                <tr>
                    <th>Datum</th>
                    <th>Tijd</th>
                    <th>Plaats</th>
                    <th>Band</th>
                </tr>
                <tr>
                    <td>15 juni 2017</td>
                    <td>15:00</td>
                    <td>Amsterdam</td>
                    <td>Green Day</td>
                </tr>
                <tr>
                    <td>13 juli 2017</td>
                    <td>17:30</td>
                    <td>Haarlem</td>
                    <td>The Offspring</td>
                </tr>
                <tr>
                    <td>29 juli 2017</td>
                    <td>21:30</td>
                    <td>Leeuwarden</td>
                    <td>Green Day</td>
                </tr>
                <tr>
                    <td>17 augustus 2017</td>
                    <td>13:00</td>
                    <td>Zwolle</td>
                    <td>Avenged Sevenfold</td>
                </tr>
                <tr>
                    <td>24 november 2017</td>
                    <td>19:00</td>
                    <td>Amsterdam</td>
                    <td>My Chemical Romance</td>
                </tr>
                <tr>
                    <td>25 novemmber 2017</td>
                    <td>15:00</td>
                    <td>Lelystad</td>
                    <td>Slipknot</td>
                </tr>
                <tr>
                    <td>26 november 2017</td>
                    <td>21:00</td>
                    <td>Almere</td>
                    <td>Panic! at the Disco</td>
                </tr>
                <tr>
                    <td>30 november 2017</td>
                    <td>19:45</td>
                    <td>Leeuwarden</td>
                    <td>Disturbed</td>
                </tr>
                <tr>
                    <td>3 december 2017</td>
                    <td>12:00</td>
                    <td>Amsterdam</td>
                    <td>Nirvana</td>
                </tr>
            </table>
            <div id="bereken_busreis">
                <p>
                    Wil je weten hoeveel je busreis naar het concert kost?<br />Voer dan hier je leeftijd in en het wordt zo berekend!
                </p>
                <form action="" method="GET">
                    Wat is je leeftijd? <input type="text" name="leeftijd">
                    <input type="submit">
                </form>
                <?php
                include ("busreis.php");
                ?>
            </div>
        </div>
	</div>
	<div id = "concert_images_container">
			<img src = "images/concerten/avengedsevenfold.jpg" class = "band_image_small"/>
			<img src = "images/concerten/greenday.jpg" class = "band_image_small"/>
			<img src = "images/concerten/mychemicalromance.jpeg" class = "band_image_small"/>
			<img src = "images/concerten/panicatthedisco.jpg" class = "band_image_small"/>
	</div>
	<?php
		include ("footer.html");
	?>
</body>
</html>