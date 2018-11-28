<?php require "head.php"; ?>
<?php require "konekcija.php"; ?>


<?php


//echo $_SESSION['mjesec'];
$objekat = $_SESSION['apartman']; 
$soba = $_SESSION['soba']; 

 $mjesec = $_SESSION['mjesec']; 
 $godina = $_SESSION['godina'];


require "daniUmjesecu.php";


if(isset($_POST['submit'])){
for($i=1; $i<=$posljednjiDanUmjesecu; $i++){
    
    
    
    $smjestajQuery = "SELECT * FROM smjestaj WHERE (soba='$soba' AND mjesec='$mjesec' AND godina='$godina')";
    

     $result = mysqli_query($connection, $smjestajQuery);
              if (!$result){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>");
              }
    
     
    
    while ($row = mysqli_fetch_assoc($result)){
        $dostupnostDana = $row[$i];
//        echo $dostupnostDana;
    if($dostupnostDana == 1){
        $promjenaStatusa = 0; } else {
        $promjenaStatusa = 1;
    }
//         echo $promjenaStatusa;
    }
    
    if (isset($_POST["datum$i"])) {
       
    $promjenaQuery = "UPDATE `smjestaj` SET `$i` = '$promjenaStatusa' WHERE (soba='$soba' AND mjesec='$mjesec' AND godina='$godina')";
    
    $result = mysqli_query($connection, $promjenaQuery);
        
         if (!$result){
                  die("<h1>Greska, obratite se administratoru.</h1>".mysqli_error($connection));
              } 
    
    }
    
   
    
    
    if (isset($_POST["cijena$i"])) {
        
    $promjenaCijene = $_POST["cijena$i"];
    echo "$promjenaCijene..."; 
    echo "$i $soba $mjesec $godina...";    
        
    $promjenaQuery2 = "UPDATE `cijene` SET `$i` = '$promjenaCijene' WHERE (soba='$soba' AND mjesec='$mjesec' AND godina='$godina')";
    
    $result2 = mysqli_query($connection, $promjenaQuery2);
        
     if (!$result2){
                  die("<h1>Greska, obratite se administratoru.</h1>".mysqli_error($connection));
              }    
        
        
    }
    
   
    
    
    
    
    
    
}}


?>



<h1>Promjene uspješno izvršene.</h1>
<h1><a href='start.php'>ADMIN PANEL</a></h1>
<h1><a href='<?php echo $_SESSION["posljednjaPromjenjena"]; ?>'>POVRATAK NA IZMJENE</a></h1>