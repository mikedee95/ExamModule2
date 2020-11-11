<?php
include_once "src/controller/ProductController.php";
?>
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
        background-color: saddlebrown;
    }
    .table {
        background-color: white
    }

    a {
        color: black;
    }

    th {
        text-align: center;
    }

    h1 {
        font-family: Arial;
        font-size: 50px;
        text-align: center;
    }
</style>
<body>
<br>
<h1 align="center"><b>Product List</b></h1>
<br>
<div align="center">
    <table>
        <tr>
            <th>
                Enter product name: <form style="display: inline; width: 100px; height: 50px" class="form-inline my-2 my-lg-0" method="post"
                      action="index.php?page=showInfo">
                    <input name="search" class="form-control" type="search"
                           aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </th>
            <th>
                <a class="btn btn-success" href="index.php?page=add">Add Product</a>
            </th>
        </tr>
    </table>
</div>
<br>
<table align="center" class="table" border="1px" style="width: 1024px; border-radius: 5px">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Type</th>
        <th style="width: 300px" colspan="1" scope="col">Options</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $product->getName(); ?></td>
            <td><?php echo $product->getType(); ?></td>
            <td>
                <a style="width: 100px" class="btn btn-warning" href="index.php?page=update&id=<?php echo $product->getId(); ?>">Edit</a>
                <a style="width: 80px" class="btn btn-danger" onclick="return confirm('Are you sure?')"
                   href="index.php?page=delete&id=<?php echo $product->getId(); ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>