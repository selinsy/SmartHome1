
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
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

        .settings-button {
            margin-right: auto;
        }

        .profile-button {
            margin-left: auto;
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

        .left {
            flex-basis: 45%;
            text-align: center;
        }

        .right {
            flex-basis: 45%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .temperature {
            font-size: 48px;
            font-weight: bold;
            margin-top: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
    <title>Smart Home App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
    <button class="button settings-button" onclick="window.location.href='SettingsPage.php'">Settings</button>
        <h1>Smart Home App</h1>
        <button class="button profile-button">Profile</button>
    </header>
    <div class="container">
        <div class="left">
            <h2>Temperature</h2>
            <p class="temperature">24&deg;C</p>
        </div>
        <div class="right">
        <button class="button" onclick="window.location.href='RoomsPage.php'">Rooms</button>
            <button class="button">Trip Mode On/Off</button>
            <button class="button" onclick="window.location.href='Camera.php'">Camera</button>
            <button class="button" onclick="window.location.href='ModesPage.php'">Mode</button>
        </div>
    </div>
    <footer>&copy; Selin Yıldız</footer>
</body>

</html>


?>