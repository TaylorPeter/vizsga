<?php
session_start();

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROGw</title>
    <link rel="stylesheet" href="VizsgaCSS.css">
</head>
<body>
    
    <div>   
        <ul>
            <li><a href="">Főoldal</a></li>
            <li><a href="">Legfrissebb</a></li>
            <li><a href="">Felkapott</a></li>
            <li><a href="">Kategória</a></li>
        <div class="legordulo" style="float:right;">
        <?php
        if(!isset($_SESSION['nev2']))
        {
            
            print("<button class='legordulogomb'>Belépés</button>");
            print("<div class='legordulo-content'>");
            print("<a href='Bejelentkezes.php'>Bejelentkezés</a>");
            print("<a href='regisztracio.php'>Regisztráció</a>");
            print("</div>");
        }
        else
        {
            
            print("<button class='legordulogomb'>".$_SESSION['nev2']."</button>");
            print("<div class='legordulo-content'>");
            print("<a href='#'>Profil</a>");
            print("<a href='#'>Egyenleg</a>");
            print("<a href='#'>Játékaid</a>");
            print("<a href='Kijelentkezes.php'>Kijelentkezés</a>");
            print("</div>");
        }
        ?>
        
        </div>

            
        </ul>
    </div>
        
        
    
</body>

</html>