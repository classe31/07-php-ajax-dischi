<?php
    include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <header>
            <div class="logo">
                <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="Logo">
            </div>
        </header>

        <main>
            <div class="cds-container">

                <?php foreach($database as $cd) { ?>
                    <!-- Single cd -->
                    <div class="cd">
                        <img src="<?php echo $cd['poster']; ?>" alt="<?php echo $cd['title']; ?>">
                        <div class="title"><?php echo $cd['title']; ?></div>
                        <div class="author"><?php echo $cd['author']; ?></div>
                        <div class="year"><?php echo $cd['year']; ?></div>
                    </div>
                    <!-- End Single cd -->
                <?php } ?>

            </div>
        </main>
    </div>
    
</body>
</html>