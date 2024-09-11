<?php
    // Fonction pour normaliser les chaînes (enlever les accents et convertir en minuscules)
    function normalizeString($str) {
        // Convertir en minuscules
        $str = strtolower($str);
        
        // Enlever les accents
        $str = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        
        // Enlever les caractères spéciaux (garde seulement lettres, chiffres et espaces)
        $str = preg_replace('/[^a-z0-9 ]/', '', $str);
        
        return $str;
    }

    // Récupère la marque à rechercher
    $search = readline("Entrez le nom d'une marque de voiture : ");

    $file = 'data.txt';   

    $lines = file($file, FILE_IGNORE_NEW_LINES);

    // Normaliser la marque à rechercher
    $searchNormalized = normalizeString($search);

    // Variable pour vérifier si des marques ont été trouvées
    $found = false;

    // Boucle à travers chaque ligne du fichier
    foreach ($lines as $line) {
        // Normaliser chaque ligne du fichier
        $lineNormalized = normalizeString($line);

        // Cherche la marque dans la ligne normalisée
        if (stripos($lineNormalized, $searchNormalized) !== false) {
            // Si trouvé, affiche la ligne originale
            echo "Marque trouvée : " . $line . "\n";
            $found = true;
        }
    }

    // Si aucune marque trouvée
    if (!$found) {
        echo "Aucune marque trouvée correspondant à '" . $search . "'.\n";
    }
?>
