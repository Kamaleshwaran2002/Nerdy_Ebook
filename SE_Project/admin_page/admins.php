<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file_style.css">
    <title>Document</title>
</head>
<body>
<div class="head">
        <h1>E-book Shopping System</h1>
    </div>
    <div class="head-2">
        <h1>Admins Details</h1>
    </div>
    <div class="data-table">
    <table>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Name</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","test_db");
        if($conn-> connect_error){
            die("connection failed:".$conn-> connect_error);
        }
        $sql = "SELECT id, user_name, name from admins";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["id"] . "</td><td>". $row["user_name"] . "</td><td>". $row["name"]."</td><tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }

        $conn->close();
        ?>
    </table>
    </div>
    <div class="back-btn">
        <a href="index.php"><input class="btn" type="submit" value="back"></a>
    </div>
</body>
</html>