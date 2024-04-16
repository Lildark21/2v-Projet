<?php
include 'data/db.php';
include 'composants/header.php';

?>

<?php
if(isset($_SESSION["Is_conected"]) && $_SESSION["Is_conected"]){
                
    $stmt = db()->prepare("SELECT * FROM psy WHERE ID = ?"); 
    $stmt->execute([ $_GET["id"] ]);
    $contenu = $stmt->fetch(PDO::FETCH_ASSOC);

echo '<form action="" method="post">'
.'<ul>'
  .'<li>'
    .'<label for="Indication">Pourquoi prenez vous ce rendez-vous&nbsp;:</label>'
    .'<input type="text" name="Indication" />'
  .'</li>'
  .'<li>'
    .'<label for="date">Date du rendez vous&nbsp;:</label>'
    .'<input type="datetime-local" name="date"/>'

  .'</li>'
  .'<li>'
      .'<button type="submit">Valider le rendez-vous</button>'
  .'</li>'
.'</ul>'
.'</form>';
    
if (isset($_POST["date"])and isset($_POST["Indication"])) {
    $today = new DateTime("tomorrow"); 
    $dateInput = new DateTime($_POST["date"]);
    $interval = $today->diff($dateInput)->format('%R%a');

    if ($interval >= 1) {
        $stmt = db()->prepare("INSERT INTO appointment (PSI_ID, USER_ID, Appointment_Date, Indication) VALUES (?, ?, ?, ?)");
        $stmt->execute([$_GET["id"], $_SESSION["id_user"], $_POST["date"], $_POST["Indication"]]);
        echo "Votre rendez-vous a été pris";
    } elseif ($interval <= 0) {
        echo "<p>La date n'est pas valide. Veuillez choisir une date future.</p>";
    }
}
}

?>
<?php

$stmb = db()->prepare("SELECT Appointment_Date FROM appointment WHERE Appointment_Date < CURDATE()");
$stmb->execute();
$result = $stmb->fetch(PDO::FETCH_ASSOC);
if(!empty($result["Appointment_Date"]) and !isset($result["Appointment_Date"])){
  $stmt = db()->prepare("DELETE FROM appointment WHERE Appointment_Date < CURDATE()");
  $stmt->execute();
  echo "Les rendez-vous passés ont été supprimés.";
}

?>

<?php include './composants/footer.php';?>