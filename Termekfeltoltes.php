<?php

if(!isset($_POST['gomb'])){
    print("<form action='Termekfeltoltes.php' method='post'><br>");
    print("Játék neve: <input type='text' name='nev2'><br>");
    print("Ár: <input type='number' name='ar2'><br>");
    print("Kulcs: <input type='text' name='kulcs2'><br>");
    print("Mufaj: <input type='text' name='mufaj2'><br>");
    print("Leiras: <input type='text' name='leiras2'><br>");
    print("Kép: <input type='file' name='kep2'><input type='submit' name='kepfeltoltes' value='Kép feltöltés'><br>");
    print("<br><input type='submit' name='gomb' value='Rögzítés'><br>");
    
    print("</form>");

}
else{

    require("kapcs.inc.php");

    $nev2 = $_POST['nev2'];
    $ar2 = $_POST['ar2'];
    $kulcs2 = $_POST['kulcs2'];
    $mufaj2 = $_POST['mufaj2'];
    $leiras2 = $_POST['leiras2'];
    // $kep2 = $_POST['kep2'];

    

    
    


   
        
        
                $query = "INSERT INTO termek (nev, ar, Kulcs, Mufaj, lerias) VALUES ('$nev2','$ar2','$kulcs2','$mufaj2','$leiras2')";
                mysqli_query($con,$query) or die ('Hiba az adatbevitelnél!');
                print("Játék feltöltve!");
                
        
    }
 

  
    
    
    


?>