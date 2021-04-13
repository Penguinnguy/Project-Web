<?php

include("connect_db.php");

if (isset($_POST)) {
    $score = $_POST['score'];

    $stmt = $conn->prepare("INSERT INTO pro_game (score) VALUES (?)");
    // Verstuurt de score naar de game tabel in de database
    $stmt-> bind_param("s", $score);
    $stmt-> execute();
    $stmt-> close();
    header("Location: game.html");
}


?>