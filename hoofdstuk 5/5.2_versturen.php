<?php
if(empty($_GET) == false)
{
    echo "<table>";
    echo "<tr>";
    $userFullName = $_GET["fullName"];
    echo "<td>Opgegeven naam:</td> <td>$userFullName</td>";
    echo "</tr>";
    echo "<tr>";
    $userStudentNumber = $_GET["studentNumber"];
    echo "<td>Opgegeven studentnummer:</td> <td>$userStudentNumber</td>";
    echo "</tr>";
    echo "<tr>";
    $userDate = $_GET["date"];
    echo "<td>Uitschrijf datum:</td> <td>$userDate</td>";
    echo "</tr>";
    echo "<tr>";
    $userReason = $_GET["reason"];
    echo "<td>Opgegeven reden:</td> <td>$userReason</td>";
    echo "</tr>";
    echo "<tr>";
    $userYear = $_GET["year"];
    echo "<td>Opgegeven leerjaar:</td> <td>$userYear</td>";
    echo "</tr>";
    echo "<tr>";
    $userSuccesKlas = $_GET["succesKlas"];
    echo "<td>Naar de succesklas:</td> <td>$userSuccesKlas</td>";
    echo "</tr>";
    echo "<tr>";
    $userDelete = $_GET["delete"];
    echo "<td>Verwijder gegevens:</td> <td>$userDelete</td>";
    echo "</tr>";
    echo "<tr>";
    $userExtraReason = $_GET["extraReason"];
    echo "<td>Extra redenen:</td> <td>$userExtraReason</td>";
    echo "</tr>";
    echo "</table>";
}
?>