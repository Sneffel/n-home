<?php
require 'sys/top.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neureiter</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moderustic:wght@300..800&display=swap" rel="stylesheet">

    <style>
        :root {
            --hero-img: url('assets/img/P1280562.jpg');

            <?php
            foreach (['regular', 700, 900] as $weight) {
                echo "@font-face {
        font-family: 'Cinzel';
        src: url('assets/fonts/cinzel-decorative-v17-latin-ext-$weight.woff2') format('woff2');
        font-weight: $weight;
        font-style: normal;
    }";
            }
            ?>
        }

        <?= implode('', array_map(fn($file) => preg_replace('/\s+/', ' ', file_get_contents("css/$file.css")), ['reset', 'base', 'style'])) ?>
    </style>


    <link rel="preload" as="image" href="assets/img/low/P1280562.webp" fetchpriority="high">


    <meta name="darkreader-lock">
</head>

<body>

    <main>
        <div class="hero">
            <div class="container">

                <?= "<h1>Neureiter</h1>" ?>


                <p>
                    <?= CURRENT_URL ?>
                </p>
                <p>
                    Sono le <?= date("H:i") ?>
                </p>
                <p>È tutto ok! :)</p>
            </div>
        </div>
        <?php
        // <img src="assets/img/P1280562.jpg" style="background-image: url('assets/img/low/P1280562.webp');" alt="Kitty" width="2000" height="1336">
        ?>
    </main>
</body>

</html>