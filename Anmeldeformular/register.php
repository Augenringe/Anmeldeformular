<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $benutzername = $_POST["benutzername"];
    $passwort = $_POST["passwort"];

    // Passwort hashen
    $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);

    // DB-Verbindung
    $conn = new mysqli("localhost", "db_user", "db_passwort", "anmeldeformular_db");

    if ($conn->connect_error) {
        die("Verbindung fehlgeschlagen: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO benutzer (benutzername, passwort) VALUES (?, ?)");
    $stmt->bind_param("ss", $benutzername, $passwort_hash);

    if ($stmt->execute()) {
        header("Location: login.html?registrierung=erfolgreich");
        exit;
    } else {
        header("Location: register.html?fehler=benutzer_existiert");
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
