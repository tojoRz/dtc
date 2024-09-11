<?php
    $num = readline("Entrez le numéro de la ligne : "); //readline() recupère le text et met dans le variable text 

    
    $file = 'data.txt';   

    $lines = file($file); 
    
    foreach ($lines as $line_num => $line) {
        if ($num==$line_num) {
            echo "Ligne {$line_num} : " . htmlspecialchars($line) . "\n";
        }     
    }
