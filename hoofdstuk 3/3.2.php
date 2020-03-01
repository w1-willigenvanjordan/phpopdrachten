<?php
/**
* User: Jordan van Willigen
* Date: 13-2-2020
* Time: 9:01
* File: index.php
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        PHP-opdrachten
    </title>
    <link href="../CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="opdracht%202.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="opdracht%202.2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="">Opdracht 4.4</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="">Opdracht 5.3</a>
                </li>
                <li>
                    <a href="">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2><br>
    <?php
        //declareren    en    initialiseren van gewenste variablen
        $trafficLightColor = "Oranje";
        $ambulanceComing = true;

        //driveOn
        $driveOn = true;

        //controleren of auto mag doorrijden of moet stoppen
        if($trafficLightColor == "Groen" && $ambulanceComing == false)
        {
            $driveOn = true;
        }
        else if($trafficLightColor == "Oranje" && $ambulanceComing == true)
        {
            $driveOn = false;
        }
        else if($trafficLightColor == "Rood" || $ambulanceComing == true)
        {
            $driveOn = false;
        }
        else
        {
            echo("<p>Foutje, het stoplicht heeft een ongeldige kleur.</p>");
            $driveOn = true;
        }
        //tonen van melding automobilist
        if($driveOn == true)
        {
            echo("<h1 style='color: green;'>U mag doorrijden</h1>");
        }
        else
        {
            echo("<h1 style='color: red;'>U moet stoppen</h1>");
        }
        //deel 2: electric boogaloo
        $countryName = "Zweden";
        $currentAge = 21;

        //tonen algemene gegevens
        echo("je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.");

        //tonen van de drank informatie
        if($countryName == "België" && $currentAge >= 16 && $currentAge <= 18)
        {
            echo "<p>Je mag hier zwakke alcohol drinken.</p>";
        }
        else if($countryName == "België" && $currentAge >= 18)
        {
            echo "<p>Je mag hier sterke alcohol drinken.</p>";
        }
        else if($countryName == "Bulgarije" && $currentAge >= 18)
        {
            echo "<p>Je mag hier sterke alcohol drinken.</p>";
        }
        else
        {
            echo "<p>Hier mag je geen alcohol drinken.</p>";
        }
        else if($countryName == "Cyprus" && $currentAge >= 17)
        {
            echo "<p>Je mag hier sterke alcohol drinken.</p>";
        }
        else
        {
            echo "<p>Hier mag je geen alcohol drinken.</p>";
        }
        else if($countryName == "Nederland" && $currentAge >=18)
        {
            echo "<p>Je mag hier sterke alcohol drinken.</p>";
        else
        {
            echo "<p>Hier mag je geen alcohol drinken.</p>";
        }
        else if($countryName == "Zweden" && $currentAge >=18 && $currentAge <= 20)
        {
            echo "<p>Je mag hier zwakke alcohol drinken.</p>";
        }
        else if($countryName == "Zweden" && $currentAge >= 20)
        {
            echo "<p>Je mag hier sterke alcohol drinken.</p>";
        }
    ?>
</main>
</body>
</html>