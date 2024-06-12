<?php

// Connexion à la base de données
try {
    $dbh = new PDO('mysql:host=mybantko.azurewebsites.net;dbname=bantko', 'vhugo', 'P@ssw0rd77176');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// Récupération des données soumises par le formulaire
$nom_etudiant = $_POST['nom'];
$commentaire = $_POST['service'];
$note = $_POST['prénom'];

// Préparation de la requête SQL pour insérer les données dans la table "avis"
$sql = "INSERT INTO avis (nom, service, prénom) VALUES (:nom_etudiant, :commentaire, :note)";
$stmt = $dbh->prepare($sql);

// Exécution de la requête avec les données soumises par le formulaire
if ($stmt->execute(array(':nom_etudiant' => $nom_etudiant, ':commentaire' => $commentaire, ':note' => $note))) {
    // Affichage d'un message de réussite si l'ajout a été effectué
    echo "Votre avis a été ajouté avec succès !";
} else {
    // Affichage d'un message d'erreur si l'ajout a échoué
    echo "Une erreur est survenue lors de l'ajout de votre avis. Veuillez réessayer ultérieurement.";
}

// Fermeture de la connexion à la base de données
$dbh = null;

?>