<?php

include("connect_db.php");

if (isset($_POST)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $date_of_birth = $_POST['date_of_birth'];
    $phone_number = $_POST['phone_number'];
    $email_adres = $_POST['email_adres'];
    //Alle variablen voor alle inputs

    $stmt = $conn->prepare("INSERT INTO pro_formulier (firstname, lastname, date_of_birth, phone_number, email_adres) VALUES (?,?,?,?,?)");
    // Stuurt de alles wat in de inputs staat naar de database
    $stmt-> bind_param("sssss", $firstname, $lastname, $date_of_birth, $phone_number, $email_adres);
    $stmt-> execute();
    $stmt-> close();
    header("Location: admin.html");
}


?>