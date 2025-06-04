<?php
if (isset($_GET['error'])) {
    $fehler = $_GET['error'];
    echo '<p style="color:red;">';

    switch ($fehler) {
        case 'wrong_password':
            echo 'Falsches Passwort.';
            break;
        case 'user_not_found':
            echo 'Benutzer nicht gefunden.';
            break;
        case 'user_exists':
            echo 'Benutzername existiert bereits.';
            break;
        case 'registration_failed':
            echo 'Registrierung fehlgeschlagen.';
            break;
        default:
            echo 'Unbekannter Fehler.';
    }

    echo '</p>';
}

if (isset($_GET['success']) && $_GET['success'] === 'registered') {
    echo '<p style="color:green;">Registrierung erfolgreich! Du kannst dich jetzt anmelden.</p>';
}
?>
