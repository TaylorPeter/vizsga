<?php
session_start();
require("kapcs.inc.php");
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
    <?php
        
        
        
    ?>
    <div>   
        <ul>
            <li><a href="Register.php">Főoldal</a></li>
            <li><a href="">Legfrissebb</a></li>
            <li><a href="">Felkapott</a></li>
            <li><a href="">Kategória</a></li>
            
                                           

        <?php 
        if(!isset($_SESSION['nev']))
        {
            print("<div class='legordulo' style='float:right;'>");
            print("<button class='legordulogomb'>Belépés</button>");
            print("<div class='legordulo-content'>");
            print("<a href='Bejelentkezes.php'>Bejelentkezés</a>");
            print("<a href='regisztracio.php'>Regisztráció</a>");
            print("</div>");
        }
        else
        {
            $egyenleg = "SELECT egyenleg FROM vevo WHERE nev ='".$_SESSION['nev']."';";
            $_SESSION['egyenleg'] = $egyenleg;
            $admin = mysqli_query($con,"SELECT admin FROM vevo WHERE nev ='".$_SESSION['nev']."'") or die;
            $rekord = mysqli_fetch_object($admin);
            $profilkep = mysqli_query($con,"SELECT profilkepek FROM vevo ") or die ("Nem sikerült a lekérdezés!");
            $prekord = mysqli_fetch_object($profilkep);

            print("<li><a href='Egyenleg.php'>Egyenleged: "); $eredmeny = $con->query($egyenleg);
                                            while($row = $eredmeny->fetch_assoc())
                                            {
                                                echo $row['egyenleg'] , "Ft";
                                            } print("</a></li>");
            print("<div class='legordulo' style='float:right;'>");
            print("<button class='legordulogomb'>".$_SESSION['nev']." "."<img src='$prekord->profilkepek ' height='25px' width='25px'></button>");
            print("<div class='legordulo-content'>");
            print("<a href='Profil.php'>Profil</a>");
            print("<a href='Egyenleg.php'>Egyenleg</a>");
            print("<a href='#'>Játékaid</a>");
            print("<a href='teszt.php'>jatekok</a>");
            if($rekord->admin == 1){
                print("<a href='Felhasznalok.php'>Felhasználók</a>");
                print("<a href='Termekfeltoltes.php'>Termékfeltöltés</a>");
            }
            print("<a href='Kijelentkezes.php'>Kijelentkezés</a>");
            print("</div>");
        }
        ?>
        
        </div>

            
        </ul>
    </div>
        
        
    
</body>

</html>