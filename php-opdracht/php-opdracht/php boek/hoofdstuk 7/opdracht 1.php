<?php
var_dump($_POST);

if(isset($_POST['uitrekenen'])) {


if(!empty($_POST['bedrag']) && !empty($_POST['btw'])) {


$btw=filter_input(INPUT_POST,'btw', FILTER_VALIDATE_INT);
$bedrag=filter_input(INPUT_POST, 'bedrag',FILTER_VALIDATE_FLOAT);


if($bedrag===false) {
$melding= "vul een bedrag in";
} else {

if ($btw === 6) {
$melding = "Bedrag € $bedrag inclusief 6% BTW: € " .
round(($bedrag * 1.06),2);
} else {
$melding = "Bedrag € $bedrag inclusief 21% BTW: € " .
round(($bedrag * 1.21),2);
}
}
} else {
$melding="Vul alle invoervelden in";
}


} else {
$melding = "invullen maar";
}
?>

<form method="post">
    <label>Bedrag exclusief BTW</label>
    <input type="text" name="bedrag" value=""/>

    <br>

    <input class="nostyle" type="radio" name="btw" value="6"  />Laag, 6%

    <br>

    <input class="nostyle" type="radio" name="btw" value="21"  />Hoog, 21%

    <br><br>

    <input type="submit" name="uitrekenen" value="Uitrekenen" />
</form>
