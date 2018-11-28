<?php require "head.php"; ?>

<div class="okvir-promjene">



<?php
if(isset($_GET['submitKumbor']) || isset($_GET['submitBelvedere'])){

if(isset($_GET['submitKumbor'])){
    $objekat = "Kumbor";
    $soba = $_GET['kumborApartman'];
    
}

if(isset($_GET['submitBelvedere'])){
    $objekat = "Belvedere";
    $soba = $_GET['belvedereSoba'];
}

   

} else {
    die("Nisu odabrani parametri.");
}
    
     $_SESSION['apartman'] = $objekat;
     $_SESSION['soba'] = $soba;
//    echo $objekat;
//    echo $_SESSION['apartman'];
?>


<div class="izborMjeseca">

<h3>Izaberite mjesec</h3>

<form action="editRoom.php?objekat=<?php echo $objekat; ?>" method="get">
    

    <h5>2018</h5>
<input type="radio" name="mjesec2018" value="2"> 2
<input type="radio" name="mjesec2018" value="3"> 3
<input type="radio" name="mjesec2018" value="4"> 4
<input type="radio" name="mjesec2018" value="5"> 5
<input type="radio" name="mjesec2018" value="6"> 6
<input type="radio" name="mjesec2018" value="7"> 7
<input type="radio" name="mjesec2018" value="8"> 8
<input type="radio" name="mjesec2018" value="9"> 9
<input type="radio" name="mjesec2018" value="10"> 10
<input type="radio" name="mjesec2018" value="11"> 11
<input type="radio" name="mjesec2018" value="12"> 12
    
    <h5>2019</h5>
<input type="radio" name="mjesec2019" value="1"> 1
<br><br>
<input type="submit" name="submit" value="Nastavi" class="nastavak" />
</form>








</div>




</div>


<?php require "footer.php"; ?>