<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Switch di PHP</title>
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
        .error {
            background-color: #f2dede;
            padding: 10px;
            border: 1px solid #ebccd1;
            margin-top: 10px;
            color: red;
        }
    </style>
</head>
<body>

<h1>Contoh Penggunaan Switch di PHP</h1>

<?php
$hari = "Rabu";

switch ($hari) {
    case "Rabu":
        echo '<div class="result">Hari ini adalah Rabu, waktunya PSQ!</div>';
        break;
    case "Sabtu":
    case "Minggu":
        echo '<div class="result">hari libur sudah tiba.</div>';
        break;
    default:
        echo '<div class="result">Hari seperti biasa, waktunya kuliah!</div>';
        break;
}
?>

</body>
</html>
