<?php
////controls if logged in
session_start();

if (empty($_GET) && !isset($_GET["inlog"])) {
    $_GET['page'] = 'inlog';
} elseif (empty($_GET['page'])) {
    $_GET['page'] = 'home';
}

////makes menu

function menu() {
    if ($_SESSION["ingelogd"]) {
        include("menu.php");
    }
}

////Get page
function page() {
    include($_GET["page"] . '.php');
}


?>



<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessionstuff</title>
    <link rel="stylesheet" href="style2.scss">
</head>

<body id="body">


    <div id="content">

        <?= menu()?>
        <?= page() ?>
        

    </div>
</body>

</html>