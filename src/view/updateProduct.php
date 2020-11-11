<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        background-color: blue;
    }
    .table {
        background-color: white;
    }
    a {
        color: white;
    }
    th {
        text-align: center;
    }
</style>
<body>
<br><br><br>
<form method="POST" enctype="multipart/form-data">
    <table align="center" class="table" style="width: auto; border-radius: 15px">
        <thead>
        <tr>
            <th colspan="2"><h1><b>Edit Product Detail</b></h1></th>
        </tr>
        <tr>
            <td>Product Name</td>
            <td><input style="width: 280px" name="name" type="text" required value="<?php echo $product["name"]; ?>"></td>
        </tr>
        <tr>
            <td>Product Type</td>
            <td><input style="width: 280px" name="type" type="text" required value="<?php echo $product["type"]; ?>"></td>
        </tr>
        </tr>
        <tr>
            <td>Price</td>
            <td><input name="price" style="width: 280px" type="text" required value="<?php echo $product["price"]; ?>"></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input name="count" style="width: 280px" type="text" required value="<?php echo $product["count"]; ?>"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input name="note" style="width: 280px" type="text" required value="<?php echo $product["note"]; ?>"></td>
        </tr>
        <tr>
        <tr>
            <td>
                <a class="btn btn-warning" href="http://localhost/Example/index.php">Return</a>
            </td>
            <td>
                <button style="width: 200px" class="btn btn-success" type="submit">Update</button>
            </td>
        </tr>
        </thead>
    </table>
</form>
</body>
</html>
