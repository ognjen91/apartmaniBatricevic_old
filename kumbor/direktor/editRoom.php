<?php require "head.php"; ?>

<div class="editRoom">



<?php  

$objekat = $_SESSION['apartman']; 
$soba = $_SESSION['soba']; 

if(isset($_GET['mjesec2018'])){
    $godina = 2018;
    $mjesec = $_GET['mjesec2018'];
}

if(isset($_GET['mjesec2019'])){
    $godina = 2019;
    $mjesec = $_GET['mjesec2019'];
}
    
    $_SESSION['mjesec'] = $mjesec; 
    $_SESSION['godina'] = $godina; 


?>

<h3><?php echo $objekat . " " . $soba; ?></h3>
<h4><?php echo $mjesec . ". " . $godina . ". "; ?></h4>


  <div class="kalendar">
            
<form action="sabmitFormeAdmin.php" method="post" id="forma1">

              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = '$objekat' AND soba='$soba' AND mjesec='$mjesec' AND godina='$godina')"; 
      ?>
            
             <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = '$objekat' AND soba='$soba' AND mjesec='$mjesec' AND godina='$godina')"; 
    
   
      ?>
            <?php require "konekcija.php"; ?>
            <?php require "kalendar-dostupnost.php" ?>
            
       <input name="submit" type="submit" value="Promjeni!" class="sabmitovanje">      
      </form>         
      </div>  

    
    
      <div class="kalendar">
            
<form action="sabmitFormeAdmin.php" method="post" id="forma2">

       <table>     

            <?php require "kalendar-cijene.php" ?>
           
        </table>    
         <input name="submit" type="submit" value="Promjeni!" class="sabmitovanje">    
      </form>         
      </div>  

</div>




<?php  $_SESSION["posljednjaPromjenjena"] =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    
    
    
    ?>













<?php require "footer.php"; ?>