<?php
session_start();

if(!isset($_POST['gomb'])){
    print("<form action='Bejelentkezes.php' method='post' ><br>");
    print("Felhasználónév: <input type='text' name='nev2'><br>");
    print("Jelszó: <input type='password' name='jelszo2'><br>");
    print("<input type='submit' name='gomb' value='Bejelentkezés'><br>");
    print("</form>");
}
else{

    require("kapcs.inc.php");

    $nev2 = $_POST['nev2'];
    $jelszo2 = $_POST['jelszo2'];
    
    $jelszo = md5($jelszo2);

    $query = "SELECT * FROM vevo WHERE nev='$nev2' AND jelszo='$jelszo'";
    $results = mysqli_query($con, $query);
    if(mysqli_num_rows($results) > 0)
    {
        $_SESSION['nev2'] = $nev2;
        
        print("<script>alert('Sikeres Belépés'); window.location.href = 'Register.php';</script>");

    }
    else
    {
        print("Nemjóóóóó");
    }
}

?>