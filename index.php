<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Document</title>
</head>
<body>
    <?php
    $heading = "Home";
    require 'functions.php';
    require('views/partials/head.php');
    require('views/partials/nav.php');
    require('views/partials/banner.php');
    ?>
    <main>
        <div class="mx-auto max-w-5xl py-6 px-8">
            <p>Hello World!</p>
        </div>
    </main>

    <?php
    require('views/partials/footer.php');
    ?>

</body>
</html>