<?php 
include 'composants/header.php';
?>
<link rel="stylesheet" type="text/css" href="css/styleconnect.css">
<?php

include 'data/db.php';
if(isset($_POST['uname']) && !empty($_POST['uname'])
&& isset($_POST['password']) && !empty($_POST['password'])){
    $psi = db()->prepare("SELECT id, security_number FROM psy WHERE security_number = ? AND password = ?");
    $psi->setFetchMode(PDO::FETCH_ASSOC);
    $psi->execute([$_POST['uname'], $_POST['password']]);
    $psi=$psi->fetchAll();
    if(count($psi) > 0){
        $_SESSION["id_psi"]= $psi[0]['id'];
        $_SESSION["Is_conected"] = True;

        header('Location: index.php');
    }
    else {
        $utilisateur = db()->prepare("SELECT id, num_secu FROM users WHERE num_secu = ? AND mdp = ?");
        $utilisateur->setFetchMode(PDO::FETCH_ASSOC);
        $utilisateur->execute([$_POST['uname'], $_POST['password']]);
        $utilisateur=$utilisateur->fetchAll();
        if(count($utilisateur) > 0){
            $_SESSION["id_user"]= $utilisateur[0]['id'];
            $_SESSION["Is_conected"] = True;
    
            header('Location: index.php');
        }
        else {
            echo "il y a une erreur dans le pseudo";
        }
    }
}

?>

<div class="body2">
    <form action="indexconnect.php" class="formConnexion" method="POST"  enctype="multipart/form-data">
        <h2>Connexion</h2>

        <label>Numéro sécurité social</label>
        <input class="input2" type="text" name="uname" placeholder="Numéro de sécurité social">

        <label>Mot de passe</label>
        <input class="input2" type="password" name="password" placeholder="Mot de passe">

        <button type="submit">Connexion</button>

        <button><a href='./inscriptionpsy.php'>Inscription Psy</a></button>
        <button><a href='./inscriptionclient.php'>Inscription Client</a></button>
    </form>

</div>
</body>
</html>

//! page de Connexion