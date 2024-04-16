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

<?php
echo pageHeader("Psylib");
?>

 <form method="POST" action ="traitementpsy.php">
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
    <input type="password" id="mot de passe" name="password" placeholder="Entrez votre mot de passe..." required>
    <br>
    <label for="num_de_secu">Numéro de sécurité social</label>
    <input type="num_de_secu" id="num_de_secu" name="security_number" placeholder="Entrez votre numéro de sécurité social" required>
    <br>
    <label for="genre">Genre</label>
    <input type="text" id="genre" name="gender" placeholder="Entrez votre genre" required>
    <br>
    <label for="address">Entrez votre adresse</label>
    <input type="text" id="address" name="address" placeholder="Entrez votre adresse." required>
    <br>
    <label for="postal_code">code postal</label>
    <input type="text" id="postal_code" name="postal_code" placeholder="Entrez votre code postal." required>
    <br>
    <label for="specialty">spécialité</label>
    <input type="text" id="specialty" name="specialty" placeholder="Entrez votre spécialité" required>
    <br>
    <label for="diploma">diplome</label>
    <input type="text" id="diploma" name="diploma" placeholder="Entrez votre diplome" required>
    <br>
    <label for="price">prix</label>
    <input type="text" id="price" name="price" placeholder="Entrez votre prix" required>
    <br>
    <label for="consultation_type">Consultation</label>
    <input type="text" id="consultation_type" name="consultation_type" placeholder="Entrez vos consultation" required>
    <br>
    <input type="submit" value="S'inscrire" name="ok">
</form>
 </body>
 </html>



    
 <?php echo pageFooter()?>

