<?php
include 'data/db.php';
include 'composants/header.php';
?>


<?php
if(isset($_GET["postal_code"])){
    $psy_regions = db()->prepare("SELECT * FROM `PSI` WHERE postal_code = :postal_code");
    $psy_regions->execute(
        ['postal_code' => $_GET["postal_code"]]
    );
    $psy_regions = $psy_regions->fetchAll();

    foreach($psy_regions as $psy_region){
        echo '<div> '
        .'<h2> nom'.$psy_region['name'].'prenom '. $psy_region['First_name'].'</h2>'
        .'<h2>numéro de telephone '. $psy_region['phone_number'].', specialite '. $psy_region['specialty'].' </h2>'
        .'<h2>prix de consultation '. $psy_region['price'].', type de consultation '.$psy_region['consultation_type'].'</h2>'
        .'<h2>region '.$psy_region['postal_code'].'</h2>'
        .'<h2><a href="prise_de_rdv.php?id_spy='.$psy_region['id'].'"> Prendre rendez-vous</a></h2>'
        
        
        .'</div>';
    }
}
if(isset($_GET["name"])){
    $psy_names = db()->prepare("SELECT * FROM `PSI` WHERE name= :name");
    $psy_names->execute(
        ['name' => $_GET["name"]]
    );
    $psy_names = $psy_names->fetchAll();

    foreach($psy_names as $psy_name){
        echo '<div> '
        .'<h2> nom'.$psy_name['name'].'prenom '. $psy_name['First_name'].'</h2>'
        .'<h2>numéro de telephone '. $psy_name['phone_number'].', specialite '. $psy_name['specialty'].' </h2>'
        .'<h2>prix de consultation '. $psy_name['price'].', type de consultation '.$psy_name['consultation_type'].'</h2>'
        .'<h2>region '.$psy_name['postal_code'].'</h2>'
        .'<h2><a href="prise_de_rdv.php?id_spy='.$psy_name['id'].'"> Prendre rendez-vous</a></h2>'
        .'</div>';
    }

}
if(isset($_GET["speciality"])){
    $psy_spes = db()->prepare("SELECT * FROM `PSI` WHERE specialty= :spe");
    $psy_spes->execute(
        ['spe' => $_GET["specialty"]]
    );
    $psy_spes = $psy_spes->fetchAll();

    foreach($psy_spes as $psy_spe){
        echo '<div> '
        .'<h2> nom'.$psy_spe['name'].'prenom '. $psy_spe['First_name'].'</h2>'
        .'<h2>numéro de telephone '. $psy_spe['phone_number'].', specialite '. $psy_spe['specialty'].' </h2>'
        .'<h2>prix de consultation '. $psy_spe['price'].', type de consultation '.$psy_spe['consultation_type'].'</h2>'
        .'<h2>region '.$psy_spe['postal_code'].'</h2>'
        .'<h2><a href="prise_de_rdv.php?id_spy='.$psy_spe['id'].'"> Prendre rendez-vous</a></h2>'
        .'</div>';
    }

}
?>

<?php include './composants/footer.php';?>