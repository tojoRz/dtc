<?php
    $num = readline("entrer une numéro : "); //readline() recupère le text et met dans le variable text 

    
    $file = 'data.txt';   

    $lines = file($file); 
    
    foreach ($lines as $line_num => $line) {
        if ($num==$line_num) {
            echo "Line {$line_num} : " . htmlspecialchars($line) . "\n";
        }     
    }
