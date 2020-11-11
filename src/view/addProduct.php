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
        background-color: gray;
    }

    .table {
        background-color: brown;
    }

    a {
        color: white;
    }

    th {
        text-align: center;
    }

    h1 {
        font-family: -apple-system;
        font-size: 50px;
        text-align: center;
    }
</style>
<body>

<br>
<br>
<br>
<form method="POST">
    <table align="center" class="table" style="width: auto; border-radius: 15px">
        <thead>
        <tr>
            <td colspan="2"><h1><b>Add Product</b></h1></td>
        </tr>
        <tr>
            <td>Product Name</td>
            <td><input style="width: 280px" name="name" type="text" required></td>
        </tr>
        <tr>
            <td>Product Type</td>
            <td>
                <select name="type">
                    <option>Cellphone</option>
                    <option>Air Conditioner</option>
                    <option>Television</option>
                    <option>Fridge</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input name="price" style="width: 280px" type="text" required></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input name="count" style="width: 280px" type="text" required></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea name="note" style="width: 280px" type="text" required></textarea></td>
        </tr>
        <tr>
            <td>
                <a class="btn btn-warning" href="http://localhost/Example/index.php">Return</a>
            </td>
            <td>
                <button style="width: 200px" class="btn btn-success" type="submit">Add</button>
            </td>
        </tr>
        </thead>
    </table>
</form>
</body>
</html>