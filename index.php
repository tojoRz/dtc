<?php
    $marque = readline("Ajoutez une marque de voiture : "); //readline() recupère le text et met dans le variable text 
    $file = 'data.txt';   
    
    file_put_contents($file, $marque . PHP_EOL , FILE_APPEND);