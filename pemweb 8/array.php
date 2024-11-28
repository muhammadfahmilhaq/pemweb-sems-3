<!DOCTYPE html>
<html>
<head>
    <title>Hitung Jumlah dan Rata-rata Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .result {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Perhitungan Nilai Array</h1>
    <form method="post">
        <label for="nilai">Masukkan nilai-nilai:</label>
        <input type="text" name="nilai">
        <button type="submit">Hitung</button>
    </form>
    <?php
    $nilaiInput = isset($_POST['nilai']) ? $_POST['nilai'] : '';
    if (!empty($nilaiInput)) {
        $nilaiArray = explode(',', $nilaiInput);

        $jumlah = array_sum($nilaiArray);
        $rataRata = $jumlah / count($nilaiArray);

        echo "<div class='result'>";
        echo "<p>Jumlah total nilai: $jumlah</p>";
        echo "<p>Rata-rata nilai: $rataRata</p>";
        echo "</div>";
    }
    ?>
</body>
</html>