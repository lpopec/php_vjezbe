<?php
    /*PHP vježba 1*/
    $naslov = "Moj prvi PHP dokument";
    $autor = "Lovro-Mijo Popec";

    echo '  <!DOCTYPE html>
            <html lang="hr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="Moj prvi PHP dokument">
                <meta name="keywords" content="Moj prvi PHP dokument">
                <meta name="author" content="Lovro-Mijo Popec">
                <title>Moj prvi PHP dokument</title>
            </head> 
            <body> ';
                echo "<h1>$naslov</h1>";
                echo "<p>Ovu stranicu izradio je $autor</p>";
                echo '<a href="https://github.com/lpopec/php_vjezbe/blob/main/vjezba1.php"target="_blank">Vježba 1 GITHUB</a>';
    echo '
            </body>
            <footer>
            </footer>
    ';
?>