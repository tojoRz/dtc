<?php
    $text = readline("entrer une texte : ");
    
    // Nom du fichier à ouvrir
    $file = 'test.txt';   

    // Lit les lignes du fichier le tableau
    $lines = file($file);

    // Vérifie si le texte est présent dans le fichier
    $found = false;
    foreach ($lines as $line) {
        if (strpos($line, $text) !== false) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "Le texte est présent dans le fichier.\n";
    } else {
        echo "Le texte n'est pas présent dans le fichier.\n";
    }
?>



