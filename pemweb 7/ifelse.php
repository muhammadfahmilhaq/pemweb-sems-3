<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh If-Else di PHP</title>
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

<h1>Contoh Penggunaan If-Else di PHP</h1>

<?php
$nilai = 70;

if ($nilai >= 70) {
    echo '<div class="result">Nilai anda diatas 70, anda lulus.</div>';
} else {
    echo '<div class="error">Nilai anda dibawah 70, anda harus remidi.</div>';
}
?>

</body>
</html>
