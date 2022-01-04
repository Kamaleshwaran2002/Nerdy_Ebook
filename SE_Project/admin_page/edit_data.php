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
<!-- <div class="parent-file"> -->
        <div class="edit-div">
            <div class="head">
                <h1>Update the products</h1>
            </div>
            <div class="product_edit">
                <form action="">
                    <label for="product_id">Product_ID</label>
                    <input type="number" name="product_id" placeholder="product_id">
                    <label for="price">Price</label>
                    <input type="number" name="price" placeholder="price">
                    <div class="upload-btn">
                        <input type="submit" value="update">
                    </div>
                </form>
            </div>
            <div class="upload-btn"></div>
        </div>
        <div class="edit-div">
            <div class="head">
                <h1>Delete the products</h1>
            </div>
            <div class="product_edit">
                <form action="">
                    <label for="product_id">Product_ID</label>
                    <input type="number" name="product_id" placeholder="product_id">
                    <label for="name">Title</label>
                    <input type="text" name="price" placeholder="title">
                    <div class="upload-btn">
                        <input type="submit" value="delete">
                    </div>
                </form>
            </div>

        </div>
    <!-- </div> -->
    <div class="back-btn">
        <a href="index.php"><input class="btn" type="submit" value="back"></a>
    </div>
</body>
</html>