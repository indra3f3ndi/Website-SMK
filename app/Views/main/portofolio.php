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

        .card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
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
            <h1>informasi seputar</h1>
            <h2>SUNGAI RANGEH</h2>
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
                    <img src="img/picture.jpg" alt="Deskripsi">
                    <h3>Seni Tari Dari anak SD 04 sungai rangeh</h3>
                    <p>Dalam rangkaian kegiatan penutupan Kuliah Kerja Nyata (KKN) yang dilaksanakan oleh mahasiswa KKN se-Nagari Bayua, acara berlangsung dengan penuh semangat dan antusiasme dari masyarakat setempat. Salah satu momen yang paling berkesan adalah penampilan seni budaya yang menampilkan tari tradisional sebagai simbol apresiasi terhadap kekayaan budaya Minangkabau. Penampilan ini tidak hanya menjadi hiburan bagi para hadirin, tetapi juga menjadi wujud kolaborasi antara mahasiswa KKN dan masyarakat Nagari Bayua dalam melestarikan kebudayaan lokal. 

Penampilan tari tradisional ini dipersembahkan oleh anak-anak SD 04 Sungai Rangeh, yang dengan lincah dan anggun menari mengikuti irama musik tradisional. Keikutsertaan mereka dalam acara ini menunjukkan semangat generasi muda dalam melestarikan warisan budaya daerah. Penampilan tersebut menjadi salah satu puncak acara yang berhasil memukau para undangan, sekaligus menutup kegiatan KKN dengan kesan mendalam dan penuh kebersamaan.
                    </p>
                </div>
                <div class="card">
                    <img src="img/gambar1.jpg" alt="Sejarah Sungai Rangeh">
                    <h3>Sejarah Sungai Rangeh</h3>
                    <p>Sejarah Jorong Sungai Rangeh
Nagari Bayua, yang terletak di Kecamatan Tanjung Raya, Kabupaten Agam, Sumatera Barat, memiliki sejarah yang kaya dan beragam. Salah satu jorong yang ada di nagari ini adalah Jorong Sungai Rangeh. Jorong Sungai Rangeh merupakan bagian integral dari sejarah dan budaya Nagari Bayua. Dengan latar belakang sejarah yang kaya dan praktik demokrasi yang telah berlangsung lama, Nagari Bayua terus berkembang sebagai komunitas yang dinamis di Kecamatan Tanjung Raya.
 Berikut adalah gambaran mengenai sejarah dan perkembangan Jorong Sungai Rangeh serta Nagari Bayua secara umum.

</p>
                </div>
                <div class="card">
                    <img src="img/gambar2.jpg" alt="Kondisi Jorong">
                    <h3>Kondisi Jorong</h3>
                    <p>Populasi Jorong Sungai Rangeh memiliki jumlah penduduk yang signifikan, dengan sekitar 1.165 jiwa pada tahun 2020, menjadikannya sebagai salah satu jorong dengan populasi terbesar di Nagari Bayua.
                    Pertanian: Daerah aliran Sungai Rangeh menjadi sumber pengairan utama untuk tanaman padi dan hortikultura.
Wisata Alam: Pengunjung sering datang untuk menikmati pemandangan, memancing, atau sekadar menikmati keindahan alam.
Konservasi: Ada upaya masyarakat lokal untuk menjaga kebersihan dan kelestarian sungai, termasuk pengelolaan limbah secara tradisional.
                    </p>
                </div>
                <div class="card">
                    <img src="img/gambar3.jpg" alt="Kondisi Jorong">
                    <h3>Potensi</h3>
                    <p>Pertanian: Daerah aliran Sungai Rangeh menjadi sumber pengairan utama untuk tanaman padi dan hortikultura.
Wisata Alam: Pengunjung sering datang untuk menikmati pemandangan, memancing, atau sekadar menikmati keindahan alam.
Konservasi: Ada upaya masyarakat lokal untuk menjaga kebersihan dan kelestarian sungai, termasuk pengelolaan limbah secara tradisional.</p>
                </div>
                <div class="card">
                    <img src="img/gambar4.PNG" alt="Kondisi Jorong">
                    <h3>Pendidikan</h3>
                    <p>Di Sungai Rangeh, sistem pendidikan telah berkembang dengan baik untuk memenuhi kebutuhan belajar masyarakat setempat. Terdapat dua taman kanak-kanak, yaitu TK Hasta Karya dan TK Kembang Melati, yang menjadi langkah awal bagi anak-anak untuk memperoleh pendidikan dasar. Kedua TK ini berperan penting dalam membentuk fondasi pembelajaran bagi anak-anak melalui berbagai kegiatan yang mendukung perkembangan intelektual, emosional, dan sosial.

Selain itu, di Sungai Rangeh juga terdapat pendidikan agama melalui Madrasah Diniyah Takmiliyah Awaliyah (MDTA) yang berfungsi untuk memberikan pembelajaran agama Islam kepada anak-anak. Pendidikan formal dilanjutkan di Sekolah Dasar Negeri 04 Sungai Rangeh, yang menjadi tempat anak-anak setempat menempuh pendidikan dasar. Keberadaan lembaga-lembaga pendidikan ini menunjukkan komitmen masyarakat Sungai Rangeh dalam menciptakan generasi muda yang cerdas dan berakhlak mulia.</p>
                </div>
                <div class="card">
                    <img src="img/gambar5.jpg" alt="Kondisi Jorong">
                    <h3>Agama</h3>
                    <p>Agama di Sungai Rangeh mayoritas dianut oleh masyarakat dengan keyakinan Islam. Sebagai bagian dari budaya Minangkabau, kehidupan masyarakat di Sungai Rangeh sangat kental dengan nilai-nilai agama Islam yang diterapkan dalam kehidupan sehari-hari. Selain menjalankan ibadah wajib seperti salat, puasa, dan zakat, masyarakat juga aktif dalam berbagai kegiatan keagamaan, baik di tingkat keluarga maupun komunitas.

Madrasah Diniyah Takmiliyah Awaliyah (MDTA) yang ada di Sungai Rangeh menjadi salah satu lembaga yang berperan penting dalam menanamkan pengetahuan agama sejak dini. Di sini, anak-anak diajarkan tentang dasar-dasar agama Islam, termasuk membaca Al-Qur'an dan memahami ajaran-ajaran agama. Selain itu, masjid-masjid di kawasan tersebut juga menjadi pusat kegiatan agama, tempat masyarakat berkumpul untuk melaksanakan salat berjamaah, peringatan hari besar Islam, serta berbagai kegiatan sosial keagamaan lainnya. Dengan demikian, agama Islam memiliki peran sentral dalam membentuk karakter dan kebersamaan masyarakat di Sungai Rangeh.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Sungai Rangeh - Bayua - Tanjung Raya - Maninjau - Sumatera Barat -</p>
        </div>
    </footer>
</body>
</html>
