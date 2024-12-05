<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #45a049;
        }
        .result {
            margin-top: 20px;
            background: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Tambah Data Siswa</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="idSiswa">ID Siswa</label>
                <input type="text" id="idSiswa" name="idSiswa" required>
            </div>
            <div class="form-group">
                <label for="namaSiswa">Nama Siswa</label>
                <input type="text" id="namaSiswa" name="namaSiswa" required>
            </div>
            <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <select id="jenisKelamin" name="jenisKelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="asalSekolah">Asal Sekolah</label>
                <input type="text" id="asalSekolah" name="asalSekolah" required>
            </div>
            <button type="submit" name="submit">Tambah</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $idSiswa = htmlspecialchars($_POST['idSiswa']);
            $namaSiswa = htmlspecialchars($_POST['namaSiswa']);
            $jenisKelamin = htmlspecialchars($_POST['jenisKelamin']);
            $asalSekolah = htmlspecialchars($_POST['asalSekolah']);

            echo '<div class="result">';
            echo '<p><strong>ID Siswa:</strong> ' . $idSiswa . '</p>';
            echo '<p><strong>Nama Siswa:</strong> ' . $namaSiswa . '</p>';
            echo '<p><strong>Jenis Kelamin:</strong> ' . $jenisKelamin . '</p>';
            echo '<p><strong>Asal Sekolah:</strong> ' . $asalSekolah . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>