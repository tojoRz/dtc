<?php
    $text = readline("entrer une texte : "); //readline() recupère le text et met dans le variable text 
    $file = 'test.txt';   
    
    file_put_contents($file, $text);

    
