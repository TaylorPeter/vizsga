<?php
// $felh="teszt";
// $jelsz="12345";
// $ok=0;
//     if(isset($_POST["benev"])==$felh && $_POST["jelszo"]==$jel){
//         $_SESSION["neve"] = $felh;
//         $_SESSION["belepett"] = "ok";
//         $ok=1;
//     }




// $result = mysql_query("select * from where nev = '$felhasznalonev' and jelszo = '$jelszo'") or die("Nem sikerült az adatbázis lekérdezés".mysql_error());
// $row = mysql_fetch_array($result);
// if($row['felhasznalonev'] == $felhasznalonev && $row['jelszo'] == $jelszo){
//     echo"Bejelentkezés sikeresen megtörtént!!".$row['felhasznalonev'];
// }
// else
// {
//     echo "Nem sikerült a bejelentkezés.";
// }
error_reporting(E_ERROR | E_PARSE);
if(!isset($_POST['gomb'])){
    print("<form action='belepes.php' method='post'><br>");
    print("Felhasználónév: <input type='text' name='nev2'><br>");
    print("Jelszó: <input type='password' name='jelszo2'><br>");
    print("<input type='submit' name='gomb'><br>");
    print("<p> Nincs még fiókja? <a href='belepes.php'>Belépés</a></p>")
    ?>
        <p>
    Már van fiókja? <a href="belepes.php">Belépeés most</a></p>
    <?php
    print("</form>");

}
else{

    require("kapcs.inc.php");

    $nev2 = $_POST['nev2'];
    $email2 = $_POST['email2'];
    $jelszo2 = $_POST['jelszo2'];
    
    



    

        
    
    
    $result = "SELECT nev,jelszo FROM vevo WHERE nev2 = '$nev2' AND jelszo2 = '$jelszo2'";
 $row = mysql_fetch_array($result);
 if($row['nev2'] == $nev2 && $row['jelszo2'] == $jelszo2){
     echo"Bejelentkezés sikeresen megtörtént!!".$row['felhasznalonev'];
 }
 else
 {
     echo "Nem sikerült a bejelentkezés.";
 }
    mysqli_query($con,$result) or die ('Hiba az adatbevitelnél!');
    print("Sikeres Belépés!");
    require("kuldo.php");
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>