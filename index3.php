<?php
    $search = readline("Entrez le nom d'une marque de voiture : ");
    
    // Nom du fichier à ouvrir
    $file = 'data.txt';   

    // Lit les lignes du fichier le tableau
    $lines = file($file);

    // Vérifie si le texte est présent dans le fichier
    $found = false;
    foreach ($lines as $line) {
        if (strpos($line, $search) !== false) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "La marque est présent dans le fichier.\n";
    } else {
        echo "La marque n'est pas présent dans le fichier.\n";
    }
?>



