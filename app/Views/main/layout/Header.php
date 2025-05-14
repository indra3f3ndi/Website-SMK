<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <base href="<?= base_url('assets')?>/" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/home.css" />
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #00264d; /* Biru tua */
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }
        nav .fill-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        nav h4 a {
            color: #ff6600; /* Oranye */
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        nav h4 a:hover {
            color: #ffffff; /* Putih */
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            position: relative;
            padding: 14px 20px;
        }
        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        nav ul li a:hover, 
        nav ul li a.active {
            background-color: #ff6600; /* Oranye */
            color: #00264d; /* Biru tua */
        }
        nav ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #00264d; /* Biru tua */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 0;
            list-style: none;
        }
        nav ul li ul li {
            width: 200px;
        }
        nav ul li ul li a {
            display: block;
            padding: 10px 15px;
            color: #ffffff;
        }
        nav ul li ul li a:hover {
            background-color: #ff6600; /* Oranye */
            color: #00264d; /* Biru tua */
        }
        nav ul li:hover ul {
            display: block;
        }
    </style>
</head>
<body>
    <nav>
        <div class="fill-nav">
            <h4><a href="#">SUNGAI RANGEH</a></h4>
            <ul id="navbar">
                <li><a href="/" class="nav-link">Beranda</a></li>
                <li><a href="/profile" class="nav-link">Profile</a></li>
                <li><a href="/portofolio" class="nav-link">informasi</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

      </nav>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Remove active class from all links
                    navLinks.forEach(link => link.classList.remove('active'));
                    // Add active class to the clicked link
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>
</html>
