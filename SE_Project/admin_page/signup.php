<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP Page</title>
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>
    <form action="signup-check.php" method="post"> 
        <h2>SIGN UP</h2>
        <?php if(isset($_GET['error'])) {?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
        
        <?php if(isset($_GET['success'])) {?>
            <p class="success"> <?php echo $_GET['success']; ?></p>
            <?php } ?>
        
        <label for="name">Name</label>
        <?php if(isset($_GET['name'])) {?>
            <input  type="text"
                    name="name" 
                    placeholder="name" 
                    value="<?php echo $_GET['name']; ?>"><br>   
            <?php }else{ ?>
                <input  type="text" 
                        name="name" 
                        placeholder="name"><br>   
            <?php }?>

        <label for="uname">Username</label>
        <?php if(isset($_GET['uname'])) {?>
            <input  type="text"
                    name="uname" 
                    placeholder="username" 
                    value="<?php echo $_GET['uname']; ?>"><br>   
            <?php }else{ ?>
                <input  type="text" 
                        name="uname" 
                        placeholder="name"><br>   
            <?php }?>



        <label for="password">Password</label>
        <input type="password" 
                name="password"  
                placeholder="password"><br>

        <label for="re_password">Re Password</label>
        <input type="password" name="re_password"  placeholder="re_password"><br>

        <button type="submit">Sign Up</button>
        <!-- <a href="login.php" class="ca">Already have an account?</a> -->
    </form>
    <div class="back-btn">
        <a href="index.php"><input class="btn" type="submit" value="back"></a>
    </div>
</body>
</html>