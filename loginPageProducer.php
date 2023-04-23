<?php
//for producer
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    //add code to check credentials against database
    if($username == "producer" && $password == "password123"){
        $_SESSION['username'] = $username;
        header("Location: producer_dashboard.php");
        exit;
    }
    else{
        $error = "Invalid credentials. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Producer Login</title>
     <!-- custom css file link  -->
        <link rel="stylesheet" href="login.css">
    
</head>
<body>

    <?php if(isset($error)){ echo '<p><span>'.$error.'</span></p>'; } ?>
    <form method="post" action="">
    <h1>Producer Login</h1>

        <div class="container">
            <label for="username"><b>Username:</b></label>
            <input type="text" placeholder="Enter username" name="username" required>
            <label for="password"><b>Password:</b></label>
            <input type="password" placeholder="Enter password" name="password" required>
            <input type="submit" name="login" value="Login">
        </div>
    </form>
</body>
</html>
