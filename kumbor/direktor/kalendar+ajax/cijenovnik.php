<?php

echo "<div class='iksic' id='iksic'>x</div>"; //iksic za zatvaranje kod mobilnih, mora biti na vrhu;

        $dan = $_POST['dan']; 
        $dan = intval ($dan);
        $mjesec = $_POST['mjesec']; 
        $mjesec = intval ($mjesec);
        $godina = $_POST['godina']; 
        $godina = intval ($godina);
        $objekat = $_POST['objekat'];
        $apartman = $_POST['apartman'];
        $posljednjiDanUmjesecu = 31; //ovo je default, mjenjam za dane sa 30 dana i za februar
     
   if ( $mjesec == 11 || $mjesec == 9) {  
    $posljednjiDanUmjesecu = 30;
 } 
     

  
//    ---ubac konekcije---
    include "konekcija.php";    
// odavde uvozim cijene ($cijena{$i})
    include "cijeneQuery.php";
// a odavde dostupnost ($dostupnost{$i})
   include "dostupnost.php";
// ukljucivanje sljedeceg mjeseca -sada kada sam ucitao broj ovog mjeseca
   include "sljedeciMjesec.php";
// ukljucivanje prethodnog mjeseca -sada kada sam ucitao broj ovog mjeseca
   include "prethodniMjesec.php";



//------KOD POCINJE DA SE IZVRSAVA NAKON PRIMANJA PODATAKA-----------
 if(isset($dan)){
     if ($dostupnost[$dan]==1){
     
     echo "<h4 class='pocetniDatum'>Starting date $dan.$mjesec. </h4>";
     
 
//         izracunavanje koliko ima slobodnih dana DO PRVOG ZAUZETOG u narednom mjesecu i pravljenje parcijalnih suma (od 1 do danaX, danX je svaki od slobodnih dana do prvog zauzetog)
     
   include "parcijalneSume.php";
     
  //GLAVNA PETLJA ZA AKTIVNI MJESEC u kojoj kupim sve potrebne podatke
     
        $brojDana = 1; //ovo ce biti brojac
        $cijenaAranzmana = 0;
        $daLiSuSlobodniDoKrajaMjeseca = [];
        $ponudaZa10 = [];
        $ponudaZa21 = [];
        $dioCijeneIzAktivnogMjeseca = 0;
        

         //provjeravam da li su slobodni svi dani do kraja mjeseca
         
        include "daLiSuSlobodniDoKraja.php";

        //brojac do prvog narednog zauzetog dana
     
        
        $brojacDoZauzetogUkupno = 0;
        $brojacDoZauzetogOvajMj = 0;
        $brojacDoZauzetogNextMj = 0;
        $danaDoKrajaMjeseca = $posljednjiDanUmjesecu - $dan +1 ; //

       $g = $dan;
       while ($dostupnost[$g] == 1){
           if ($brojacDoZauzetogUkupno == 9){
               break;
           }
           $brojacDoZauzetogOvajMj++;
           $brojacDoZauzetogUkupno =  $brojacDoZauzetogOvajMj + $brojacDoZauzetogNextMj;
           $g++;
           if ($g>$posljednjiDanUmjesecu){
               break;
           }
            
       }
//echo $brojacDoZauzetogOvajMj.":";
//echo $danaDoKrajaMjeseca;    
    
     //ako je isti broj dana do narednog zauzetog u mjesecu i broj dana do kraja mjeseca, znaci da treba uzeti u obzir i sljedeci mjsec
     if ($brojacDoZauzetogOvajMj == $danaDoKrajaMjeseca){
         $g = 1;
         while ($nextDostupnost[$g] == 1){
              if ($brojacDoZauzetogUkupno == 9){
                  
               break;
           }
             $brojacDoZauzetogNextMj++;
             $brojacDoZauzetogUkupno = $brojacDoZauzetogOvajMj + $brojacDoZauzetogNextMj;
             $g++;
              
         }
     }
     
//     echo $brojacDoZauzetogUkupno;
     
  
     
     
     
     
     
     
     
     
     
      //sada treba IZRADITI PONUDU za 10 i 21 dan
     
//    ovo je ponuda 10 i 21 za aranzmane kod kojih su svi dani iz istog mjeseca

     include "izradaPonudePrviKorak.php";
     
//  a  ovo je ponuda 10 i 21 za aranzmane kod kojih svi dani NISU iz istog mjeseca   
// echo $brojacDoZauzetogUkupno;
     
     include "izradaPonudeDrugiKorak.php";
     
     
        //sada kada imam broj slobodnih dana ukupno, mogu da odredim cijenu;
//     ovaj kod se nalazi upravo ovdje jer je prvo trebalo odrediti da li postoji ponuda za 10 dana, sto je potrebno za provjeru
    
       

   
    
     
//    ----------------STAMPANJE PONUDE--------
    
         
         if (array_key_exists ($dan, $ponudaZa10 )){
             echo "<p class='aranzman'>10 days for $ponudaZa10[$dan]  &#8364; </p>";
             if (array_key_exists ($dan, $ponudaZa21 )){
             echo "<p class='aranzman'>21 days for $ponudaZa21[$dan]  &#8364;</p>";
              }else{
                include "samo10iManje.php";}}
             else {
             include "ponudaZaKrace.php";
         }
          
         echo  "<p class='pozovite'>Contact us for more offers</p>";
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         



     
     
     
     
     }
     
     
     
     if ($dostupnost[$dan] == 0){
         echo "<p class='zauzeto'><b>Date is not available.</b> <br> Please select other date or  contact us for  more info.</p>";
         
     }
     
     

     

 



//----------------PROVJERA ZBIR-----------
    //     $zbir = 0;
//     for($x=12; $x<=30; $x++){
//         $zbir += $cijena[$x];
//     }
//     
//     echo "od 12". $zbir;


  
//    ---OSTALA PROVJERAVANA - echo, var_dump i sl---
    include "provjeravanje.php";

 

 }



 



?>