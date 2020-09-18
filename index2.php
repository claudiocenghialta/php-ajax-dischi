<?php
    include 'dischi-db.php';
    // foreach ($database as $disco) {
    //     var_dump($disco);
    // };

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/app.css">
    <title>Dischi</title>
</head>

<body>
    <header>
        <div class="container-header">
            <img src="https://i0.wp.com/azmagazine.co.uk/wp-content/uploads/2018/08/spotify-logo.png?resize=820%2C615" alt="logo" class="logo">
        </div>
    </header>
    <div class="container-dischi">

        <?php foreach ($database as $disco) { ?>
        <div class="card-disco <?php echo $disco['author']; ?>">
            <img class="poster" src="<?php echo $disco['poster']; ?>" alt="<?php echo $disco['title']; ?>">
            <div class="title"><?php echo $disco['title']; ?></div>
            <div class="author"><?php echo $disco['author']; ?></div>
            <div class="year"><?php echo $disco['year']; ?></div>
        </div>
        <?php }; ?>

    </div>


</body>

</html>
