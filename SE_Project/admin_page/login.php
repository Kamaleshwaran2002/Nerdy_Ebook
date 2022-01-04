<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/aba0fa4a6b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style_admin.css">
    <title>Admin Page</title>
</head>
<body>
    <form action="login-check.php" method="post"> 
        <h2>Admin-Login</h2>
        <?php if(isset($_GET['error'])) {?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
        <label for="uname">Username</label>
        <input type="text" name="uname" placeholder="username"><br>

        <label for="password">Password</label>
        <input type="password" name="password"  placeholder="password"><br>

        <button type="submit">Login</button>
        <!-- <a href="signup.php" class="ca">Create an account</a> -->
    </form>
</body>
</html>