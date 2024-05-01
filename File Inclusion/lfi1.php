<?php
include("../common/header.php");

if (isset($_GET["page"]) && !empty($_GET["page"])) {
    // Sanitize input to only allow alphanumeric characters, dots, and slashes
    $page = preg_replace('/[^a-zA-Z0-9\/\.]/', '', $_GET["page"]);

    // Check if the file exists before including it
    if (file_exists($page)) {
        include($page);
    } else {
        echo "File not found.";
    }
}
?>

<form action="/LFI-1/index.php" method="GET">
    <input type="text" name="page">
    <input type="submit" value="Include">
</form>

