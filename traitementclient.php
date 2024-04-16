<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=psylib;charset=utf8','root',
'');

if(isset($_POST['ok'])){
    
    $Last_name = $_POST['Last_name'];
    $First_name = $_POST['First_name']; 
    $age = $_POST['age'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $num_secu = $_POST['num_secu'];
    $gender = $_POST['gender'];


    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :Last_name,:First_name, :age, :numero, :email, :mdp, :num_secu, :gender)");  
    $requete->execute(
        array(
            
            'Last_name' => $First_name,
            'First_name' => $Last_name,
            'age' => $age,
            'numero' => $numero,
            'email' => $email,
            'mdp' => $mdp,
            'num_secu' => $num_secu,
            'gender' => $gender
        )
    );

    $reponse = $requete->fetchALL(PDO::FETCH_ASSOC);
    var_dump($reponse);


}


?>