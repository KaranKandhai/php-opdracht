<!DOCTYPE HTML>
<html>
<body>
<?php
session_start();
$name = $email = $klas = $shop = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$klas = test_input($_POST["klas"]);
$shop = test_input($_POST["shop"]);
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Klas: <input type="text" name="klas"><br>
    Workshops:
    <input type="radio" name="shop" value="drones">Drones
    <input type="radio" name="shop" value="rasberry pi">Rasberry Pi
    <input type="radio" name="shop" value="security">Security
    <input type="submit">
</form>

</body>
</html>

