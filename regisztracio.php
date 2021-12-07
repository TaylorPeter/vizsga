<?php
error_reporting(E_ERROR | E_PARSE);
if(!isset($_POST['gomb'])){
    print("<form action='regisztracio.php' method='post'><br>");
    print("Felhasználónév: <input type='text' name='nev2'><br>");
    print("E-mail cím: <input type='email' name='email2'><br>");
    print("Jelszó: <input type='password' name='jelszo2'><br>");
    print("Jelszó mégegyszer: <input type='password' name='jelszo3'><br>");
    print("<input type='submit' name='gomb' value='Regisztráció'><br>");
    
    print("</form>");

}
else{

    require("kapcs.inc.php");

    $nev2 = $_POST['nev2'];
    $email2 = $_POST['email2'];
    $jelszo2 = $_POST['jelszo2'];
    $jelszo3 = $_POST['jelszo3'];

    

    
    

    if($nev2 == NULL || $email2 == NULL || $jelszo2 == NULL)
    {
        print("Üres mező");
    }
    else
    {

        $sql = "SELECT * FROM vevo WHERE email='$email2' LIMIT 1";
        $result = mysqli_query($con, $sql);
        $felhasznalo = mysqli_fetch_assoc($result);
        if($felhasznalo){
            if($felhasznalo['email'] === $email2 )
            {
                print("<script>alert('Ezzel az email címmel már regisztráltak!'); window.location.href = 'regisztracio.php';</script>");
                
            }
        
        }
        else
        {
                $query = "INSERT INTO vevo (nev, email, jelszo) VALUES ('$nev2','$email2','$jelszo2')";
                mysqli_query($con,$query) or die ('Hiba az adatbevitelnél!');
                print("Sikeres regisztráció!");
                require("kuldo.php");
                print("<script>window.location.href = 'Bejelentkezes.php';</script>");
        }
    }
 

}   
    
    
    


?>