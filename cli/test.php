<?php 
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.txt';
file_put_contents($fichier, ' Bubs comment ça va ?', FILE_APPEND);

