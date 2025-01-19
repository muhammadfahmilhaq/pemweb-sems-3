<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$action = $_GET['action'] ?? '';

if ($action === 'create' || $action === 'update') {
    $product_id = $_GET['id'] ?? null;
    $name = $price = '';
    
    if ($action === 'update' && $product_id) {
        $query = "SELECT * FROM products WHERE id = $product_id";
        $result = $conn->query($query);
        $product = $result->fetch_assoc();
        $name = $product['name'];
        $price = $product['price'];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        
        if ($action === 'create') {
            $query = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
        } elseif ($action === 'update') {
            $query = "UPDATE products SET name = '$name', price = '$price' WHERE id = $product_id";
        }
        
        if ($conn->query($query) === TRUE) {
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if ($action === 'delete' && isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $query = "DELETE FROM products WHERE id = $product_id";
    
    if ($conn->query($query) === TRUE) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($action === 'create') ? 'Add' : 'Edit'; ?> Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2><?php echo ($action === 'create') ? 'Add' : 'Edit'; ?> Product</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Product Name" value="<?php echo $name; ?>" required>
        <input type="number" name="price" placeholder="Price" value="<?php echo $price; ?>" required>
        <button type="submit"><?php echo ($action === 'create') ? 'Add Product' : 'Update Product'; ?></button>
    </form>
</body>
</html>
