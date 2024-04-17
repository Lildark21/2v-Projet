<?php

include 'data/db.php';
include 'composants/header.php';



$stmt = db()->prepare("SELECT * FROM psy WHERE Last_name LIKE ?"); //nom
$stmt->execute(["%" . $_GET["recherche"] . "%"]);
$contenus = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(!empty($contenus)){
foreach($contenus as $contenu){
    echo  '<h2><a href="psy_visualisation.php?id='.$contenu['ID'].'">'.$contenu['Last_name']." " .$contenu['First_name'].'</a>  </h2>';
}}
else{
    $stmt = db()->prepare("SELECT * FROM psy WHERE postal_code LIKE ?");//code postal
    $stmt->execute(["%" . $_GET["recherche"] . "%"]);
    $contenus = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($contenus)){
        foreach($contenus as $contenu){
            echo  '<h2><a href="psy_visualisation.php?id='.$contenu['ID'].'">'.$contenu['Last_name']." " .$contenu['First_name'].'</a>  </h2>';
    }}
    else{
        $stmt = db()->prepare("SELECT * FROM psy WHERE specialty LIKE ?");//spé
        $stmt->execute(["%" . $_GET["recherche"] . "%"]);
        $contenus = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($contenus)){
                foreach($contenus as $contenu){
                    echo  '<h2><a href="psy_visualisation.php?id='.$contenu['ID'].'">'.$contenu['Last_name']." " . $contenu['First_name'].'</a>  </h2>';
            }}
            else{
                $stmt = db()->prepare("SELECT * FROM psy WHERE consultation_type LIKE ?");//type de consultation
                $stmt->execute(["%" . $_GET["recherche"] . "%"]);
                $contenus = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if(!empty($contenus)){
                    foreach($contenus as $contenu){
                        echo  '<h2><a href="psy_visualisation.php?id='.$contenu['ID'].'">'.$contenu['Last_name']." " .$contenu['First_name'].'</a>  </h2>';
                }}
                else{
                    echo "il n'y a pas de compte de ce genre qui existe";
}
            }
    }
}






include './composants/footer.php'; ?>