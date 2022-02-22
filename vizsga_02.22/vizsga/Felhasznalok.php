<?php
session_start();
if(isset($_SESSION['nev'])){

    require("kapcs.inc.php");
    print("<link rel='stylesheet' href='vizsga/VizsgaCSS.css'>");
    $admin = mysqli_query($con,"SELECT admin FROM vevo WHERE nev ='".$_SESSION['nev']."'") or die;
    $rekord = mysqli_fetch_object($admin);

if($rekord->admin == 1){



$felhasznalo = mysqli_query($con,"SELECT * FROM vevo") or die ("Nem sikerült a lekérdezés!");

?>

<table>
    <tr>
        <th>Név</th>
        <th>Email</th>
        <th>Egyenleg</th>
        <th>Születési dátum</th>
        <th>Admin</th>
    </tr>
    <?php
    print("<form action='Felhasznalok.php' method='post'><br>");
while($rekord = mysqli_fetch_object($felhasznalo)){

        print("<tr><td>".$rekord->nev. "</td><td>".$rekord->email. "</td><td>".$rekord->egyenleg. "</td><td>".$rekord->ev. "</td><td>".$rekord->admin. "</td><td>");if($rekord->admin == 0){print("<input type='checkbox' name='".$rekord->vevoid."'></tr>");}else{print("</tr>");}
    
        

    
}
print("</table>");
print("<input type='submit' name='gomb' value='Kész'>");
print("</form>");
if(isset($_POST['gomb']))
        {
            $checkbox = $_POST["'".$rekord->vevoid."'"];
            $query = "UPDATE vevo SET admin=1 WHERE nev =".$rekord->nev.";";
            mysqli_query($con,$query) or die ('Hiba az adatbevitelnél!');
        }
    }
else{
print("Az oldal megynitásához admin jogosultság szükséges.");
    }
}
    else
    {
    print("Az oldal megynitásához admin jogosultság szükséges.");
    }  

?>