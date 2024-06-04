<?php
session_start();
include('config.php');
if (isset($_POST['register']))
{
	$username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
	if ($query->rowCount() > 0)
	{
		echo '<p class="error">The email address is already registered!</p>';
    }
	if ($query->rowCount() == 0)
	{
		$query = $connection->prepare("INSERT INTO users(username,password,email) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
		if ($result)
		{
			echo '<p class="success">Your registration was successful!</p>';
        } 
		else
		{
			echo '<p class="error">Your registration was not successful!</p>';
        }
    }
}
?>
<!DOCTYPE html>
<html>  
<head>  
<title>Register</title>    
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>  
<body> 
<section class="form-container">
        <?php
        if(isset($message)){
            foreach($message as $message){
                echo '
                    <div class="message">
                        <span>'.$message.'</span>
                        <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
                    </div>
                ';
            }
        }
        ?>
        <form action= 'register.php' method='post' >
            <h1>REGISTER</h1>
            <label for= "username">Username:</label>
            <input type="text" name="username" placeholder="Enter your Username" required> 
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Enter your Email" required>
            <br>
            <label for="password">Password:</label> 
            <input type="password" name="password" placeholder="Enter your Password" required>  
            <br>
            <br>
            <button type="submit" name="register" value="Register now" class="btn">Register</button>
                <br>
            <p>You already have an account? <a href="login.php">Login here</a></p>
        </form>
    </section>
</body>     
</html>
