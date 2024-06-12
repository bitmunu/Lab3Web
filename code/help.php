<?php
session_start();

if (isset($_SESSION["lastname"], $_SESSION["name"], $_SESSION["age"])) {

echo "фамилия: " . $_SESSION["lastname"] . "<br>";
echo "имя: " . $_SESSION["name"] . "<br>";
echo "годиков: " . $_SESSION["age"] . "<br>";
} else {
echo "Not found";
}
?>
