
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Smart Home App - Camera</title>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- custom css file link  -->
  <link rel="stylesheet" href="camera.css">
</head>

<body>
  <!-- header section starts  -->
  <header>
  <a href="LandingPage.php" class="logo">Smart Home App</a>
  <nav class="navbar">
    <button class="button settings-button">Settings</button>
    
    <button class="button profile-button">Profile</button>
    </nav>
  </header>
  <!-- header section ends -->
  <!-- camera section starts  -->

<section class="camera" id="camera">
<div class="controls">
      <button class="button record-button" title="Click to record"></button>
      <button class="button open-button" title="Click to open door"><br></br></button>

      <button class="button talk-button" title="Click to talk"></div></button>
    </div>
</section>
<!-- camera section ends -->
    
  
  <footer>
    <p>&copy; Selin Yıldız</p>
  </footer>
</body>

</html>



