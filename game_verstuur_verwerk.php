<?php

include("connect_db.php");

if (isset($_POST)) {
    $score = $_POST['score'];

    $stmt = $conn->prepare("INSERT INTO pro_game (score) VALUES (?)");
    $stmt-> bind_param("s", $score);
    $stmt-> execute();
    $stmt-> close();
    header("Location: game.html");
}


?>