<?php
session_start();

if(!isset($_POST['gomb'])){
    print("<form action='Bejelentkezes.php' method='post' ><br>");
    print("Felhasználónév: <input type='text' name='nev'><br>");
    print("Jelszó: <input type='password' name='jelszo'><br>");
    print("<input type='submit' name='gomb' value='Bejelentkezés'><br>");
    print("</form>");
}
else{

    require("kapcs.inc.php");

    $nev = $_POST['nev'];
    $jelszo = $_POST['jelszo'];
    
    $jelszo = md5($jelszo);

    $query = "SELECT * FROM vevo WHERE nev='$nev' AND jelszo='$jelszo'";
    $results = mysqli_query($con, $query);
    if(mysqli_num_rows($results) > 0)
    {
        $_SESSION['nev'] = $nev;
        
        print("<script>alert('Sikeres Belépés'); window.location.href = 'Register.php';</script>");

    }
    else
    {
        print("Nemjóóóóó");
    }
}

?>