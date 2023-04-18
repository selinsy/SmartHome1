
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Smart Home App - Rooms</title>
  <link rel="stylesheet" href="style.css">
</head>
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

.rooms-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-bottom: 50px;
  width: 100%;
}

.room {
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 20px;
  flex-basis: 30%;
  margin-bottom: 20px;
  cursor: pointer;
}

.room:hover {
  background-color: #ddd;
}

.add-room {
  background-color: #008CBA;
  color: #fff;
  border: none;
  padding: 10px 20px;
  margin-right: 10px;
  border-radius: 5px;
  cursor: pointer;
}

.add-room:hover {
  background-color: #006F8F;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

</style>
<body>
  <header>
    <button class="button settings-button">Settings</button>
    <h1>Smart Home App</h1>
    <button class="button profile-button">Profile</button>
  </header>
  <div class="container">
    <div class="rooms-list">
      <div class="room" onclick="location.href='#';">
        <h2>Living Room</h2>
      </div>
      <div class="room" onclick="location.href='#';">
        <h2>Kitchen</h2>
      </div>
      <div class="room" onclick="location.href='#';">
        <h2>Bedroom</h2>
      </div>
    </div>
    <button class="button add-room">Add Room</button>
  </div>
  <footer>
    <p>&copy; Selin Yıldız</p>
  </footer>
</body>

</html>


?>