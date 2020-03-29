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
    <link href="../css/style.css" rel="stylesheet" type="text/css">
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
    <form method="get" action="5.2_versturen.php">
    <table>
        <tr>
            <th>Uitschrijfformulier KW1C</th>
        </tr>
        <tr>
            <td>Voor en achternaam</td>
            <td><input type="text" name="fullName"></td>
        </tr>
        <tr>
            <td>Studentnummer</td>
            <td><input type="number" name="studentNumber"></td>
        </tr>
        <tr>
            <td>Datum van uitschrijving</td>
            <td><input type="date" name="date"></td>
        </tr>
        <tr>
            <td>reden van uitschrijving</td>
            <td><select name="reason"> <option value="wrongChoice">verkeerde keuze gemaakt</option> <option value="school">ik ben ontevreden met de school</option> <option value="personal">persoonlijke redenen</option> <option value="other">andere reden</option> </select> </td>
        </tr>
        <tr>
            <td>leerjaar</td>
            <td><input type="radio" name="year" value="yearOne">eerste leerjaar</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" name="year" value="yearTwo">tweede leerjaar</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" name="year" value="yearThree">derde leerjaar</td>
        </tr>
        <tr>
            <td><input type="checkbox" name="succesKlas"> ik wil me aanmelden bij de succes klas</td>
        </tr>
        <tr>
            <td><input type="checkbox" name="delete">verwijder mijn gegevens uit het systeem</td>
        </tr>
        <tr>
            <td>Geef hieronder de reden van je uitschrijving op</td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="extraReason"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit"> </td>
        </tr>
    </table>
    </form>
</main>

<?php
include("../includes/footer.php");
?>
</body>
</html>
