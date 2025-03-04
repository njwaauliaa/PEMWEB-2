<!DOCTYPE html>
<html>
<head>
    <title>Total Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Total Belanja</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="item1">Nama Barang 1:</label>
            <input type="text" id="item1" name="item1" required>

            <label for="price1">Harga Barang 1:</label>
            <input type="text" id="price1" name="price1" required>

            <label for="item2">Nama Barang 2:</label>
            <input type="text" id="item2" name="item2" required>

            <label for="price2">Harga Barang 2:</label>
            <input type="text" id="price2" name="price2" required>

            <label for="item3">Nama Barang 3:</label>
            <input type="text" id="item3" name="item3" required>

            <label for="price3">Harga Barang 3:</label>
            <input type="text" id="price3" name="price3" required>

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $item1 = htmlspecialchars($_POST['item1']);
            $price1 = htmlspecialchars($_POST['price1']);
            $item2 = htmlspecialchars($_POST['item2']);
            $price2 = htmlspecialchars($_POST['price2']);
            $item3 = htmlspecialchars($_POST['item3']);
            $price3 = htmlspecialchars($_POST['price3']);

            $total = $price1 + $price2 + $price3;

            echo "<div class='result'><h3>Total Belanja:</h3>";
            echo "Barang 1: $item1 - Rp $price1<br>";
            echo "Barang 2: $item2 - Rp $price2<br>";
            echo "Barang 3: $item3 - Rp $price3<br>";
            echo "<strong>Total: Rp $total</strong>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>