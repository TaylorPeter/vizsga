<?php

require("kapcs.inc.php");
print("<link rel='stylesheet' href='vizsga/VizsgaCSS.css'>");



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

        print("<tr><td>".$rekord->nev. "</td><td>".$rekord->email. "</td><td>".$rekord->egyenleg. "</td><td>".$rekord->ev. "</td><td>".$rekord->admin. "</td><td>");if($rekord->admin == 0){print("<input type='checkbox' name='checkbox'></tr>");}else{print("</tr>");}
    
        

    
}
print("</table>");
print("<input type='submit' name='gomb' value='Kész'>");
print("</form>");
if(isset($_POST['gomb']))
        {
            $checkbox = $_POST['checkbox'];
            $query = "UPDATE vevo SET admin=1 WHERE nev =".$rekord->nev.";";
            mysqli_query($con,$query) or die ('Hiba az adatbevitelnél!');
        }
       
?>