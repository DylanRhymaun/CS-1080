<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dylan's Bear Blog</title>
    <meta name="author" content="Dylan Rhymaun">
    <meta name="description" content="A resource dedicated to appreciating and educating users about various bear species around the world, and how to help those that are endangered.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/custom.css?version=<?php print time(); ?>"
        rel = "stylesheet"
        type = "text/css">
    <link href="css/layout-desktop-index.css?version=<?php print time(); ?>"
        rel = "stylesheet"
        type = "text/css">
    <link href="css/layout-tablet.css?version=<?php print time(); ?>"
        media = "(max-width: 820px)"
        rel = "stylesheet"
        type = "text/css">
    <link href="css/layout-phone.css?version=<?php print time(); ?>"
        media = "(max-width: 430px)"
        rel = "stylesheet"
        type = "text/css">

</head>
<?php
print '<body class="' . $pathParts['filename'] .'">';
include 'database-connect.php';
include 'header.php';
include 'nav.php';
?>
