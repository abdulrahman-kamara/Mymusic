<?php
if (isset($_GET["page"])) {

    $page = $_GET["page"];
} else {
    $page = "home";
}
if ($page === "home") {
    require_once "./views/home.php";
}
if ($page === "africangiants") {
    require_once "./views/africangiants.php";
}

if ($page === "connection") {
    require_once "./database/connection.php";
}
