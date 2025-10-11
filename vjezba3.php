<?php
/*PHP vježba 3*/
    $title = "Da Vincijev kod";
    $link = "https://hr.wikipedia.org/wiki/Da_Vincijev_kod";
    
    echo '  <!DOCTYPE html>
            <html lang="hr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="Free Web tutorials">
                <meta name="keywords" content="'. $title .'">
                <meta name="author" content="Lovro-Mijo Popec">
                <title>'. $title .'</title>
            </head>
            <body>
                <h1>'. $title .'</h1>
                <p>'. $title .' je kriminalistički triler američkog pisca Dana Browna.</p>
                <a href="'. $link .'" target="_blank">'. $link .'</a>
            </body>
            <footer>
            </footer>
    ';
?>