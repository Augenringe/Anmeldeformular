<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $benutzername = $_POST["benutzername"];
    $passwort = $_POST["passwort"];

    $conn = new mysqli("localhost", "dein_user", "dein_passwort", "deine_datenbank");
    if ($conn->connect_error) {
        header("Location: index.php?error=server_error");
        exit;
    }

    $stmt = $conn->prepare("SELECT id, passwort FROM benutzer WHERE benutzername = ?");
    $stmt->bind_param("s", $benutzername);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $hash);
        $stmt->fetch();

        if (password_verify($passwort, $hash)) {
            $_SESSION["benutzer_id"] = $id;
            $_SESSION["benutzername"] = $benutzername;
            header("Location: dashboard.php"); // oder wohin du willst
            exit;
        } else {
            header("Location: index.php?error=wrong_password");
            exit;
        }
    } else {
        header("Location: index.php?error=user_not_found");
        exit;
    }
}
