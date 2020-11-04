<?php
    // error_reporting(0);
    include 'dischi-db.php';
    header('Content-Type: application/json');
    if (!isset($_GET['author']) || empty($_GET['author'])) {
        echo json_encode($database);
    } else {
        $author = $_GET['author'];
        $risultati = [];
        foreach ($database as $value) {
            if ($value['author']==$author) {
                array_push($risultati,$value);
            };
        };
        echo json_encode($risultati);
    };

 ?>
