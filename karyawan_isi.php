<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Karyawan</title>
    <style>
        /* Import font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        /* Gaya umum */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFFAF0; /* Warna pastel krem */
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container form */
        .container {
            background: #FFFFFF;
            padding: 20px;
            max-width: 400px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #FF6B6B; /* Warna pastel merah muda */
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: 600;
            color: #333;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
            background: #FDE2E4; /* Warna pastel pink */
            color: #333;
        }

        input[type="text"]:focus,
        select:focus {
            outline: none;
            border: 1px solid #FF6B6B; /* Efek saat fokus */
        }

        /* Tombol submit */
        .btn-submit {
            background-color: #FF9A8B; /* Warna pastel orange */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #FF6B6B; /* Warna pastel merah muda */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📋 Form Data Karyawan</h2>
        <form action="karyawan_simpan.php" method="post">
            <label for="nama_karyawan">Nama Karyawan:</label>
            <input type="text" id="nama_karyawan" name="nama_karyawan" required>

            <label for="jabatan">Jabatan:</label>
            <select id="jabatan" name="jabatan">
                <option value="Direktur">Direktur</option>
                <option value="Manager">Manager</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Staff">Staff</option>
            </select>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="absen">Kehadiran:</label>
            <select id="absen" name="absen">
                <option value="1">✅ Hadir</option>
                <option value="0">❌ Tidak Hadir</option>
            </select>

            <label for="keterangan">Keterangan:</label>
            <input type="text" id="keterangan" name="keterangan">

            <button type="submit" class="btn-submit">✅ Simpan Data</button>
        </form>
    </div>
</body>
</html>
