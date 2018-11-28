<!DOCTYPE html>

<html>
    
<head>
<title>APARTMANI BATRICEVIC</title> 
<link href="bootstrap.min.css?<?=filemtime("bootstrap.min.css")?>" rel="stylesheet" type="text/css" />
<script src="jquery-3.2.1.min.js"></script>
<link href="style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css" />

</head>
<body>


<?php
    
    $connection = mysqli_connect("localhost", "root", "", "rasko");
      if (!$connection) {
          die("<h1>Greska u povezivanju sa bazom!</h1>)");
      }
    
//      ----------------------OVO JE  QUERY KOJI SE MIJENJA ------------
      
     $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='Apartman2' AND mjesec='februar')";
        
              $result = mysqli_query($connection, $smjestajQuery);
              if (!$smjestajQuery){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>");
              }
      
        
       

    ?>


    
 
    
    
<!--    --------------PHP za admin formu--------------->
    
    <?php
    
    
   if(isset($_POST['submit'])){ 
    
     while ($row = mysqli_fetch_assoc($result)){
        
            
            $id = $row['id'];
            $id = (int)$id;
//            var_dump($id);
            $objekat = $row["objekat"];
            $soba = $row["soba"];
            $mjesec = $row['mjesec'];
            echo "<h4 class='mjesec'> $mjesec 2017</h4>";
            echo "<h4 class='mjesec'> $objekat</h4>";
            echo "<h4 class='mjesec'> $soba</h4>";
         
         for ($i=1; $i<=31; $i++){
             
          $dostupnost = $row["$i"];
     
     
      if ( isset($_POST["promjenaDostupnosti{$i}"])){
 
//          var_dump($dostupnost);
          

          
            
          

          
              if ($dostupnost == "1"){
                  $promjenaQuery = "UPDATE `smjestaj` SET `$i` = 0 WHERE id =$id";
          $result2 = mysqli_query($connection, $promjenaQuery);
          

              if (!$result2){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>".mysqli_error($connection));
              }
              }
          
          
          if ($dostupnost == "0"){
                  $promjenaQuery = "UPDATE `smjestaj` SET `$i` = 1 WHERE id =$id";
          $result2 = mysqli_query($connection, $promjenaQuery);
          

              if (!$result2){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>".mysqli_error($connection));
              }
              }
          
          
}


          
            
            
        }

     
     




 
 } 
   }
            
?>

    
       
    <div class="okvir okvir-admin">
    
     
     <h2>Promjena uspjesna! </h2>   
     
        
        
        </div>
    
    
    
    
    
    












<script src="jquery-3.2.1.min.js"></script>
<script src="http://localhost:8080/javascript.js"></script>
    </body>    
</html>