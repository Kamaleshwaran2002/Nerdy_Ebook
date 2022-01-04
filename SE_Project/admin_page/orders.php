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
        <h1>Orders Details</h1>
    </div>
    <div class="data-table">
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone-num</th>
            <th>Pincode</th>
            <th>Address</th>
            <th>District</th>
            <th>State</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","test_db");
        if($conn-> connect_error){
            die("connection failed:".$conn-> connect_error);
        }
        $sql = "SELECT orders_id, name, phone_num, pincode, address,district,state from orders";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["orders_id"] . "</td><td>". $row["name"] . "</td><td>". $row["phone_num"]."</td><td>". $row["pincode"]."</td><td>". $row["address"]."</td><td>". $row["district"]."</td><td>". $row["state"]."</td><tr>";
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