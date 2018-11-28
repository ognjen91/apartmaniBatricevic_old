<?php



if (isset($_GET['ad']) && isset($_GET['am']) && isset($_GET['ay']) && isset($_GET['dd']) && isset($_GET['dm']) && isset($_GET['dy'])) {
    $dolazniDan = $_GET["ad"];
    $dolazniMjesec = $_GET["am"];
    $dolaznaGodina = $_GET["ay"];
    $odlazniDan = $_GET["dd"];
    $odlazniMjesec = $_GET["dm"];
    $odlaznaGodina = $_GET["dy"];
    
    if ($dolazniMjesec == $odlazniMjesec && $dolaznaGodina == $odlaznaGodina) {
    require "kapacitetiIstiMjeseci.php";
} else {
      require "kapacitetiRazlicitiMjeseci.php";
    }
    
    
} else {
    
    if (!isset($_GET['lang'])){
       echo "<div class='okvir-greske'><div>
    <h2 class='greska-datumi'>Molimo izaberite validan datum</h2><br>
    
    <a href='http://www.apartmanibatricevic.com/kumbor'><h2 class='greska-datumi idi-nazad'>Nazad</h2></a></div>
</div>"; 
    } 
    if($_GET['lang'] == "en"){
         echo "<div class='okvir-greske'><div>
    <h2 class='greska-datumi'>Please select valid date</h2>
    <a href='http://www.apartmanibatricevic.com/kumbor?lang=en'><h2 class='greska-datumi idi-nazad'>Back</h2></a></div>
</div>";
        
    }
    if($_GET['lang'] == "ru"){
         echo "<div class='okvir-greske'><div>
    <h2 class='greska-datumi'>Oшибка!</h2>
    <a href='http://www.apartmanibatricevic.com/kumbor?lang=ru'><h2 class='greska-datumi idi-nazad'>Hазад</h2></a></div>
</div>";
        
    }

}



?>