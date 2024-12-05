<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH DATA SISWA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1c1c1c;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #2a2a2a;
            padding: 25px 35px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
        }
        .form-container h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
            color: #f1c40f;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #f0f0f0;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            border-radius: 8px;
            font-size: 16px;
            background: #333;
            color: #fff;
        }
        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #f1c40f;
            box-shadow: 0 0 5px rgba(241, 196, 15, 0.8);
        }
        .form-button {
            text-align: center;
        }
        .form-button button {
            background: #f1c40f;
            color: #1c1c1c;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .form-button button:hover {
            background: #d4ac0d;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Form Tambah Data Siswa</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="idSiswa">ID Siswa</label>
                <input type="text" id="idSiswa" name="idSiswa" placeholder="Masukkan ID Siswa">
            </div>
            <div class="form-group">
                <label for="namaSiswa">Nama Siswa</label>
                <input type="text" id="namaSiswa" name="namaSiswa" placeholder="Masukkan Nama Siswa">
            </div>
            <div class="form-group">
                <label for="alamatSiswa">Alamat Siswa</label>
                <input type="text" id="alamatSiswa" name="alamatSiswa" placeholder="Masukkan Alamat Siswa">
            </div>
            <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <select id="jenisKelamin" name="jenisKelamin">
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agamaSiswa">Agama Siswa</label>
                <input type="text" id="agamaSiswa" name="agamaSiswa" placeholder="Masukkan Agama Siswa">
            </div>
            <div class="form-group">
                <label for="asalSekolah">Asal Sekolah</label>
                <input type="text" id="asalSekolah" name="asalSekolah" placeholder="Masukkan Asal Sekolah">
            </div>
            <div class="form-button">
                <button type="submit">Tambah Data</button>
            </div>
        </form>
    </div>
</body>
</html>