<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathan Decraye - Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      .carousel-inner{
        margin-top: 100px;
        margin-bottom: 50px;
      }

        .card {
            perspective: 1000px;
            margin: 20px auto;
        }

        .card-inner {
            position: relative;
            width: 100%;
            height: 300px;
            transform-style: preserve-3d;
            transition: transform 0.8s;
        }

        .card:hover .card-inner {
            transform: rotateY(180deg);
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
        }

        .card-front {
            background: #fff;
            color: black;
        }

        .card-back {
            background: #333;
            color: white;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card-back a {
            color: #fff;
            text-decoration: none;
            margin-top: 10px;
        }

        .card-back a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="header_logo-container">
          <div class="header_logo-img-cont">
            <a href="../../index.html"><img src="../img/moi-removebg-preview.png" alt="logo dechno-code" class="header_logo-img"></a>
          </div>
          <a href="../../index.html"><span>Nathan Decraye - Portfolio</span></a>
        </div>
        <div class="toggler-container">
            <button>
              <img src="../img/menu.svg" alt="toggle menu">
            </button>
          </div>
          <nav class="navigation">
            <a href="competences.php">Compétences</a>
            <a href="formations.php">Formations</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="contact.php">Contact</a>
          </nav>
    </header>