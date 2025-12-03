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
            background: linear-gradient(135deg, #222, #444);
            position: relative;
            overflow: hidden;
            
        }

        /* Efekt svjetlucanja */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 200%; height: 200%;
            background: radial-gradient(circle at center, rgba(255,255,255,0.05), transparent 70%);
            animation: waves 10s linear infinite;
            z-index: -1;
        }

        @keyframes waves {
            from {transform: translate(-25%, -25%) rotate(0deg);}
            to {transform: translate(-25%, -25%) rotate(360deg);}
        }

        h1 {
            text-align: center;
            margin: 30px;
            color: #fff;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
        }
        .shop-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
            padding: 20px;
        }
        .product-card {
            background: rgba(255,255,255,0.9);
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
            width: 260px;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
        }
        .product-card h3 {
            margin: 15px 0 10px;
            color: #e67e22;
        }
        .product-card p {
            color: #555;
            font-size: 14px;
            line-height: 1.4;
        }
        .product-card .price {
            font-weight: bold;
            color: #222;
            margin-top: 12px;
            font-size: 16px;
        }
        .status {
            text-align: center;
            margin: 30px;
            font-weight: bold;
            color: #fff;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.7);
        }
        .back-btn {
            display: inline-block;
            margin: 20px auto 40px;
            padding: 12px 25px;
            background: #e67e22;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s;
        }
        .back-btn:hover {
            background: #cf6d17;
        }
        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.4s ease; /* dodana tranzicija */
        }

        .product-card img:hover {
            transform: scale(1.08); /* lagani zoom */
        }
    </style>
</head>
<body>
    <h1>🏋️‍♂️ Gym Shop - Proizvodi</h1>
    <div class="shop-container">
        <div class="product-card">
            <img src="images/protein.jpg" alt="Protein Whey">
            <h3>Protein Whey</h3>
            <p>Visokokvalitetni whey protein za brži oporavak.</p>
            <div class="price">200 kn</div>
        </div>
        <div class="product-card">
            <img src="images/creatine.jpg" alt="Creatine Monohydrate">
            <h3>Creatine Monohydrate</h3>
            <p>Povećava snagu i izdržljivost u treningu.</p>
            <div class="price">150 kn</div>
        </div>
        <div class="product-card">
            <img src="images/gloves.jpg" alt="Fitness rukavice">
            <h3>Fitness rukavice</h3>
            <p>Udobne rukavice za siguran trening.</p>
            <div class="price">80 kn</div>
        </div>
        <div class="product-card">
            <img src="images/shaker.jpg" alt="Shaker">
            <h3>Shaker</h3>
            <p>Praktičan shaker za proteinske napitke.</p>
            <div class="price">50 kn</div>
        </div>
        <!-- Novi proizvodi -->
        <div class="product-card">
            <img src="images/belt.jpg" alt="Weightlifting Belt">
            <h3>Weightlifting Belt</h3>
            <p>Profesionalni pojas za dizanje utega – sigurnost i stabilnost.</p>
            <div class="price">220 kn</div>
        </div>
        <div class="product-card">
            <img src="images/dumbbells.jpg" alt="Set bučica">
            <h3>Set bučica</h3>
            <p>Komplet bučica za kućni trening i teretanu.</p>
            <div class="price">350 kn</div>
        </div>
        <div class="product-card">
            <img src="images/yogamat.jpg" alt="Yoga Mat">
            <h3>Yoga Mat</h3>
            <p>Antiklizna podloga za jogu i istezanje.</p>
            <div class="price">120 kn</div>
        </div>
        <div class="product-card">
            <img src="images/preworkout.jpg" alt="Pre-Workout">
            <h3>Pre-Workout</h3>
            <p>Energetski dodatak za maksimalnu snagu i fokus.</p>
            <div class="price">180 kn</div>
        </div>
    </div>

    <div class="status">
        <?php echo isset($_SESSION['email']) ? "✅ Ulogiran si kao: ".$_SESSION['email'] : "❌ Nisi ulogiran"; ?>
    </div>
    <div style="text-align:center;">
        <a href="index.php" class="back-btn">⬅ Povratak na početnu</a>
    </div>
</body>
</html>
