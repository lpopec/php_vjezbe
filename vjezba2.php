<?php
/*PHP vježba 2*/

    $title = "Da Vincijev kod";
    $link = "https://hr.wikipedia.org/wiki/Da_Vincijev_kod";
    
    echo '  <!DOCTYPE html>
            <html lang="hr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="Free Web tutorials">
                <meta name="keywords" content="'; echo $title; echo '">
                <meta name="author" content="Lovro-Mijo Popec">
                <title>'; echo $title; echo '</title>
            </head>
            <body>
                <h1>'; echo $title; echo '</h1>
                <p>'; echo $title; echo ' je kriminalistički triler američkog pisca Dana Browna.</p>
                <a href="'; echo $link; echo '" target="_blank">'; echo $link; echo '</a>
            </body>
            <footer>
            </footer>
    ';
?>