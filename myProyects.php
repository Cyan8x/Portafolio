<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("./includes/meta.php");
    ?>
    <!-- Personal CSS -->
    <link rel="stylesheet" href="./CSS/myProyects2.css">
    <!-- Tittle -->
    <title>My proyects</title>
</head>

<body>
    <?php
    include("./includes/head_foot.php");
    ?>
    <div class="container">
        <main>
            <h1 id="title-MyProyects">My proyects</h1>
            <div class="portfolio-grid">
                <div id="proyect">
                    <div class="img-efect">
                        <img src="./IMG/SebPolPier.PNG" alt="SebPolPier">
                        <div class="proyect-info">
                            <div>
                                <h3>SebPolPier</h3>
                                <p>Test website that is dedicated to importing computer hardware in order to solve the shortage of these by their price increase.</p>
                                <a class="visit-proyect" href="./SebPolPier.php"><b>More info</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="proyect">
                    <div class="img-efect">
                        <img src="./IMG/Countdown Timer.PNG" alt="Countdown Timer">
                        <div class="proyect-info">
                            <div>
                                <h3>Countdown Timer</h3>
                                <p>Website showing countdown timer to new year 2023 </p>
                                <a class="visit-proyect" target="_blank" href="https://github.com/Cyan8x/Proyectos-secundarios/tree/main/Countdown%20Timer"><b>GitHub</b></a>
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