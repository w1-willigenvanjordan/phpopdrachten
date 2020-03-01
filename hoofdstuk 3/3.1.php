<!DOCTYPE html>
<html>
<head>
    <title>
        PHP-opdrachten
    </title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("../includes/header.php")
?>
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
    <h2>Uitwerkingen</h2>
    <?php
        $evenement = "Elfstedentocht";
        $evenementFrs = "Alvestêdetocht";
        $length = 200;
        $tocht = "schaatstocht";
        $ijs = "natuurijs";
        $text = "Koninklijke Vereniging De Friesche Elf Steden";
        $locatie = "Leeuwarden";
        $provincie = "Friesland";
        $aantal = 15;
        $jaar = 1909;
        $hoevaak = 1;

        $verhaal = "de " . $evenement . " (Fries: " . $evenementFrs . ") is een " . $length . " kilometer lange " . $tocht . " over " . $ijs . " die wordt georganiseerd door de " . $text . ". " . $locatie . ", de hoodstad van " . $provincie . ", is start- en aankomstplaats." . $evenement . " is inmiddels " . $aantal . " maal verreden en werd voor het eerst in " . $jaar . " gereden en wordt maximaal " . $hoevaak . " keer per winter gehouden.";
        echo "<p> $verhaal </p>"
    ?>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>