<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Anmeldung & Registrierung</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="hero">
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Anmelden</button>
        <button type="button" class="toggle-btn" onclick="register()">Registrieren</button>
      </div>

      <div class="social-icons">
        <img src="Pictures/facebook.png" alt="Facebook" />
        <img src="Pictures/twitter.png" alt="Twitter" />
        <img src="Pictures/social.png" alt="Google Plus" />
        <img src="Pictures/github.png" alt="Github" />
      </div>

      <!-- Login-Formular -->
      <form id="login" class="input-group" method="post" action="login.php">
        <input type="text" class="input-field" placeholder="Benutzername" name="benutzername" required />
        <input type="password" class="input-field" placeholder="Passwort" name="passwort" required />
        <input type="checkbox" class="check-box" /><span>Passwort merken</span>
        <button type="submit" class="submit-btn">Anmelden</button>
      </form>

      <!-- Registrierungs-Formular -->
      <form id="register" class="input-group" method="post" action="register.php">
        <input type="text" class="input-field" placeholder="Benutzername" name="benutzername" required />
        <input type="email" class="input-field" placeholder="E-Mail" name="email" required />
        <input type="password" class="input-field" placeholder="Passwort" name="passwort" required />
        <input type="checkbox" class="check-box" required /><span>Ich stimme den Bedingungen zu</span>
        <button type="submit" class="submit-btn">Registrieren</button>
      </form>
    </div>
  </div>

  <script src="main.js"></script>
</body>
</html>
