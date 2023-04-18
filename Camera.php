
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

.camera-view {
  position: relative;
  width: 100%;
  height: 60vh;
}

.background {
  background-image: url("https://media.istockphoto.com/id/1397836643/tr/foto%C4%9Fraf/caucasian-tourist-couple-is-handing-passport-to-the-reception-at-hotel-lobby-counter-for.jpg?s=2048x2048&w=is&k=20&c=dQ7gH2hvEf63TBme7cZ1WchTSxKVtQaO6b4CjhCwjsg=");
  background-size: cover;
  width: 100%;
  height: 80%;
}

.controls {
  position: absolute;
  bottom: px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.record-button {
  background-color: red;
}

.open-button {
  background-color: green;
}

.talk-button {
  background-color: blue;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 10px;
  text-align: center;
}

    </style>
  <title>Smart Home App - Camera</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <button class="button settings-button">Settings</button>
    <h1>Smart Home App</h1>
    <button class="button profile-button">Profile</button>
  </header>
  <div class="camera-view">
    <div class="background"></div>
    <div class="controls">
      <button class="button record-button">Record</button>
      <button class="button open-button">Open</button>
      <button class="button talk-button">Talk</button>
    </div>
  </div>
  <footer>
    <p>&copy; Selin Yıldız</p>
  </footer>
</body>

</html>



?>