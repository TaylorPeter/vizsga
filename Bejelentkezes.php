<?php
session_start();

if(!isset($_SESSION['gomb'])){
    print("<form action='belepes.php' method='session'><br>");
    print("Felhasználónév: <input type='text' name='nev2'><br>");
    print("Jelszó: <input type='password' name='jelszo2'");
    print("<input type='submit' name='gomb'><br>");
    print("</form>");
}
else{

    require("kapcs.inc.php");

    $nev2 = $_SESSION['nev2'];
    $jelszo2 = $_SESSION['jelszo2'];
}

?>