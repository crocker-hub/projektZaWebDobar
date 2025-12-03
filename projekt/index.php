<?php session_start(); ?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Gym Shop</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
            background: url('images/background-gym.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        nav {
            background: #222;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            color: #e67e22;
        }
        .hero {
            background: url('images/gym-hero.jpg') no-repeat center center/cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
        }
        .hero h1 {
            font-size: 48px;
        }
        .content {
            padding: 40px;
            text-align: center;
        }
        .content h2 {
            margin-bottom: 20px;
            color: #e67e22;
        }
        .info {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        .info-box {
            background: #4d4d4dff;
            padding: 20px;
            margin: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(255, 0, 0, 0.1);
            width: 250px;
        }
        .info-box h3 {
            color: #444;
        }
        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 40px;
        }
        .gallery img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .status {
            text-align: center;
            margin: 30px;
            font-weight: bold;
        }
        /* Efekt za naslove hero sekcije */
        .hero h1 {
            font-size: 48px;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { text-shadow: 0 0 10px #e67e22, 0 0 20px #e67e22; }
            to { text-shadow: 0 0 20px #ffcc00, 0 0 40px #ffcc00; }
        }

        /* Efekt za podnaslove */
        .content h2 {
            margin-bottom: 20px;
            color: #e67e22;
            position: relative;
            display: inline-block;
            padding: 5px 15px;
            background: linear-gradient(90deg, #e67e22, #ffcc00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: slideIn 1s ease forwards;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Efekt za paragrafe */
        .content p, .info-box p {
            line-height: 1.6;
            background: #ffffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .content p:hover, .info-box p:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
        }

        /* Efekt za naslove info-boxova */
        .info-box h3 {
            color: #ffffffff;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #e67e22;
            padding-bottom: 5px;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        .info-box h3:hover {
            color: #e67e22;
        }

        /* Efekt za status login-a */
        .status {
            text-align: center;
            margin: 30px;
            font-weight: bold;
            font-size: 18px;
            color: #222;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <?php if(isset($_SESSION['email'])): ?>
            <a href="logout.php">Logout</a>
        <?php endif; ?>
    </nav>

    <div class="hero">
        <h1>Dobrodošli u JUNGLE GYM</h1>
    </div>

    <div class="content">
        <h2>O nama</h2>
        <p>Naša teretana nudi vrhunsku opremu, profesionalne trenere i motivirajuću atmosferu. 
        Bez obzira jeste li početnik ili napredni sportaš, kod nas ćete pronaći sve što vam treba za uspjeh. Jedini oni
        koji nisu dobrodošli u našu teretanu su oni koji misle da više ne mogu napredovati i oni koji disciplinu zamjenjuju za 
        brzu hranu i kratkotrajnu sreču.
        </p>

        <div class="info">
            <div class="info-box">
                <h3>🏋️‍♂️ Oprema</h3>
                <p>Najnovija fitness oprema za sve vrste treninga. Imali vi 50 ili 150 kila pronači čete nešto za vas 
                    pripremite se da prolijete jako puno suza, krvi i znoja
                </p>
            </div>
            <div class="info-box">
                <h3>Treneri</h3>
                <p>Iskusni treneri koji će vas voditi do cilja. Ovi treneri ne samo da če vas gurati da postanete svoja najbolja
                    verzija nego če vas gurati još i preko toga. Gurati če vas toliko daleko da če te se sami zapitati tko ste.
                </p>
            </div>
            <div class="info-box">
                <h3>Atmosfera</h3>
                <p>Motivirajuće okruženje koje vas potiče na uspjeh. Ovdje če te pronači svakakve vrste ljudi a pogotovo one kojima 
                    je jedina stvar koja im fali više od proteina je 50kg mišične mase
                </p>
            </div>
        </div>

        <h2>Galerija</h2>
        <div class="gallery">
            <img src="images/gym1.jpg" alt="Teretana slika 1">
            <img src="images/gym2.jpg" alt="Teretana slika 2">
            <img src="images/gym3.jpg" alt="Teretana slika 3">
            <img src="images/gym4.jpg" alt="Teretana slika 4">
            <img src="images/gym5.jpg" alt="Teretana slika 5">
            <img src="images/gym6.jpg" alt="Teretana slika 6">
            <img src="images/gym7.jpg" alt="Teretana slika 7">
            <img src="images/gym8.jpg" alt="Teretana slika 8">
            <img src="images/gym9.jpg" alt="Teretana slika 9">
            <img src="images/gym10.jpg" alt="Teretana slika 10">
        </div>
    </div>

    <div class="status">
        <?php echo isset($_SESSION['email']) ? "✅ Ulogiran kao: ".$_SESSION['email'] : "❌ Nisi ulogiran"; ?>
    </div>
</body>
</html>