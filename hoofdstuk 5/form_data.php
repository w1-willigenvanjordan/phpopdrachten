<?php
if(empty($_POST) == false)
{
    echo "<table>";
    echo "<tr>";
    $userFirstName = $_POST["firstName"];
    echo "<td>Opgegeven naam:</td> <td>$userFirstName</td>";
    echo "</tr>";
    echo "<tr>";
    $userLastName = $_POST["lastName"];
    echo "<td>Opgegeven achternaam:</td> <td>$userLastName</td>";
    echo "</tr>";
    echo "<tr>";
    $userBirthDate = $_POST["birthDate"];
    echo "<td>Geboortedatum:</td> <td>$userBirthDate</td>";
    echo "</tr>";
    echo "<tr>";
    $userDisease = $_POST["disease"];
    echo "<td>Opgegeven klachten:</td> <td>$userDisease</td>";
    echo "</tr>";
    echo "</table>";
}
?>