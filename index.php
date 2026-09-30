<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaundryKu</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f8fc;
        }

        nav {
            background: #2196f3;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            color: white;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
        }

        .hero {
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px 8%;
            background: white;
        }

        .hero-text {
            max-width: 550px;
        }

        .hero h1 {
            color: #1976d2;
            font-size: 45px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .btn {
            background: #2196f3;
            color: white;
            padding: 14px 25px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
        }

        .laundry-icon {
            font-size: 150px;
        }

        .services {
            padding: 60px 8%;
            text-align: center;
        }

        .services h2 {
            color: #1976d2;
            margin-bottom: 30px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            width: 250px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px #ddd;
        }

        .card h3 {
            color: #1976d2;
            margin-bottom: 10px;
        }

        footer {
            background: #1565c0;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <nav>
        <h2>LaundryKu</h2>

        <div>
            <a href="index.php">Home</a>
            <a href="#services">Services</a>
            <a href="home.php">Login</a>
        </div>
    </nav>

    <section class="hero">

        <div class="hero-text">
            <h1>Clean Clothes, Happy Life!</h1>

            <p>
                Fast, clean, and affordable laundry service
                for your daily needs.
            </p>

            <a href="login.php" class="btn">
                Get Started
            </a>
        </div>

        <div class="laundry-icon">
            👕👖
        </div>

    </section>

    <section class="services" id="services">

        <h2>Our Services</h2>

        <div class="cards">

            <div class="card">
                <h3>Wash & Fold</h3>
                <p>Clean and neatly folded clothes.</p>
            </div>

            <div class="card">
                <h3>Ironing</h3>
                <p>Make your clothes neat and ready to wear.</p>
            </div>

            <div class="card">
                <h3>Express</h3>
                <p>Fast laundry service for your needs.</p>
            </div>

        </div>

    </section>

    <footer>
        <p>© 2026 LaundryKu</p>
    </footer>

</body>
</html>