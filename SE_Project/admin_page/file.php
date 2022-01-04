<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="file_style.css">
</head>
<body>
    <div class="head">
        <h1>E-book Shopping System</h1>
    </div>
    <div class="head-2">
        <h1>Upload Books</h1>
    </div>
    <div class="parent-file">
    <div class="upload-div">
    <form action="file.php" method="post" enctype="multipart/form-data">
    <table border="5">
        <tr>
            <td>Title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>File</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="number" name="price"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="upload"></td>
        </tr>
    </table>
    </form>
    </div>
    </div>
    <div class="back-btn">
        <a href="index.php"><input class="btn" type="submit" value="back"></a>
    </div>
</body>
</html>
<?php
$conn= mysqli_connect("localhost","root","","test_db");
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $price=$_POST['price'];
    $image_name=$_FILES['image']['name'];
    echo "$image_name <br>";
    $temp=$_FILES['image']['tmp_name'];
    // echo $temp;
    move_uploaded_file($temp,"images/$image_name");
    $query=mysqli_query($conn,"insert into file(title,image,price) values('$title','$image_name','$price')");
    if($query){
        echo"Succesfully Uploaded";
    }else{
        echo"file not upload";
    }
}
?>