<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $szukaj = $_GET["szukaj"];
    echo "Szukałeś: $szukaj";
}
?>