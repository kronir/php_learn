<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen > 10');

while ($donnees = $reponse->fetch())
{
echo $donnees['prix_moyen'] .' '.  $donnees['console'].'<br>';
}
$reponse->closeCursor();

?>