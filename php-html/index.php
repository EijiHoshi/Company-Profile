<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Halaman Home</title>
    <style>
        body {
            display: flex;
            flex-direction: column; /* Mengatur arah konten menjadi kolom */
            justify-content: center;
            align-items: center;
            height: 100vh; /* Mengatur tinggi body ke 100% dari viewport */
            margin: 0; /* Menghapus margin default */
            background-color: #f5f5f5; /* Warna latar belakang */
        }

        h1 {
            margin-bottom: 20px; /* Jarak antara judul dan form */
        }

        form {
            background: white; /* Latar belakang form */
            padding: 20px; /* Padding di dalam form */
            border-radius: 5px; /* Sudut membulat */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan */
        }

        label {
            display: block; /* Membuat label tampil dalam baris baru */
            margin-bottom: 5px; /* Jarak antara label dan input */
        }

        input {
            margin-bottom: 15px; /* Jarak antara input */
            width: 100%; /* Mengatur lebar input agar penuh */
            border: 1px solid #ccc; /* Border input */
            border-radius: 4px; /* Sudut membulat input */
        }

        button {
            padding: 10px; /* Padding di dalam tombol */
            width: 100%; /* Mengatur lebar tombol agar penuh */
            border: none; /* Menghapus border default */
            border-radius: 4px; /* Sudut membulat tombol */
            background-color: #007BFF; /* Warna latar belakang tombol */
            color: white; /* Warna teks tombol */
            cursor: pointer; /* Mengubah kursor saat hover */
        }

        button:hover {
            background-color: #0056b3; /* Warna tombol saat hover */
        }
    </style>
</head>
<body>
    <h1>Ini halaman login</h1>
    <form action="./backend/login.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Masukkan email" required>
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukkan password" required>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>