<!DOCTYPE html>
<html>
<head>
    <title>random nummer</title>
</head>
<body>
<?php

function randomZipCode() {

    $randomNumber = rand(1000,9999);



    $randomLetter1 = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

    $randomLetter2 = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

    $rand1 = rand(0,25);

    $rand2 = rand(0,25);

    echo "een willekeurige postcode is:  ";

    echo "$randomNumber";

    echo $randomLetter1[$rand1];

    echo $randomLetter2[$rand2];

}



randomZipCode();
?>
</body>
