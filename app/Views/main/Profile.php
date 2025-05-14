<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-image: url('img/sekolah.jpg'); /* Sesuaikan path gambar di sini */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
        }

        .container {
            width: 85%;
            margin: auto;
            overflow: hidden;
        }

        header {
            background: #1e3a8a; /* Biru tua */
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            border-bottom: #f97316 4px solid; /* Oranye */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
            text-transform: uppercase;
        }

        header p {
            font-size: 1.2rem;
        }

        .hero {
            height: 70vh;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero h2 {
            font-size: 3.5rem;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .hero p {
            font-size: 1.5rem;
            font-weight: 300;
        }

        .content {
            padding: 60px 0;
            background: rgba(255, 255, 255, 0.7);
        }

        .content h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #1e3a8a; /* Biru tua */
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background: #ffffff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            flex: 1 1 30%;
            transition: transform 0.3s ease;
            text-align: center;
            border-top: 4px solid #f97316; /* Oranye */
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card h3 {
            margin-bottom: 15px;
            font-size: 1.5rem;
            color: #1e3a8a; /* Biru tua */
        }

        .card p {
            font-size: 1rem;
            color: #555;
        }

        footer {
            background: #1e3a8a; /* Biru tua */
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }

        footer p {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>PROFILE </h1>
            <h2>SUNGAI RANGEH</h2>
            <p>Sungai Rangeh - nagari bayua - Tanjung Raya - Kab Agam - Maninjau</p>
        </div>
    </header>
    
    <section class="hero">
        <div class="container">
            <h2>SUNGAI RANGEH</h2>
            <p>Sungai Rangeh - Bayua - Tanjung Raya - Maninjau - Sumatera Barat</p>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <h2>informasi jorong</h2>
            <div class="card-container">
                <div class="card">
                    <h3>Deskripsi</h3>
                    <p>Sejarah Jorong Sungai Rangeh Nagari Bayua
Nagari Bayua, yang terletak di Kecamatan Tanjung Raya, Kabupaten Agam, Sumatera Barat, memiliki sejarah yang kaya dan beragam. Salah satu jorong yang ada di nagari ini adalah Jorong Sungai Rangeh. Jorong Sungai Rangeh merupakan bagian integral dari sejarah dan budaya Nagari Bayua. Dengan latar belakang sejarah yang kaya dan praktik demokrasi yang telah berlangsung lama, Nagari Bayua terus berkembang sebagai komunitas yang dinamis di Kecamatan Tanjung Raya.
</p>
                </div>
                <div class="card">
                    <h3>Sejarah Sungai Rangeh</h3>
                    <p>Sejarah Nagari Bayua
Asal Usul Jorong Sungai Rangeh Tidak Pernah Lepas Dari Nama Nagari Bayua yang merupakan Selingkup Nagari Bayua dipercaya berasal dari pertemuan para penghulu yang dilakukan di Lubuk Gadang, tempat di mana banyak tumbuh pohon kayu Bayur. Pertemuan ini bertujuan untuk mengangkat seorang penghulu kepala dari keturunan raja Minangkabau.
Kehidupan Masyarakat Sebelum menjadi nagari, wilayah ini dihuni oleh nenek moyang yang tinggal di sekitar gunung berapi dan hutan belantara. Pada abad ke-17, orang-orang dari Pagaruyung mulai mendirikan permukiman yang kemudian berkembang menjadi nagari.
Zaman Penjajahan Selama penjajahan Belanda, wilayah-wilayah kecil digabung menjadi satu unit pemerintahan. Hal ini dilakukan untuk memperkuat kontrol Belanda atas daerah tersebut.
Demokrasi Lokal Nagari Bayua dikenal sebagai salah satu nagari dengan praktik demokrasi yang telah ada sejak lama, termasuk pemilihan kepala desa yang pertama kali dilakukan pada tahun 1952 dan pemilihan wali nagari pada tahun 2002[3][4].
Sejarah Jorong Sungai Rangeh</p>
                </div>
                <div class="card">
                    <h3>kondisi jorong</h3>
                    <p>Populasi Jorong Sungai Rangeh memiliki jumlah penduduk yang signifikan, dengan sekitar 1.165 jiwa pada tahun 2020, menjadikannya sebagai salah satu jorong dengan populasi terbesar di Nagari Bayua.
                    Kondisi Sosial Masyarakat Jorong Sungai Rangeh memiliki kehidupan sosial yang aktif dan terlibat dalam berbagai kegiatan adat dan budaya yang merupakan bagian dari identitas Minangkabau.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Sungai Rangeh - Bayua - Tanjung Raya - Maninjau - Sumatera Barat</p>
        </div>
    </footer>
</body>
</html>







