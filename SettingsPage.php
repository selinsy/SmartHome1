
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Smart Home App - Settings</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #fff;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      margin: auto;
      justify-content: space-between;
      padding: 20px;
      box-shadow: 0 10px rgba(0, 0, 0, 0.1);
    }

    .button {
      background-color: #008CBA;
      color: #fff;
      border: none;
      padding: 10px 20px;
      margin-right: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .button:hover {
      background-color: #006F8F;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      margin: 50px auto;
      width: 90%;
      max-width: 1200px;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .exit-account-button {
      background-color: #DC143C;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .exit-account-button:hover {
      background-color: #FF4444;
    }
  </style>
</head>

<body>
  <header>
    <button class="button">Rooms</button>
    <h1>Smart Home App</h1>
    <button class="button">Profile</button>
  </header>

  <div class="container">
    <h2>Settings</h2>
    <button class="exit-account-button">Exit Account</button>
  </div>

  <footer>
    <p>&copy; Selin Yıldız</p>
  </footer>
</body>

</html>



?>