<?php

if(!isset($_POST['gomb'])){
    print("<form action='Termekfeltoltes.php' method='post'><br>");
    print("Játék neve: <input type='text' name='nev'><br>");
    print("Ár: <input type='number' name='ar'><br>");
    //print("Kulcs: <input type='text' name='kulcs'><br>");

    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
 $(document).ready(function() {
	 
     $("#gomb").on('click', function(){

             req.open("get", "general.php", true);
             req.send();
     });

     
     
 });
    var req = new XMLHttpRequest();
    req.onload = function(){
    $('#kod').val(this.responseText);
    };
    
    </script>
    <?php

    print("<form>");
    print("<input type='button' id='gomb' value='hello'>");
    print("</form>");
    print("<input type='text' id='kod'>");

    print("<label for='mufaj'>Műfajok: </label> ");
    print("<select id='mufaj'>");
    print("<option value='singleplayer'>Singleplayer</option>");
    print("<option value='mmorpg'>mmorpg</option>");
    print("<option value='multiplayer'>Multiplayer</option>");
    print("<option value='fps'>FPS</option>");
    print("</select><br>");

    //print("Leiras: <input type='textbox' name='leiras'><br>");
    print("Leírás:<br> <textarea name='leiras' rows='5' cols='50'></textarea><br>");
    print("Kép: <input type='file' name='kep' ><br>");
    print("<br><input type='submit' name='gomb' value='Rögzítés'><br>");
    
    print("</form>");

}
else
{

    require("kapcs.inc.php");

    $nev = $_POST['nev'];
    $ar = $_POST['ar'];
    $kulcs = $_POST['kulcs'];
    $mufaj = $_POST['mufaj'];
    $leiras = $_POST['leiras'];
    $kep = $_POST['kep'];

    
    $target_dir = "kepek/";
    $target_file = $target_dir . basename($_FILES["kep"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["kep"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["kep"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["kep"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["kep"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
    
    


   
        
        
                $query = "INSERT INTO termek (nev, ar, kulcs, mufaj, lerias, kep) VALUES ('$nev','$ar','$kulcs','$mufaj','$leiras','$kep')";
                mysqli_query($con,$query) or die ('Hiba az adatbevitelnél!');
                print("Játék feltöltve!");
                
        
    }
 

  
    
    
    


?>