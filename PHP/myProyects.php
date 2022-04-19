<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Normalize -->
    <link rel="stylesheet" href="./../CSS/normalize.css">
    <!-- Icon -->
    <link rel="shortcut icon" href="./../IMG/icon.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,200;0,400;0,600;1,200;1,400&display=swap" rel="stylesheet">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="./../CSS/base8.css">
    <link rel="stylesheet" href="./../CSS/myProyects2.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4c62087cc0.js" crossorigin="anonymous"></script>
    <title>My proyects</title>
</head>

<body>
    <?php
    include("includes/head_foot.php");
    ?>
    <div class="container">
        <main>
            <h1 id="title-MyProyects">My proyects</h1>
            <div class="portfolio-grid">
                <div id="proyect">
                    <div class="img-efect">
                        <img src="./../IMG/SebPolPier.PNG" alt="SebPolPier">
                        <div class="proyect-info">
                            <div>
                                <h3>SebPolPier</h3>
                                <p>Test website that is dedicated to importing computer hardware in order to solve the shortage of these by their price increase.</p>
                                <a class="visit-proyect" href="#"><b>More info</b></a>
                                <!-- <a class="visit-proyect" href="#">Visit Website</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="proyect">
                    <div class="img-efect">
                        <img src="./../IMG/Countdown Timer.PNG" alt="Countdown Timer">
                        <div class="proyect-info">
                            <div>
                                <h3>Countdown Timer</h3>
                                <p>Website showing countdown timer to new year 2023 </p>
                                <a class="visit-proyect" href="#"><b>More info</b></a>
                                <!-- <a class="visit-proyect" href="#">Visit Website</a> -->
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal().reveal('#head', {
            delay: 500
        });
        ScrollReveal().reveal('#title-MyProyects', {
            delay: 500
        });
        ScrollReveal().reveal('#proyect', {
            delay: 500
        });
        ScrollReveal().reveal('#footer', {
            delay: 500
        });
    </script>
    <!-- Personal JS -->
    <script src="./../JS/base8.js"></script>
</body>

</html>