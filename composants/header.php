<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css\header.css">
</head>

<body>
    <header class="header">
        <a href="./index.php"><img src="logo.png"  class="logo" width="84" height="89.5"></a>

        <nav class="navbar">
            
        <?php if(isset($_SESSION["id_user"]))  {
            echo
                '<form action="" method="post">'

                    .'<label for="name"></label>'
                    .'<input type="search" name="pseudo" placeholder="Rechercher un compte…" size="30">'

                    .'<button type="submit">Rechercher</button>'

                .'</form>';
            }
            ?>
        <?php if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){

            header("location:recherche.php?recherche=". $_POST['pseudo']." ");
        }
        ?>
            <a href='./index.php'>Acceuil</a>

            <?php if(isset($_SESSION["Is_conected"]) && $_SESSION["Is_conected"]){
                if(isset($_SESSION["id_psi"])){
                    echo '<a href="./affichage_rdv.php">Rendez-vous psy</a>&nbsp;'
                    .  '<a class="Button" href="deco.php">Deconnexion</a>&nbsp;';;
                }
                elseif(isset($_SESSION["id_user"])){
                    echo '<a href="./affichage_rdv.php">Rendez-vous client</a>&nbsp;'
                    .  '<a class="Button" href="deco.php">Deconnexion</a>&nbsp;';;
                }
            } else{
                echo '<a href="./indexconnect.php">Connectez-vous</a>&nbsp;';
                
            }
            ?>
        </nav>

    </header>


