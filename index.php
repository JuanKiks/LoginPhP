<!DOCTYPE html>
<html>
<head>
    <title> Log In </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
    <label>User Name</label>
    <input type="text" name="uname" placeholder="Email"><br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br>

    <button type="submit">Login</button>
    
    
    </form>
    <a href="forgot-password.php">Forgot password?</a>
</body>
</html>