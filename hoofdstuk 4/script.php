<?php
$task2 = "lancering in: ";
    echo "$task2";
$counterT2 = 20;
    while ($counterT2 >= 0 ){
        echo "$counterT2,  ";
        $counterT2--;
    }
echo "<br>";
//Taak 3
$task3 = "lancering in: ";
    echo "$task3";
for($counterT3 = 20; $counterT3 >= 0; $counterT3--){
    echo "$counterT3, ";
}
echo "<br>";
//Taak 4
$task4 = "";
$counterT4 = 1;
    while ($counterT4 <= 6){
        echo "<h$counterT4> Dit is de $counterT4 e itteratie. </h$counterT4>";
        $counterT4++;
    }
//Taak 5
$task5 = "";
    echo "<table><tr>";
for($counterT5 = 1; $counterT5 <=10; $counterT5++){
  echo "<td>Dit is de $counterT5 e itteratie</td>";
}
    echo "</tr></table>";
//Taak 6
$task6 = "";
$age = 17;
$currentYear = 2020;
while($currentYear >=2003){
    echo "in $currentYear was ik $age jaar oud<br>";
    $age--;
    $currentYear--;
    //taak 7
    if($currentYear == 2015){
        echo "ik was een puber ";
    }
    elseif ($currentYear == 2011){
        echo "ik was een tiener ";
    }
    elseif ($currentYear == 2007){
        echo "ik was een kleuter ";
    }
    elseif ($currentYear == 2005){
        echo "ik was een peuter ";
    }
}
//Taak 8
echo "$age";
echo "$currentYear <br>";
echo "$counterT2 <br>";
echo "$counterT3 <br>";
echo "$counterT4 <br>";
echo "$counterT5 <br>";
?>