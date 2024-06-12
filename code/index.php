<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.8, maximum-scale=1.8, minimum-scale=1.8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>No</title>
</head>
<body>
<div id="form">
    <form action="wroom.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="category">Category:</label>
        <select name="category" required>
            <?php

            $directoryPath = "./categories/";
            if (is_dir($directoryPath))
            {
                $subdirectories = array_filter(glob($directoryPath . '*'), 'is_dir');
                foreach ($subdirectories as $subdirectory)
                {
                    $name = basename($subdirectory);
                    echo "<option value=\"$name\">$name</option>";
                }
            }
            ?>
        </select><br>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>
        <label for="about">about:</label><br>
        <textarea rows="5" name="about" id="about" required></textarea><br>
        <input type="submit" value="Save"><br>
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>email</th>
        <th>category</th>
        <th>title</th>
        <th>about</th>
        </thead>
        <?php
        $categories = ['glass', 'water', 'empty', 'not full'];
        foreach ($categories as $category) {
            $directory = "./categories/$category";
            if (is_dir($directory)) {
                $files = scandir($directory);
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        $content = file_get_contents("$directory/$file");
                        $values = explode("\n", $content);
                        echo "<tbody>";
                        echo "<td>{$values[0]}</td>";
                        echo "<td>$category</td>";
                        echo "<td>{$values[1]}</td>";
                        echo "<td>{$values[2]}</td>";
                        echo "</tbody>";
                    }
                }
            }
        }
        ?>
    </table>
</div>
</body>
</html>