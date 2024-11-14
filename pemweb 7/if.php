<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh If di PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .result {
            background-color: #dff0d8;
            padding: 10px;
            border: 1px solid #d0e9c6;
            margin-top: 10px;
            color: green;
        }
    </style>
</head>
<body>

<h1>Contoh Penggunaan If di PHP</h1>

<?php
$tinggi_badan = 170;

if ($tinggi_badan >= 170) {
    echo '<div class="result">Tinggi badan anda diatas rata rata!</div>';
}
?>

</body>
</html>
