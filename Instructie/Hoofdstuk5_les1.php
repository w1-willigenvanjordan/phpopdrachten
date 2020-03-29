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
                    <a href="">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="">Opdracht 2.2</a>
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
    <h3>huisarts bezoek formulier</h3>
    <form   action="Hoofdstuk5_les1.php" method="get">
        <span>Naam</span>
        <input type="text" name="firstName">

        <span>Achternaam</span>
        <input type="text" name="lastName">

        <span>Geboortedatum</span>
        <input type="date" name="birthDate">

        <span>klachten</span>
        <textarea name="disease"></textarea>

        <input type="submit" value="verzenden">
    </form>

    <?php
    if(empty($_GET) == false)
    {
        echo "<table>";
        echo "<tr>";
        $userFirstName = $_GET["firstName"];
        echo "<td>Opgegeven naam:</td> <td>$userFirstName</td>";
        echo "</tr>";
        echo "<tr>";
        $userLastName = $_GET["lastName"];
        echo "<td>Opgegeven achternaam:</td> <td>$userLastName</td>";
        echo "</tr>";
        echo "<tr>";
        $userBirthDate = $_GET["birthDate"];
        echo "<td>Geboortedatum:</td> <td>$userBirthDate</td>";
        echo "</tr>";
        echo "<tr>";
        $userDisease = $_GET["disease"];
        echo "<td>Opgegeven klachten:</td> <td>$userDisease</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</main>
<?php
include("../includes/footer.php");
?>
</body>
</html>
