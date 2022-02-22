<?php
session_start();
if(!isset($_POST['gomb'])){
print("<form action='Egyenleg.php' method='post'><br>");
print("Összeg: <input type='number' name='egyenleg'>");
print("<br><input type='submit' name='gomb' value='Feltöltés'><br>");
print("</form>");

}
else
{
    require("kapcs.inc.php");

    $egyenleg = $_POST['egyenleg'];
    
    
    
    $eredmeny = $con->query($_SESSION['egyenleg']);
        while($row = $eredmeny->fetch_assoc())
                                {
                                 $_SESSION['egyenleg'] = $row['egyenleg'];
                                 $ossz = ($egyenleg + $_SESSION['egyenleg']);
                                }

                                

    $query = "UPDATE vevo SET egyenleg=$ossz WHERE nev ='".$_SESSION['nev']."';";
                mysqli_query($con,$query) or die ('Hiba az adatbevitelnél!');
                print("<script>alert('Sikeres feltöltés!'); window.location.href = 'Register.php';</script>");
}

?>