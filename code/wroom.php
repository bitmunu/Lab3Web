<?php

function redirectToHome()
{
    header("Location: index.php");
    exit();
}

if (isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['about'])===false) {
    redirectToHome();
}
$userEmail = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$about = $_POST['about'];
$categoryFolder = "./categories/$category";
$fileName = "$categoryFolder/$title.txt";
$content = "$userEmail\n$title\n$about";
file_put_contents($fileName, $content);
redirectToHome();
?>
