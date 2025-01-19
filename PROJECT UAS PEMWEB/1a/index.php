<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HP Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to HP Store Rahwan</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>

    <section>
        <h2>STORE TERBAIK</h2>
        <p>Jelajahi berbagai pilihan produk HP terbaik dengan harga menarik</p>
        
        <!-- Tampilkan produk terbaru dari database jika sudah login -->
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="dashboard.php">pergi ke Dashboard</a>
        <?php else: ?>
            <a href="login.php">Login untuk melihat produk</a>
        <?php endif; ?>
    </section>

    <footer>
        <p>&copy; RAHWAN 2025 HP Store</p>
    </footer>
</body>
</html>
