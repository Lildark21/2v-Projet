<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=psylib;charset=utf8','root',
'');

if(isset($_POST['ok'])){
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom']; 
    $age = $_POST['age'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $num_secu = $_POST['num_secu'];
    $gender = $_POST['gender'];


    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :nom, :prenom, :age, :numero, :email, :mdp, :num_secu, :gender)");  
    $requete->execute(
        array(
            
            'nom' => $nom,
            'prenom' => $prenom,
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