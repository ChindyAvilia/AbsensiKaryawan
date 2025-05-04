<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data Karyawan</title>
    <style>
        /* Import font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        /* Gaya umum */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFFAF0; /* Warna pastel krem */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Kontainer form */
        .search-container {
            background: linear-gradient(to right, #FFDEE9, #B5FFFC); /* Gradien pastel */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        /* Judul */
        h2 {
            color: #FF6B6B; /* Warna pastel merah muda */
            font-size: 22px;
            margin-bottom: 20px;
        }

        /* Input field */
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            text-align: center;
        }

        /* Tombol submit */
        input[type="submit"] {
            width: 100%;
            background-color: #FF6B6B;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Efek hover tombol */
        input[type="submit"]:hover {
            background-color: #E63946;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="search-container">
        <h2>🔍 Cari Data Karyawan</h2>
        <form action="karyawan_tampil.php" method="post">
            <input type="text" id="nama_karyawan" name="nama_karyawan" placeholder="Masukkan nama karyawan..." required>
            <input type="submit" value="CARI">
        </form>
    </div>

</body>
</html>
