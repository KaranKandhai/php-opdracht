<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Hello World</title>
</head>
<body>
<h1>
    <?php
    date_default_timezone_set("Europe/Amsterdam");

    $today = date("j F Y");
    echo "Vandaag is het: $today";

    echo "<br>";

    $month = date("F");
    $daysInMonth = date("t");
    echo "Deze maand, $month heeft $daysInMonth dagen";

    echo "<br>";

    $week = date("W");
    echo "Deze week is het week: $week";

    if (date("L") == 1) {
        echo "Het jaar" . date("Y") . "is een schrikkeljaar.";
    } else {
        echo "het jaar" . date("Y") . "is geen schrikkeljaar.";
    }

    ?>
</h1>
</body>
</html>
