<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];

    if ($login == "Janusz" && $password == "1234") {
        echo "Zalogowano";
    } else {
        echo "Błąd.";
    }
}
?>