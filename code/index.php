<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $surname = $_POST["lastname"];
    $name = $_POST["name"];
    $age = $_POST["age"];

    $_SESSION["lastname"] = $surname;
    $_SESSION["name"] = $name;
    $_SESSION["age"] = $age;

    header("Location: help.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>

<form method="post">
    <label for="surname">фамилия:</label>
    <input type="text" id="lastname" name="lastname" required><br><br>
    <label for="name">имя:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="age">годиков:</label>
    <input type="number" id="age" name="age" required><br><br>

    <input type="submit" value="Отправить">
</form>

</body>
</html>
