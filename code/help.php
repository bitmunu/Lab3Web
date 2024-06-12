<!DOCTYPE html>
<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST["text"])) {
        $text = $_POST["text"];
        $words = str_word_count($text);
        $characters = strlen($text);

        echo "<p>Cимволов: $characters</p>";
        echo "<p>Cлов: $words</p>";
    }
}
?>
</body>
</html>
