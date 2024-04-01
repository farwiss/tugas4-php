<?php
include_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Farwis</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 style="background-color:#317; color:#fff; text-align:center;">WEB FARWIS</h1>
    <div style="text-align: center; background-color: #333; color:#fff">
        <!-- HOME | PRODUK | PESAN | GALERI | GESBUK -->

        <?php
        // looping foreach dari navbar.php
        foreach ($navbar as $key => $value) {
            // link a href ke key $ value
            echo "<a href ='index.php?hal=$key'> $value     |</a>";
        }
        ?>
    </div>

</body>

</html>