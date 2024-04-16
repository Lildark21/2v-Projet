<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=psylib;charset=utf8','root',
'');

if(isset($_POST['ok'])){
    
    $Last_name = $_POST['Last_name'];
    $First_name = $_POST['First_name']; 
    $birthdate = $_POST['birthdate'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $security_number = $_POST['security_number'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];
    $specialty = $_POST['specialty'];
    $diploma = $_POST['diploma'];
    $price = $_POST['price'];
    $consultation_type = $_POST['consultation_type'];



    $requete = $bdd->prepare("INSERT INTO psy VALUES (0, :Last_name, :First_name, :birthdate, :phone_number, :email, :password, :security_number, :gender, :address, :postal_code, :specialty, :diploma, :price, :consultation_type)");  
    $requete->execute(
        array(
            
            'Last_name' => $First_name,
            'First_name' => $Last_name,
            'birthdate' => $birthdate,
            'phone_number' => $phone_number,
            'email' => $email,
            'password' => $password,
            'security_number' => $security_number,
            'gender' => $gender,
            'address' => $address,
            'postal_code' => $postal_code,
           'specialty' => $specialty,
           'diploma' => $diploma,
           'price' => $price,
           'consultation_type' => $consultation_type

        )
    );

    $reponse = $requete->fetchALL(PDO::FETCH_ASSOC);
    var_dump($reponse);


}

