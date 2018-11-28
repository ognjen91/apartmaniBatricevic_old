<?php  

  if (!isset($_GET['lang'])){
       $opisnaTabelaNaJeziku = "opisi";
    } 
    if($_GET['lang'] == "en"){
         $opisnaTabelaNaJeziku = "opisieng";
        
    }
if($_GET['lang'] == "ru"){
         $opisnaTabelaNaJeziku = "opisiru";
        
    }




echo "<div class='okvir'>";
            
            $opisiQuery = "SELECT * FROM $opisnaTabelaNaJeziku WHERE objekat = 'Kumbor' AND soba = '$soba'";
            $opisiResult = mysqli_query($connection, $opisiQuery);
              if (!$opisiResult){
                  die("<h1>Greska u komunikaciji sa bazom - opisi! </h1>" . mysqli_error($connection));
              }
            
            while ($opisiRow = mysqli_fetch_assoc($opisiResult)){
                
                $soba = $opisiRow["soba"];
                $punoIme = $opisiRow["punoIme"];
                $brojLezaja = $opisiRow["brojLezaja"];
                $linkSlike = $opisiRow["linkSlike"];
                $opisTekst = $opisiRow["opis"];
                $pocetnaCijena = $opisiRow["pocetnaCijena"];
                $link = $opisiRow["link"];
                
                if ($punoIme) {
                    require "stampanjeOpisa.php";
                } else {
                    echo "<h1>Zao nam je, nemamo slobodnih soba za zadate parametre</h1>";
                }
                
            
        }
echo "</div>";
?>