<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=arduino;charset=utf8', 'root', 'admin');
}
catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$choix = $_POST['choix'];
$temps = $_POST['temps'];


// $reponse = $bdd->exec('INSERT INTO commande (admin_id, instruction, temps) VALUES (1,'.$choix.', '.$temps.')');


// $reponse = $bdd->query('SELECT * FROM commande');

// while ($donnees = $reponse->fetch())
// {
// 	echo $donnees['sensor'] . '<br />';
// }

// $reponse->closeCursor();

//Redirection automatique vers une page
header('Location: commandeTraitee.php');
exit();

?>