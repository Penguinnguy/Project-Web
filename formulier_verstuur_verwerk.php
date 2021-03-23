<?php

include("connect_db.php");

if (isset($_POST)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $date_of_birth = $_POST['date_of_birth'];
    $phone_number = $_POST['phone_number'];
    $email_adres = $_POST['email_adres'];

    $stmt = $conn->prepare("INSERT INTO pro_formulier (firstname, lastname, date_of_birth, phone_number, email_adres) VALUES (?,?,?,?,?)");
    $stmt-> bind_param("sssss", $firstname, $lastname, $date_of_birth, $phone_number, $email_adres);
    $stmt-> execute();
    $stmt-> close();
}


?>