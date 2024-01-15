<?php
// Requête de sélection
$requete = "SELECT nom_animateur FROM Animateurs";

// Exécuter la requête
$resultat = mysqli_query($connexion, $requete);

// Vérifier si la requête a réussi
if ($resultat) {
    // Parcourir les résultats
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "Nom de l'animateur : " . $row['nom_animateur'] . "<br>";
    }

    // Libérer le résultat
    mysqli_free_result($resultat);
} else {
    echo "Erreur lors de l'exécution de la requête : " . mysqli_error($connexion);
}
?>

<?php
// Fermer la connexion
mysqli_close($connexion);
?>
