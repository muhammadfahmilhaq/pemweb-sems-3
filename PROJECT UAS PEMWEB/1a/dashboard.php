<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$query = "SELECT * FROM products";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dasbord.css">
</head>
<body>
    <h1>Welcome to HP Store</h1>
    <div class="actions">
        <a href="logout.php"><button class="btn logout">Logout</button></a>
    </div>
    
    <h1>Products</h1>
    <a href="product.php?action=create">KLIK TAMBAH PRODUK</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php while ($product = $result->fetch_assoc()) : ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td>
                <a href="product.php?action=update&id=<?php echo $product['id']; ?>">Edit</a>
                <a href="product.php?action=delete&id=<?php echo $product['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
