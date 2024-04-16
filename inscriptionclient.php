<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

<?php
require_once 'affichage.php';

?>

<link rel="stylesheet" href="css\inscritption.css">
    
<form method="POST" action ="traitementclient.php">
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="Last_name" placeholder="Entrez votre nom..." required>
    <br>
    <label for="prénom">Prénom</label>
    <input type="text" id="prénom" name="First_name" placeholder="Entrez votre prénom..." required>
    <br>
    <label for="age">Age</label>
    <input type="text" id="age" name="birthdate" placeholder="Entrez votre age..." required>
    <br>
    <label for="numéro">Numéro de téléphone</label>
    <input type="text" id="numéro" name="phone_number" placeholder="Entrez votre numéro de téléphone..." required>
    <br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Entrez votre email..." required>
    <br>
    <label for="mot de passe">Mot de passe</label>
    <input type="password" id="mot de passe" name="password_hash" placeholder="Entrez votre mot de passe..." required>
    <br>
    <label for="num_de_secu">Numéro de sécurité social</label>
    <input type="text" id="num_de_secu" name="security_number" placeholder="Entrez votre numéro de tel..." required>
    <br>
    <select name="gender">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select>
    <br>
    <input type="submit" value="S'inscrire" name="ok">
</form>


</body>
</html>


<?php echo pageFooter()?>
<?php include './composants/footer.php'; ?>
