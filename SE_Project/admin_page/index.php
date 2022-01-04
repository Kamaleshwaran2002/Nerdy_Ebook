<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) ){
    // echo "hello";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <script src="https://kit.fontawesome.com/aba0fa4a6b.js" crossorigin="anonymous"></script>
    <title>HomePage</title> 
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="brand-title">E-Books</div>
            <div class="navbar-links">
                <ul>
                    <li> <a href="">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <!-- <div class="dropdown">
                        <li><a href="#">Administration<i class="fa fa-caret-down"></i>
                            <div class="dropdown-content">
                                <a href="#">C</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                              </div>
                        </a></li>
                    </div> -->
                    <li><a href="#">Administration</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
    <div class="user-name">
            <h1>Hello, <?php echo $_SESSION['name'];?></h1>
            <!-- <a href="logout.php">Logout</a> -->
        </div>
        <div class="head">
        <h1>E-book Shopping System</h1>
        <h1>Hello, <?php echo $_SESSION['name'];?></h1>
    </div>
    <div class="main">
        <div class="sub-main">
            <a href="signup.php">Create new admin</a>
        </div>
        <div class="sub-main">
            <a href="admins.php">Admins</a>
        </div>
        <div class="sub-main">
            <a href="users.php">Users</a>
        </div>
        <div class="sub-main">
            <a href="file.php">Upload stock</a>
        </div>
        <div class="sub-main">
            <a href="book-details.php">Book Details</a>
        </div>
        <div class="sub-main">
            <a href="edit_data.php">Edit stock</a>
        </div>
        <div class="sub-main">
            <a href="orders.php">Demand stock</a>
        </div>
        <div class="sub-main">
            <a href="tracking.php">Orders tracking</a>
        </div>
    </div>
    <main>
</body>
</html>
<?php
}else{
    header("Location: login.php");
    exit();
}
?>