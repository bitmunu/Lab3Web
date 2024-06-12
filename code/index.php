<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];
    $salary = $_POST["salary"];
    $number = $_POST["number"];
    $userData = [
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'number' => $number
    ];

    $_SESSION['userData'] = $userData;

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

<label for="name">name:</label><br>
<input type="text" id="name" name="name"><br>

<label for="age">age:</label><br>
<input type="text" id="age" name="age"><br>

<label for="salary">salary:</label><br>
<input type="text" id="salary" name="salary"><br>

<label for="number">number:</label><br>
<input type="text" id="number" name="number"><br>

<input type="submit" value="submit">

</form>

</body>
</html>
