<!DOCTYPE html>
<html>
<head>
    <title>Dag tijden</title>
</head>
<body>
<?php

$uur=date("G");
echo $uur;

if ($uur>=6 && $uur<12) {
    echo "ochtend";
}

if ($uur>=12 && $uur<18) {
    echo "middag";
}

if ($uur>=18 && $uur<24) {
    echo "avond";
}

if ($uur>24 && $uur<6) {
    echo "nacht";
}

?>


</body>
</html>
