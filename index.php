<title>PSY LIB</title>
<?php 
include './composants/header.php'; 
include 'data/db.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\index.css">
    
</head>
<body>
    <div class="contenu">
        <h1 class="" align='center'>Bienvenue sur PSYLIB</h1>
        <?php if(!isset($_SESSION["Is_conected"])){
            echo
                    '<div class="flex" align="center">'
                    .'<a href="./indexconnect.php">Connectez-vous</a>'
                .'</div>';

        }
        ?>

        
    </div>
    <!-- <img src="image.png"/> -->
</body>
</html>



<?php include './composants/footer.php'; ?>