<?php
// Sprawdź, czy dane zostały przesłane
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sprawdź, czy login i hasło są poprawne
    $login = $_POST["login"];
    $password = $_POST["password"];

    if ($login == "Janusz" && $password == "1234") {
        echo "Zalogowano";
    } else {
        echo "Błąd";
    }
}
?>
