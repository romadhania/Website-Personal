<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
    /* Styling untuk Tombol Submit */
    button[type="submit"] {
        background-color: #078a8a;
        /* Warna background hijau kebiruan */
        color: white;
        /* Warna teks putih */
        font-size: 16px;
        /* Ukuran font */
        padding: 10px 20px;
        /* Padding atas/bawah dan kiri/kanan */
        border: none;
        /* Menghilangkan border default */
        border-radius: 5px;
        /* Membulatkan sudut tombol */
        cursor: pointer;
        /* Menambahkan pointer saat mouse di atas tombol */
        transition: background-color 0.3s ease, transform 0.3s ease;
        /* Transisi animasi */
    }

    /* Efek saat hover */
    button[type="submit"]:hover {
        background-color: #f0e68c;
        /* Mengubah warna background saat hover */
        transform: scale(1.1);
        /* Efek memperbesar tombol sedikit saat hover */
    }

    /* Efek saat klik (active) */
    button[type="submit"]:active {
        background-color: #f0a500;
        /* Mengubah warna background saat tombol diklik */
        transform: scale(1);
        /* Kembalikan ukuran tombol ke semula */
    }
    </style>

</head>

<body>

    <!--header-->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://www.tiktok.com/@xxixioxio?_t=ZS-8uQ6SpOZhtC&_r=1"><i
                            class="fa-brands fa-tiktok"></i></a></li>
                <li><a href="https://www.instagram.com/_xxixio.xio/profilecard/?igsh=ZjJ0a3F6c3N2MmJz"><i
                            class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.html">Faiqotul Romahania</a></h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li class="active"><a href="kontak.php">Contact</a></li>
            </ul>
        </div>
    </header>
     <!--label-->
     <section class="label">
        <div class="container">
            <tagname>CONTACT</tagname>
        </div>
    </section>
    <!--contact-->
    <div id="form">
        <h3>CONTACT ME</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td width="130">Nama</td>
                    <td><input type="text" name="Nama"></td>
                </tr>
                <tr>
                    <td width="130">Email Address</td>
                    <td><input type="email" name="Email"></td>
                </tr>
                <tr>
                    <td width="130">Subjek</td>
                    <td><input type="text" name="Subjek"></td>
                </tr>
                <tr>
                    <td width="130">komentar</td>
                    <td><input type="textarea" name="pesan" style="height: 100px;"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

   

</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = htmlspecialchars($_POST['Nama']);
    $email = htmlspecialchars($_POST['Email']);
    $subjek = htmlspecialchars($_POST['Subjek']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Menampilkan pesan konfirmasi
    echo "<div style='margin-top: 20px; padding: 20px; border: 2px solid #078a8a; background-color: #f0f0f0;'>";
    echo "<h3>Terima Kasih telah menghubungi kami!</h3>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Subjek:</strong> $subjek</p>";
    echo "<p><strong>Komentar:</strong> $pesan</p>";
    echo "</div>";
}
?>