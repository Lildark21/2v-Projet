<?php
include 'data/db.php';
include 'composants/header.php';
if(isset($_SESSION["id_user"])){
    $stmt = db()->prepare("SELECT appointment.*, psy.ID AS psy_id, psy.Last_name, psy.First_name, psy.specialty, psy.consultation_type, psy.price FROM appointment JOIN psy
    ON appointment.PSI_ID = psy.ID
    WHERE appointment.USER_ID = ?"); 
    $stmt->execute([ $_SESSION["id_user"] ]);
    $contenus = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($contenus as $contenu){
        echo 
        '<div>'
        
        
        .'Vous avez rendez-vous le ' . $contenu["Appointment_Date"] . ' avec ' . '<a href="psy_visualisation.php?id=' . $contenu['psy_id']. '">'.  $contenu['Last_name']." " . $contenu['First_name']. '</a>'
        .', pour une séance de ' . $contenu["specialty"] . " " . $contenu["consultation_type"]
        .', qui vous couteras ' . $contenu["price"] . "€"
        .'</div>';

    }

}
elseif(isset($_SESSION["id_psi"])){
    $stmt = db()->prepare("SELECT appointment.*, users.*, psy.* FROM appointment JOIN users
    ON appointment.USER_ID = users.ID
    JOIN psy ON appointment.PSI_ID = psy.ID
    WHERE appointment.PSI_ID = ?"); 
    $stmt->execute([ $_SESSION["id_psi"] ]);
    $contenus = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($contenus as $contenu){

        echo 
        '<div>'
        .'Vous avez rendez-vous le ' . $contenu["Appointment_Date"] . ' avec ' . $contenu['nom']." " .$contenu['prenom'] .", il a " . $contenu["age"] . " et son genre est : " . $contenu["genre"]
        .', pour une séance de ' . $contenu["specialty"] . " " . $contenu["consultation_type"]
        . ', le client a donné comme indication : ' . $contenu["Indication"]
        .'</div>';
    }


}

include './composants/footer.php';?>