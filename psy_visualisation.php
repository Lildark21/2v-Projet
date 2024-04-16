<?php

include 'data/db.php';
include 'composants/header.php';
$stmt = db()->prepare("SELECT * FROM psy WHERE ID = ?"); 
$stmt->execute([ $_GET["id"] ]);
$contenu = $stmt->fetch(PDO::FETCH_ASSOC);
echo 

'<div>'
. '<h2>'.$contenu['Last_name']." " .$contenu['First_name'].'</h2>'
.'</div>'

.'<div>';
$birthdate = new DateTime($contenu['birthdate']);
$age = $birthdate->diff(new DateTime('now'))->y;
echo
'<div><h2>' . $age . ' ans</h2></div>'
.'<div><h2>' . $contenu['phone_number'] . '</h2></div>'
.'<div><h2>'."Son adresse : " . $contenu['address']." ". $contenu['postal_code'] . '</h2></div>'
.'<div><h2>' ."Spécialisé en : ". $contenu['specialty'] . '</h2></div>'
.'<div><h2>'."Type de consultaion : " . $contenu['consultation_type'] . '</h2></div>'
.'<div><h2>'."Prix de consultation : " . $contenu['price']."€" . '</h2></div>'
. '<button><a href="prise_de_rdv.php?id='.$contenu['ID'] .'">Prendre rendez-vous</a></button>'
.'</div>';




include './composants/footer.php'; ?>