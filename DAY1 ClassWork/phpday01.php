<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"  type="text/css" rel="stylesheet">
    <title>DAY01 PHP</title>
</head>
<body>
    
<?php

// Exer 1
$my_name = "<h1>Ruben</h1>";

echo $my_name;

// Exer 2

echo "result of exer 2:<br>";
$d = date("D");
if ($d == "Mon" )
echo "Happy Monday<br><br>";
else
echo "Have a nice day!<br>";

//Exer 3
echo "result of exer 3:<br>";

$d=date("D");
if ($d=="Mon" )
echo "Today is Monday";
elseif ($d=="Tue" )
echo "Today is Tuesday";
elseif ($d=="Wed")
echo "Today is Wednesday";
elseif ($d=="Thu")
echo "Today is Thursday";
else
echo "Today is Today" ;


 //Exer 4
 echo "<br><br>result of exer 4:<br>";
 for ($print_name = 0; $print_name <= 50; $print_name+=1) {
    echo "ruben: $print_name <br>";
 }

 // Exer 5
 echo "<br><br>result of exer 5:<br>";
// create an array
 $items = array("apple", "banana", "orange", "pineapple", "grapes", "melon", "peach", "cherries", "papaya", "mango");
 foreach ($items as $fruits)
 {
     echo "my favo fruit is: $fruits <br />";
 }
 
 // Exer 5
 echo "<br><br>result of exer 6:<br>";
// associative array
$cartoon ['2 Stupid Dogs'] = "pretty hillarious";
$anime ['dragonballz' ] = "superpowered fighters";
$game_characters ['Lara Croft'] = "sexy";
echo "I used to love 2 Stupid Dogs it was " .  $cartoon['2 Stupid Dogs'] . "<br />";
echo "dragonballz was all about " . $anime['dragonballz'] . "<br />";
echo "Who does not agree that Lara Croft is " . $game_characters['Lara Croft']. "<br />" ;


?>
</body>
</html>
