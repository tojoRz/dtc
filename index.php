<?php
    $personne = readline("entrer un nom : "); //readline() recupère le text et met dans le variable text 
    $file = 'data.txt';   
    
    file_put_contents($file, $personne . PHP_EOL , FILE_APPEND);