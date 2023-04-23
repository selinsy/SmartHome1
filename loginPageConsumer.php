<?php
//for consumer
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    //add code to check credentials against database
    if($username == "consumer" && $password == "password123"){
        $_SESSION['username'] = $username;
        header("Location: consumer_dashboard.php");
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
    <title>Consumer Login</title>
        <!-- custom css file link  -->
        <link rel="stylesheet" href="login.css">
    
</head>
<body>
    
    <?php if(isset($error)){ echo '<p><span>'.$error.'</span></p>'; } ?>
    <form method="post" action="">
    <h1>Consumer Login</h1>
        <p>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Please enter username" required>
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Please enter password" required>
        </p>
        <p>
            <input type="submit" name="login" value="Login">
        </p>
    </form>
</body>
</html>




