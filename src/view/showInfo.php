<?php
include_once "../../src/controller/ProductController.php";
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
        background-color: sandybrown;
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
<br><br>
<h1 align="center"><b>Product filter</b></h1>
<br><br>
<table align="center" class="table" style="width: 1000px;border-radius: 15px">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Type</th>
        <th colspan="2" scope="col">Options</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($input as $key => $product): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $product->getName(); ?></td>
            <td><?php echo $product->getType(); ?></td>
            <td>
                <a class="btn btn-info" href="index.php?page=update&id=<?php echo $product->getId(); ?>">Edit</a>
            </td>
            <td>
                <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')"
                   href="index.php?page=delete&id=<?php echo $product->getId(); ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>