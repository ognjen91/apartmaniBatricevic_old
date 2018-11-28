//console.log("ok je");


jQuery(document).ready(function ($) {

    
    //ciscenje praznih nodova
function clean(node)
{
  for(var n = 0; n < node.childNodes.length; n ++)
  {
    var child = node.childNodes[n];
    if
    (
      child.nodeType === 8 
      || 
      (child.nodeType === 3 && !/\S/.test(child.nodeValue))
    )
    {
      node.removeChild(child);
      n --;
    }
    else if(child.nodeType === 1)
    {
      clean(child);
    }
  }
}
    clean(document.body);
    
  
    //    ================USKLADJIVANJE VISINA HEADERA, NESTANAK TOP MENU-A KAD NIJE PRI VRHU ==========

    var $sirinaProzora = $(window).width();
    //    console.log("xp" + $sirinaProzora);



    var $visinaTopMenua = $(".menu-top-menu-container, .menu-top-menu-eng-container, .menu-top-menu-ru-container ").height();
    var $pocetnaVisinaHeadera = $("header").height();
    var $visinaHeaderaBezTopMenua = $pocetnaVisinaHeadera - $visinaTopMenua;
    var $visinaHeadera = $("header").css("height");


    if ($sirinaProzora < 768){
 
        //posto header ima position:fixed, narusen je flow elementa i sada namjestam da se uklopi pozicija headera i slajdera:
        $(".slider, .okvir, .apartmaniOkvir, .apartmaniOkvirOdabrano, .okvirDogadjanjaUgradu, .okvir-galerija, .oNamaStr-okvir,  .okvir-forme").eq(0).css('margin-top', $visinaHeadera);
        $(".shalt").eq(0).css('top', $visinaHeadera);
//        $(".ponudaLijevo, .ponudaDesno").eq(0).css('top', $visinaHeadera);
        
        
//        ----uskladjivanje menija ya promjenu sajta-----
        $(window).scroll(function(){
            var $skrolovanoOdVrha = $(window).scrollTop();
            if ($skrolovanoOdVrha !== 0) {
           $skrolVisinaHeadera = $("header").height();
           $(".shalt").eq(0).css('top', $skrolVisinaHeadera);
            } else {
                var $visinaTopMenua = $(".menu-top-menu-container, .menu-top-menu-eng-container").height();
    var $pocetnaVisinaHeadera = $("header").height();
    var $visinaHeaderaBezTopMenua = $pocetnaVisinaHeadera + $visinaTopMenua;
                $(".shalt").eq(0).css('top', $visinaHeaderaBezTopMenua);
            }
            
        });
       

                         
        var $skrolovanoOdVrha = $(window).scrollTop();

        function skrivanjeTopMenua() {
            if ($skrolovanoOdVrha == 0) {
                $(".menu-top-menu-container, .menu-top-menu-eng-container, .menu-top-menu-ru-container").css("display", "inherit");
                $("header").height($pocetnaVisinaHeadera);
                $(".logo").css("margin-top", "2.5%");
                $(".hamburger").css("margin-top", "3%");
            } else {
                $(".menu-top-menu-container, .menu-top-menu-eng-container, .menu-top-menu-ru-container").css("display", "none");
                $("header").height($visinaHeaderaBezTopMenua);
                $(".logo").css("margin-top", "3%");
                $(".hamburger").css("margin-top", "5%");
            }
        }
    }

    //        --------rotacija strelice kod saltanja sajtova-----
            
            $brojacKlikova = 0;
        function rotacijaStrelice(){
            $brojacKlikova++;
            if ($brojacKlikova % 2 !== 0){
                $("#izborna").css("-ms-transform", "rotate(-90deg)");
                $("#izborna").css("-webkit-transform", "rotate(-90deg)");
                $("#izborna").css("transform", "rotate(-90deg)");
            } else {
                $("#izborna").css("-ms-transform", "rotate(90deg)");
                $("#izborna").css("-webkit-transform", "rotate(90deg)");
                $("#izborna").css("transform", "rotate(90deg)");
            }
            
        }
        
        $("#izbornaSlicica").click(rotacijaStrelice);
    
    
    
if ($sirinaProzora < 768){
        skrivanjeTopMenua();
        $(window).scroll(function () {
            $skrolovanoOdVrha = $(this).scrollTop();
            //    console.log($skrolovanoOdVrha);
            skrivanjeTopMenua();
        });
    }


    if ($sirinaProzora >= 768) {
        
        $(".slider, .okvir, .apartmaniOkvir, .apartmaniOkvirOdabrano, .okvirDogadjanjaUgradu, .okvir-galerija, .oNamaStr-okvir,  .okvir-forme").eq(0).css('margin-top', $visinaHeadera);
//        $(".ponudaLijevo, .ponudaDesno").css("top", )
        $(window).scroll(function () {
            $(".slider, .okvir, .apartmaniOkvir, .apartmaniOkvirOdabrano, .okvirDogadjanjaUgradu, .okvir-galerija, .oNamaStr-okvir, .ponudaLijevo, .ponudaDesno, .okvir-forme").eq(0).css('margin-top', $visinaHeadera);
        });
           
    }

    //    -----------KRAJ USKLADJIVANJA VISINA--------------




    //    ================MOBILNI MENU ==========
    // da klikom na hamburger se pojavi mobili menu

    //    $(".hamburger").click
    if ($sirinaProzora < 768) {
        $sirinaEkrana = $("body").css("width");
        $pozicijaMenuLijevo = $(".menu-mobile-menu-container, .menu-mobile-menu-eng-container, .menu-mobile-menu-ru-container").css("left");
        //    console.log($pozicijaMenuLijevo);
        //    console.log($sirinaEkrana);

        function prikazMobMenua() {
            if ($pozicijaMenuLijevo == $sirinaEkrana) {
                $(".menu-mobile-menu-container, .menu-mobile-menu-eng-container, .menu-mobile-menu-ru-container").animate({
                    left: "20%"
                }, 500, function () {
                    $sirinaEkrana = $("body").css("width");
                    $pozicijaMenuLijevo = $(".menu-mobile-menu-container, .menu-mobile-menu-eng-container, .menu-mobile-menu-ru-container").css("left");

                });
            } else {
                $(".menu-mobile-menu-container, .menu-mobile-menu-eng-container, .menu-mobile-menu-ru-container").animate({
                    left: "100%"
                }, 500, function () {
                    $sirinaEkrana = $("body").css("width");
                    $pozicijaMenuLijevo = $(".menu-mobile-menu-container, .menu-mobile-menu-eng-container, .menu-mobile-menu-ru-container").css("left");

                });
            }
        }

        $(".hamburger").click(prikazMobMenua);

    }
    
    
    //    -----------KRAJ PRIKAZA MOB MENUA--------------


    //    ================USKLADJIVANJE POZICIJE MOB MENUA I HEADERA ==========
    // posto header mjenja visinu ako nije na vrhu, pozicija mob menua se mora prilagoditi


    if ($sirinaProzora < 768) {

        $topMenuVisina = $(".menu-top-menu-container, .menu-top-menu-eng-container, .menu-top-menu-ru-container").css("height");
        $zaUskladjivanje = '-' + $visinaTopMenua + "px";

        function uskladMenuHeader() {
            if ($skrolovanoOdVrha !== 0) {
                $(".menu-mobile-menu-container, .menu-mobile-menu-eng-container, .menu-mobile-menu-ru-container").css("margin-top", $zaUskladjivanje);
            } else {
                $(".menu-mobile-menu-container, .menu-mobile-menu-eng-container, .menu-mobile-menu-ru-container").css("margin-top", `0`);
            }
        }

        $(window).scroll(uskladMenuHeader);
    }

    //    -----------KRAJ USKLADJIVANJA HEADERA I MOB MENUA--------------

//    -----------------SISTEM ZA PREBAC NA SAJTOVE-------
    
    
    
    
    $("#izbornaSlicica").click(function(){
        $("#objIgo").fadeToggle("slow", "linear");
        
    })
    
    
    
    
    

    //   ======================================================================================================================= ================SISTEM PROVJERE DOSTUPNOSTI SOBE========== ========================================================================================================================

    
  
  
//    ------DATUMI, RAD NA KALENDARIMA-------------
    
    
    var $danasnjiDatum = new Date();
    $pocetniDanArr = $danasnjiDatum.getDate();
    $pocetniMjesecArr = $danasnjiDatum.getMonth(); //0 - samo mjeseci su 0 based
    $pocetnaGodinaArr = $danasnjiDatum.getFullYear();


    var $sutra = new Date();
    $sutra.setDate($danasnjiDatum.getDate());
    $pocetniDanDep = $sutra.getDate();
    $pocetniMjesecDep = $sutra.getMonth(); //0 - samo mjeseci su 0 based
    $pocetnaGodinaDep = $sutra.getFullYear();

    //ovo su varijable koje ce pri kliku na navigaciju kalendara mijenjati vrijednost

    $aktivniMjesecArr = $pocetniMjesecArr;
    $aktivnaGodinaArr = $pocetnaGodinaArr;
    $aktivniMjesecDep = $pocetniMjesecDep;
    $aktivnaGodinaDep = $pocetnaGodinaDep;

    //     console.log ('mjesec je ' + $aktivniMjesecArr + " godina je " + $aktivnaGodinaArr);

    //koliko ima dana u mjesecu - treba za izlistavanje mjeseca

    $(".arr-day").text($pocetniDanArr + " /");
    $(".arr-month, .trenutniMjesecArr").text($aktivniMjesecArr + 1);
    $(".arr-year, .trenutnaGodinaArr").text($aktivnaGodinaArr);
    $(".dep-day").text($pocetniDanDep + " /");
    $(".dep-month, .trenutniMjesecDep").text($pocetniMjesecDep + 1);
    $(".dep-year, .trenutnaGodinaDep").text($pocetnaGodinaDep);


    //KOLIKO JE DANA U MJESECU
    //0 kod dana predstavlja posljednji dan prethodnog mjeseca... mjesec nije zero based kao kod $aktivniMjesecArr, pa dodajem 1 na mjesec

    function danaUmjesecu(mjesec, godina) {
        return new Date(godina, mjesec + 1, 0).getDate();
    }

    //    console.log("dana u mjesecu:" + danaUmjesecu($aktivniMjesecArr, $aktivnaGodinaArr));


    //TREBA PROVJERITI koji je dan u sedmici pocetni dan u mjesecu i ostaviti slobodan prostor u kalendaru

    function prviDanUmjesecu() {
        $prviDan = new Date($aktivnaGodinaArr, $aktivniMjesecArr, 1).getDay();
        //        console.log("prvi dan je: " + $prviDan);
        return $prviDan;
    }


    $prviDanUmjesecu = prviDanUmjesecu();
    //   console.log("prvi dan u mjesecu:" + $prviDanUmjesecu );

    function izlistavanjePrazihDana() {
        $prviDanUmjesecu = prviDanUmjesecu();

        //         console.log("prvi dan u mjesecu " + $aktivniMjesecArr + " je stvarno: " + $prviDanUmjesecu);

        if ($prviDanUmjesecu == 0) {
            for ($i = 1; $i <= 6; $i++) {
                $(".kalendarArr-show").append("<div class='prazno'> . </div>");
            }
        } else {
            for ($i = 1; $i <= prviDanUmjesecu(); $i++) {
                if ($i !== 1) {
                    $(".kalendarArr-show").append("<div class='prazno'> . </div>");
                }

            }
        }

    }


    //ova zbrka jer je nedelja 0, ponedeljak 1...


    //okeeeeeeeee

    izlistavanjePrazihDana();

    //ideja je sada da datume izlistam u for petlji i da zatamnim dane koji su prosli
    function izlistavanjeDana() { //ovu fju cu i kasnije koristiti
        for ($i = 1; $i <= danaUmjesecu($aktivniMjesecArr, $aktivnaGodinaArr); $i++) {
            if ($i < $pocetniDanArr && $aktivniMjesecArr == $pocetniMjesecArr && $aktivnaGodinaArr == $pocetnaGodinaArr) {
                $(".kalendarArr-show").append("<div class='zatamnjeno'>" + $i + "</div>");
            } else {
                $(".kalendarArr-show").append("<div class='normalno'>" + $i + "</div>");
            }
        }
    }



    //PRI UCITAVANJU STRANICE UCITA SE ZA AKTIVNI MJESEC

    izlistavanjeDana();


    //dalji koraci:

    //1. da klikom na prethodniArr/naredniArr varijabile prime vrijednosti odgovarajuce godine ili mjeseca
    //2. da kada prime, izlistava se odgovarajuci mjesec

    function listajNaredniMjesec() {

        $aktivniMjesecArr++;
        if ($aktivniMjesecArr == 12) {
            $aktivniMjesecArr = 0;
            $aktivnaGodinaArr++;
        }
        $prviDanUmjesecu = prviDanUmjesecu();
        $(".trenutniMjesecArr").text($aktivniMjesecArr + 1);
        $(".trenutnaGodinaArr").text($aktivnaGodinaArr);

        //treba prvo obrisati sve iz .kalendarArr-show, pa izlistati prvo prazne dane, pa dane za novi mjesec

        $(".kalendarArr-show").html(" ");
        izlistavanjePrazihDana();
        izlistavanjeDana();
    }



    function listajPrethodniMjesec() {

        $aktivniMjesecArr--;
        if ($aktivniMjesecArr < 0) {
            $aktivniMjesecArr = 11;
            $aktivnaGodinaArr--;
        }
        $prviDanUmjesecu = prviDanUmjesecu();
        $(".trenutniMjesecArr").text($aktivniMjesecArr + 1);
        $(".trenutnaGodinaArr").text($aktivnaGodinaArr);

        //treba prvo obrisati sve iz .kalendarArr-show, pa izlistati prvo prazne dane, pa dane za novi mjesec

        $(".kalendarArr-show").html(" ");
        izlistavanjePrazihDana();
        izlistavanjeDana();
    }
    //          console.log ('mjesec ' + $aktivniMjesecArr + " godina " +  $aktivnaGodinaArr  );




    $(".prethodniArr").click(listajPrethodniMjesec);
    $(".naredniArr").click(listajNaredniMjesec);


    //kada se izabere datum na dolaznom kalendaru, da glavno polje pr, a da primi tu vrijednost, a da odlazno polje primi vrijednost dana iza.

    function uzmiDan() {
        $danDolaska = Number($(this).text());
        $mjesecDolaska = $aktivniMjesecArr;
        $godinaDolaska = $aktivnaGodinaArr;
        $datumDolaska = new Date($godinaDolaska, $mjesecDolaska, $danDolaska);
         
        $datumOdlaska1 = new Date();
        $datumOdlaska1.setDate($datumDolaska.getDate() + 1);
        $danOdlaska1 = $datumOdlaska1.getDate();
        $mjesecOdlaska1 = $datumOdlaska1.getMonth();
        $godinaOdlaska1 = $datumOdlaska1.getFullYear();

        $(".arr-day").text($danDolaska + " /");
        $(".arr-month").text($mjesecDolaska + 1);
        $(".arr-year").text($godinaDolaska);
        $(".dep-day").text($danOdlaska1 + " /");
        $(".dep-month").text($mjesecOdlaska1 + 1);
        $(".dep-year").text($godinaOdlaska1);

        $(".departure").css("pointer-events", "inherit");

        //oznaceno polje treba da se zatamni, a ostala polja da budu bijela
        $(".normalno").css("background-color", "rgba(90, 167, 33, 0.74)");
        $(".normalno").css("color", "black");
        $(this).css("background-color", "#007ACC");
        $(this).css("color", "#fff");



        //konacno, zatvara se polje kalendara
        $(".kalendar-arr").css("display", "none");
        $(".arrival").css("display", "initial");
        $(".departure").css("display", "initial");
        $(".checkMe").css("display", "initial");
        
    }

    $(document).on("click", "div.normalno", uzmiDan);


    
    //zatvaranje klikom na x
    
    $(".closeMe").click(function(){
        $(this).parent().css("display", "none");
        $(".arrival").css("display", "initial");
        $(".checkMe").css("display", "initial");
        $(".departure").css("display", "initial");
    })

    //    -----------DIO ZA ODLAZNI KALENDAR




    //varijable koje sam napisao gore a koje se odnose na dep su $aktivniMjesecDep i $aktivnaGodinaDep





    //KOLIKO JE DANA U MJESECU
    //0 kod dana predstavlja posljednji dan prethodnog mjeseca... mjesec nije zero based kao kod $aktivniMjesecArr, pa dodajem 1 na mjesec

    //     function danaUmjesecu(mjesec,godina) {
    //    return new Date(godina, mjesec+1, 0).getDate();
    //}  

    //    console.log("dana u mjesecu:" + danaUmjesecu($aktivniMjesecArr, $aktivnaGodinaArr));


    //TREBA PROVJERITI koji je dan u sedmici pocetni dan u mjesecu i ostaviti slobodan prostor u kalendaru

    function prviDanUmjesecuDep() {
        $prviDanDep = new Date($aktivnaGodinaDep, $aktivniMjesecDep, 1).getDay();
        //        console.log("prvi dan je: " + $prviDan);
        return $prviDanDep;
    }


    $prviDanUmjesecuDep = prviDanUmjesecuDep();


    function izlistavanjePrazihDanaDep() {
        $prviDanUmjesecuDep = prviDanUmjesecuDep();

        //         console.log("prvi dan u mjesecu " + $aktivniMjesecArr + " je stvarno: " + $prviDanUmjesecu);

        if ($prviDanUmjesecuDep == 0) {
            for ($i = 1; $i <= 6; $i++) {
                $(".kalendarDep-show").append("<div class='prazno'> . </div>");
            }
        } else {
            for ($i = 1; $i <= prviDanUmjesecuDep(); $i++) {
                if ($i !== 1) {
                    $(".kalendarDep-show").append("<div class='prazno'> . </div>");
                }

            }
        }

    }


    //ova zbrka jer je nedelja 0, ponedeljak 1...


    //okeeeeeeeee

    izlistavanjePrazihDanaDep();

    //ideja je sada da datume izlistam u for petlji i da zatamnim dane koji su prosli
    function izlistavanjeDanaDep() { //ovu fju cu i kasnije koristiti
        for ($i = 1; $i <= danaUmjesecu($aktivniMjesecDep, $aktivnaGodinaDep); $i++) {
            if ($i < $pocetniDanDep && $aktivniMjesecDep == $pocetniMjesecDep && $aktivnaGodinaDep == $pocetnaGodinaDep) {
                $(".kalendarDep-show").append("<div class='zatamnjeno'>" + $i + "</div>");
            } else {
                $(".kalendarDep-show").append("<div class='normalnoDep'>" + $i + "</div>");
            }
        }
    }



    //PRI UCITAVANJU STRANICE UCITA SE ZA AKTIVNI MJESEC

    izlistavanjeDanaDep();


    //dalji koraci:

    //1. da klikom na prethodniArr/naredniArr varijabile prime vrijednosti odgovarajuce godine ili mjeseca
    //2. da kada prime, izlistava se odgovarajuci mjesec

    function listajNaredniMjesecDep() {

        $aktivniMjesecDep++;
        if ($aktivniMjesecDep == 12) {
            $aktivniMjesecDep = 0;
            $aktivnaGodinaDep++;
        }
        console.log($aktivniMjesecDep);
        $prviDanUmjesecuDep = prviDanUmjesecuDep();
        $(".trenutniMjesecDep").text($aktivniMjesecDep + 1);
        $(".trenutnaGodinaDep").text($aktivnaGodinaDep);

        //treba prvo obrisati sve iz .kalendarArr-show, pa izlistati prvo prazne dane, pa dane za novi mjesec

        $(".kalendarDep-show").html(" ");
        izlistavanjePrazihDanaDep();
        izlistavanjeDanaDep();
    }



    function listajPrethodniMjesecDep() {

        $aktivniMjesecDep--;
        if ($aktivniMjesecDep < 0) {
            $aktivniMjesecDep = 11;
            $aktivnaGodinaDep--;
        }
        $prviDanUmjesecu = prviDanUmjesecu();
        $(".trenutniMjesecDep").text($aktivniMjesecDep + 1);
        $(".trenutnaGodinaDep").text($aktivnaGodinaDep);

        //treba prvo obrisati sve iz .kalendarArr-show, pa izlistati prvo prazne dane, pa dane za novi mjesec

        $(".kalendarDep-show").html(" ");
        izlistavanjePrazihDanaDep();
        izlistavanjeDanaDep();
        
    
    }
    //          console.log ('mjesec ' + $aktivniMjesecArr + " godina " +  $aktivnaGodinaArr  );




    $(".prethodniDep").click(listajPrethodniMjesecDep);
    $(".naredniDep").click(listajNaredniMjesecDep);


    //kada se izabere datum na dolaznom kalendaru, da glavno polje pr, a da primi tu vrijednost, a da odlazno polje primi vrijednost dana iza.

    function uzmiDanDep() {

        $danOdlaska2 = parseInt($(this).text());
        $mjesecOdlaska2 = $aktivniMjesecDep;
        $godinaOdlaska2 = $aktivnaGodinaDep;

        $(".dep-day").text($danOdlaska2 + " /");
        $(".dep-month").text($mjesecOdlaska2 + 1);
        $(".dep-year").text($godinaOdlaska2);

        $(".departure").css("pointer-events", "inherit");

        //oznaceno polje treba da se zatamni, a ostala polja da budu bijela
        $(".normalnoDep").css("background-color", "rgba(90, 167, 33, 0.74)");
        $(".normalnoDep").css("color", "black");
        $(this).css("background-color", "#007ACC");
        $(this).css("color", "#fff");

        //konacno, zatvara se polje kalendara
        $(".kalendar-dep").css("display", "none");
        $(".arrival").css("display", "initial");
        $(".checkMe").css("display", "initial");
        $(".departure").css("display", "initial");
    }

    $(document).on("click", "div.normalnoDep", uzmiDanDep);









    //4. AKO JE KALENDAR NA PRVOJ STRANI, ne treba da se prikaze dugme za navigaciju na prethodni mjesec

    function vidljivostNavigacijeArr() {
        if ($aktivniMjesecArr == $pocetniMjesecArr && $aktivnaGodinaArr == $pocetnaGodinaArr) {
            $('.prethodniArr').css("visibility", "hidden");
        } else {
            $('.prethodniArr').css("visibility", "inherit");
        }
    }

    vidljivostNavigacijeArr();
    $(".prethodniArr, .naredniArr").click(vidljivostNavigacijeArr);

    function vidljivostNavigacijeDep() {
        if ($aktivniMjesecDep == $pocetniMjesecDep && $aktivnaGodinaDep == $pocetnaGodinaDep) {
            $('.prethodniDep').css("visibility", "hidden");
        } else {
            $('.prethodniDep').css("visibility", "inherit");
        }
    }

    vidljivostNavigacijeDep();
    $(".prethodniDep, .naredniDep").click(vidljivostNavigacijeDep);


    //5. NA KRAJU, KADA SU DATUMI ODABRANI, redirektuje se na stranicu za provjeru kapaciteta


    function proceed() {
        $konacnoDolazniDan = parseInt($(".arr-day").text());
        $konacnoDolazniMjesec = parseInt($(".arr-month").text());
        $konacnoDolaznaGodina = parseInt($(".arr-year").text());
        $konacnoOdlazniDan = parseInt($(".dep-day").text());
        $konacnoOdlazniMjesec = parseInt($(".dep-month").text());
        $konacnoOdlaznaGodina = parseInt($(".dep-year").text());

        $konacnoDatumDolaska = new Date($konacnoDolaznaGodina, $konacnoDolazniMjesec - 1, $konacnoDolazniDan + 1);
        $konacnoDatumOdlaska = new Date($konacnoOdlaznaGodina, $konacnoOdlazniMjesec - 1, $konacnoOdlazniDan + 1);
                console.log($konacnoDatumDolaska);
                console.log($konacnoDatumOdlaska);

        var url  = window.location.href; 
        $stringJezika = "";
        if(url.indexOf("lang=en") !== -1){
            $stringJezika = "&lang=en";}
        if(url.indexOf("lang=ru") !== -1){
            $stringJezika = "&lang=ru";}
//        console.log($stringJezika);
        
        if ($konacnoDatumDolaska <= $konacnoDatumOdlaska) {
            var $adresaZaProvjeru = "kapaciteti?ad=" + $konacnoDolazniDan + "&am=" + $konacnoDolazniMjesec + "&ay=" + $konacnoDolaznaGodina + "&dd=" + $konacnoOdlazniDan + "&dm=" + $konacnoOdlazniMjesec + "&dy=" + $konacnoOdlaznaGodina + $stringJezika;
//            console.log($adresaZaProvjeru);
            
            window.location.href = $adresaZaProvjeru;
        } else {
           
            window.location.href = "kapaciteti"; //na toj stranici ce prikazati gresku jer nece iz url-a get-om biti moguce uzeti podatke
        }

    }
    $(".checkMe").click(proceed);


    //    klikom bilo gdje sem na kalendar, otvoren kalendar se zatvara







    //    -----------KRAJ SISTEMA PROVJERE DOSTUPNOSTI SOBE--------------


    //   ================SMJESTANJE KALENDARA========== 

    //     $polozajVrhaPoljaDatuma2 = $(".kalend-sl").eq(0).scrollTop().top;
    //    console.log( $polozajVrhaPoljaDatuma2);
console.log("arrival" + $(".arrival").length);
    var url = window.location.href;
    if ($(".arrival").length == 1) {

//        $polozajVrhaPoljaDatuma = $("#kalend-sl").offset().top;
        $polozajVrhaPoljaDatuma = $(".arrival").offset().top;
        
        console.log( $polozajVrhaPoljaDatuma );

        $polozajKalendara = $polozajVrhaPoljaDatuma + "px";
        //  console.log("evo ga " + $polozajKalendara);

//        $(".kalendar-arr").css("top", $polozajKalendara);
//        $(".kalendar-dep").css("top", $polozajKalendara);

        $(".arrival").click(function () {
            $(".arrival").css("display", "none");
            $(".checkMe").css("display", "none");
            $(".kalendar-arr").fadeIn(500, function(){
            $(".kalendar-arr").css("display", "block");
            $(".kalendar-dep").css("display", "none");
            
            })
            
           
        });

        $(".departure").click(function () {
            $(".departure").css("display", "none");
            $(".checkMe").css("display", "none");
            $(".kalendar-dep").fadeIn(500, function(){
            $(".kalendar-dep").css("display", "block");
            $(".kalendar-arr").css("display", "none");
            })
//            $(".kalendar-dep").css("top", $polozajKalendara);
        })

    }


    //    -----------KRAJ SMJESTANJA KALENDARA--------------


    //   ================SLAJDER SA UTISCIMA========== 

    $utisci = $(".utisci").eq(0);
    $pomjeraj = 0;
    $aktivniKruzic = 0;

    function pomjeriSlajder() {
        $aktivniKruzic++;
        if ($aktivniKruzic == 3) {
            $aktivniKruzic = 0;
        }
        $pomjeraj -= 100;
        if ($pomjeraj <= -300) {
            $pomjeraj = 0;
        }
        $pomjerajPx = $pomjeraj + "%";
        $(".kruzic").removeClass("aktivno");
        $(".kruzic").eq($aktivniKruzic).addClass("aktivno");

        $utisci.animate({

            marginLeft: $pomjerajPx

        }, 500);
    }

    $animacijaUtisci = setInterval(pomjeriSlajder, 4000);


    //klik na kruzice

    $(".kruzic").click(function () {
        $index = $(this).index();
        $(".kruzic").removeClass("aktivno");
        $(".kruzic").eq($index).addClass("aktivno");
        $potrebnaMargina = $index * -100;
        $potrebnaMarginaPx = $potrebnaMargina + "%";

        $utisci.animate({

            marginLeft: $potrebnaMarginaPx

        }, 500);

        clearInterval($animacijaUtisci);
        $animacijaUtisci = setInterval(pomjeriSlajder, 4000);

    })


    //    -----------KRAJ SLAJDERA SA UTISICMA--------------


    //   ================TIMER ZA DOGADJANJA========== 


    $vrijemeDogadjaja = new Date("2018, 5, 1, 21:00:00").getTime();

    function odbrojavanje() {
        $vrijemeSada = new Date().getTime();
        $razlika = $vrijemeDogadjaja - $vrijemeSada;

        $dani = Math.floor($razlika / (1000 * 60 * 60 * 24));
        $dani =  ("0" + $dani).slice(-2);
        $sati = Math.floor(($razlika % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        $sati =  ("0" + $sati).slice(-2);
        $minuti = Math.floor(($razlika % (1000 * 60 * 60)) / (1000 * 60));
        $minuti =  ("0" + $minuti).slice(-2);
        $sekunde = Math.floor($razlika % (1000 * 60) / 1000);
        $sekunde =  ("0" + $sekunde).slice(-2);

        $("#dani").html("<p><span class='vrijeme'>" + $dani + "</span><br> dana</p>");
        $("#sati").html("<p><span class='vrijeme'>" + $sati + "</span><br> sati</p>");
        $("#minuti").html("<p><span class='vrijeme'>" + $minuti + "</span><br> minuta</p>");
        $("#sekunde").html("<p><span class='vrijeme'>" + $sekunde + "</span><br> sekundi</p>");


        //            console.log($dani + " " + $sati + " " + $minuti + " " + $sekundi + " " );
    }

    $odbroj = setInterval(odbrojavanje, 1000);


    //ovaj kod koristim i za stranicu dogadjanja

    function odbrojavanjeNaStranici() {
        $("#odbDan").html("<p><span class='odbvrijeme'>" + $dani + "</span> <br>dana</p>");
        $("#odbSat").html("<p><span class='odbvrijeme'>" + $sati + "</span> <br>sati</p>");
        $("#odbMin").html("<p><span class='odbvrijeme'>" + $minuti + "</span><br> minuta</p>");
        $("#odbSek").html("<p><span class='odbvrijeme'>" + $sekunde + "</span><br> sekundi</p>");
    }

    $odbrojavanjeNaStranici = setInterval(odbrojavanjeNaStranici, 1000);


    //efekat da se boje okrecu kao sat

    function fja1() {
        $("#odbSat").css("color", "#fff");
        $("#odbSek").css("color", "#fff");
        $("#odbMin").css("color", "#fff");
        $("#odbMin>p").css("border-color", "#E7C130");
        $("#odbDan").css("color", "#344a71");
        $("#odbDan>p").css("border-color", "#344a71");
        
    }

    function fja2() {
        $("#odbSat").css("color", "#344a71");
        $("#odbSat>p").css("border-color", "#344a71");
        $("#odbSek").css("color", "#fff");
        $("#odbMin").css("color", "#fff");
        $("#odbDan").css("color", "#fff");
        $("#odbDan>p").css("border-color", "#E7C130");
    }

    function fja3() {
        $("#odbSat").css("color", "#fff");
        $("#odbSat>p").css("border-color", "#E7C130");
        $("#odbSek").css("color", "#344a71");
        $("#odbSek>p").css("border-color", "#344a71");
        $("#odbMin").css("color", "#fff");
        $("#odbDan").css("color", "#fff");
    }

    function fja4() {
        $("#odbSat").css("color", "#fff");
        $("#odbSek").css("color", "#fff");
        $("#odbSek>p").css("border-color", "#E7C130");
        $("#odbMin").css("color", "#344a71");
        $("#odbMin>p").css("border-color", "#344a71");
        $("#odbDan").css("color", "#fff");
    }

    function kaoSat() {
        $petnaestMin = setInterval(fja1(), 4000);
        setTimeout(function () {
            setInterval(fja2(), 4000);
        }, 1000);

        setTimeout(function () {
            setInterval(fja3(), 4000);
        }, 2000);

        setTimeout(function () {
            setInterval(fja4(), 4000);
        }, 3000);
    }

    kaoSat();
    setInterval(kaoSat, 4000);


    //    -----------KRAJ TIMERA--------------


    //   ================KALENDAR (+AJAX)========== 

    var dan;
    var mjesec;
    var godina;
    var objekat;
    var apartman;
    var novaPozicijaX;
    var novaPozicijaY;
    var polaSirinePolja;
    var polaVisinePolja;

    function prikaziInfo() {
        $(".datum-info").css("display", "block");

    }

    function sakrijInfo() {
        $(".datum-info").css("display", "none");
    }


    if (window.innerWidth > 992) {
//        $(".dostupnost1, .dostupnost0").hover(prikaziInfo, sakrijInfo);
    } else {
//        $(".dostupnost1, .dostupnost0").click(prikaziInfo);

//        $(document).on("click", "div.iksic", sakrijInfo);
    }




    //    ---kada pointer udje u prostor polja datuma, saljem podatke php skriptama


    $(".dostupnost1, .dostupnost0").mouseenter(function () {

        //    console.log($(this).offset().top);
        //    console.log($(this).offset().left);

        polaSirinePolja = $(this).width() / 2;
        polaVisinePolja = $(this).height() / 2;
        novaPozicijaY = $(this).offset().top + polaVisinePolja;
        novaPozicijaX = $(this).offset().left + polaSirinePolja;

        $("#datum-info").css("top", `${novaPozicijaY}px`);
        $("#datum-info").css("left", `${novaPozicijaX}px`);
        dan = $(this).text();
        mjesec = $(this).parent().find("#mjesec").text();
        objekat = $(this).parent().find("#objekat").text();
        godina = $(this).parent().find("#godina").text();
        apartman = $(this).parent().find("#apartman").text();

        //      console.log(dan);       
        //      console.log(mjesec);  
        //      console.log(godina);  
        //      console.log(objekat);  
        //      console.log(apartman);  



    });




    $(".dostupnost1, .dostupnost0").mouseenter(function () {


        $.ajax({
            //            'cijenovnik.php',
            type: 'POST',
            dataType: "html",
            url: ajax_object.ajax_url,

            data: {
                action: 'poziv_cijenovnika',
                dan: dan,
                mjesec: mjesec,
                godina: godina,
                objekat: objekat,
                apartman: apartman
            },
            success: function (data) {

                $("#datum-info").html(data);

            }
        })
    });

    function sakrijInfo() {
        $(".datum-info").css("display", "none");
    }
    $('#iksic').click(sakrijInfo);
    //            console.log("ajdeeeeeeeeeeee");



    // ------------kraj slanja podataka----

    //------------NAVIGACIJA KVARTALA (isto kod kalendara)--- 




    function listajNaredniKvartal() {
        $marginaKvartala = 100;
        $kvartal = $(this).parent().parent();
        $okvirKvartala = $(this).parent().parent().parent();
        $indexKvartala = $kvartal.index();
//        console.log($indexKvartala);
        $indexNarednogKvartala = $indexKvartala + 1;
        $marginaKvartala = $marginaKvartala * $indexNarednogKvartala;
        $marginaKvartala = "-" + $marginaKvartala + "%";
        $okvirKvartala.animate({
            marginLeft: $marginaKvartala
        }, 100, function () {
            $marginaKvartala = 100;
            console.log($marginaKvartala);


        });
    }

    function listajPrethodniKvartal() {
        $marginaKvartala = 100;
        $kvartal = $(this).parent().parent();
        $okvirKvartala = $(this).parent().parent().parent();

        $indexKvartala = $kvartal.index();
//        console.log($indexKvartala);
        $indexPrethodnogKvartala = $indexKvartala - 1;
        $marginaKvartala = $marginaKvartala * $indexPrethodnogKvartala;
        $marginaKvartala = "-" + $marginaKvartala + "%";
        $okvirKvartala.animate({
            marginLeft: $marginaKvartala
        }, 100, function () {
            $marginaKvartala = 100;
//            console.log($marginaKvartala);
        });
    }

    $(".prethodniKvartal").click(listajPrethodniKvartal);
    $(".naredniKvartal").click(listajNaredniKvartal);
    $(document).on("click", "div.prethodniKvartal", listajPrethodniKvartal);
    $(document).on("click", "div.narednjiKvartal", listajNaredniKvartal);


    //    -----------KRAJ KALENDAR + AJAX--------------





    //   ================-------------------------------------------------------------------------SLIKE (SLAJDOVI)- STRANICA APARTMANI-------------------------------========== 


    $malaSlika = $(".malaSlika");
    $velikaSlika = $("#velikaSlika");
    $margina = 100;

    function prikaziSliku() {
        
        $indexSlike = $(this).index();
        $margina = $margina * $indexSlike;
        $marginaSaJedinicama = "-" + $margina + "%";
        $(".velikeSlikeOkvir").animate({
            marginLeft: $marginaSaJedinicama
        }, 500, function () {
            $margina = 100;

        });
    }

    $malaSlika.click(prikaziSliku);

    //    $(".velikaSlika").css("width", $sirinaEkrana);

    //    -----------KRAJ SLIKE (SLAJDOVI)- STRANICA APARTMANI--------------

    //------------KARAKTERISTIKE APARTMANA - STRANICA APARTMANI apartmaniOdabrano.php---    

    //prvo treba uskladiti visine.

    $visinaOpisa = $(".tekstOpisa").css("height");
    $(".pogodnosti").css("height", $visinaOpisa);
    $(".pogodnosti").css("display", 'flex');
    $(".pogodnosti").css("align-items", 'center');


    //sta se prikazuje - opis ili nabrajanje
    $obaIzbora = $(".obaIzbora");


    function promjenaDonjeGranice() {
        $obaIzbora.css("border-bottom", "none");
        $(this).css("border-bottom", "2px solid #344A71");

    }

    //programiranje samog prikaza opisa i nabrajanja

    function prikaziOpis() {
        $(".opisiIpogodnosti").animate({
            marginLeft: "0%"
        }, 200, function () {
            //callback fja
        });
    }


    function prikaziPogodnosti() {
        $(".opisiIpogodnosti").animate({
            marginLeft: "-100%"
        }, 200, function () {
            //callback fja
        });
    }


    $obaIzbora.click(promjenaDonjeGranice);
    $(".izaberiRijecima").click(prikaziOpis);
    $(".izaberiTaksativno").click(prikaziPogodnosti);


    //    -----------KRAJ KARAKTERISTIKE APARTMANA - STRANICA APARTMANI --------------

    //------------stranica AKTUELNO (dogadjajaUgradu.php)--- 
    
    console.log("okvir dog" + $(".okvirDogadjanjaUgradu").length)
    //uskladjivanje visine...
     if ($(".okvirDogadjanjaUgradu").length == 1){
    console.log($(".okvirDogadjanjaUgradu").height());
//    console.log($("#ajde").offset().top);
    
    
    $(".okvirDogadjanjaUgradu").height($("#ajde").offset().top * 1.05);
    
    
}
    
    
    

    $(".idiNaViseOdogadjaju").click(function () {
        $('html, body').animate({
            scrollTop: $("#oDogadjajuDiv").offset().top
        }, 1500);
    });
    
    //efekti prozorcica koji poziva na klik za prikaz ponude
    function clickMeLight1(){
        $(".clickMe1").css("color", "#344a71");
        $(".clickMe2").css("color", "#E7C130");
    }
    
    function clickMeLight2(){
        $(".clickMe1").css("color", "#E7C130");
        $(".clickMe2").css("color", "#344a71");
    }
    
    function clickMeDel(){
        setInterval(clickMeLight2, 2000);
    }
    
    setInterval(clickMeLight1, 2000);
    setTimeout(clickMeDel, 1000);
    
    
    //izlazak prozorcica sa ponudom
    
    $pomocnaZaPonudu = 0;
    function izbacPonude (){
        $(".ponudaLijevo").animate({
    left: '0',
    opacity : '1'        
}, 500);
        
         $(".ponudaDesno").animate({
    right: '0',
    opacity : '1' 
}, 500);
        
         $("body").css("overflow","hidden");
    }
    
 
    function sakrivanjePonude(){
        $(".ponudaLijevo").animate({
    left: '-50%',
            opacity : '0'
}, 500);
        
         $(".ponudaDesno").animate({
    right: '-50%',
             opacity : '0'
}, 500);
        
         $("body").css("overflow","visible");
    }
    
          
                       
$(".prozorcicPonude").click(izbacPonude);   
$(".nazad").click(sakrivanjePonude);


    //    -----------KRAJ stranica AKTUELNO--------------

    //------------stranica GALERIJA (galerijaStrana.php), Galerija kao dio Homea--- 



    $prikaziSve = $("#prikaziSve, #prikaziSveStr");
    $prikaziBastu = $("#prikaziBastu, #prikaziBastuStr ");
    $prikaziPlazu = $("#prikaziPlazu, #prikaziPlazuStr");
    $prikaziOkolinu = $("#prikaziOkolinu, #prikaziOkolinuStr");

    $slikeBasteParne = $(".slikeBaste:even, .slikeBasteStr:even");
    $slikeBasteNeparne = $(".slikeBaste:odd, .slikeBasteStr:odd");
    $slikePlazeParne = $(".slikePlaze:even, .slikePlazeStr:even ");
    $slikePlazeNeparne = $(".slikePlaze:odd, .slikePlazeStr:odd");
    $slikeOkolineParne = $(".slikeOkoline:even, .slikeOkolineStr:even");
    $slikeOkolineNeparne = $(".slikeOkoline:odd, .slikeOkolineStr:odd ");


    $prikaziBastu.click(function () {

        $slikePlazeParne.fadeOut().css("top", "20vh").css("left", "5vh");
        $slikePlazeNeparne.fadeOut().css("top", "15vh").css("right", "8vh");

        $slikeOkolineParne.fadeOut().css("top", "16vh").css("right", "7vh");
        $slikeOkolineNeparne.fadeOut().css("top", "15vh").css("left", "8vh");

        $slikeBasteParne.fadeIn('fast').animate({
            'top': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });
        $slikeBasteNeparne.fadeIn('fast').animate({
            'top': '0',
            'left': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {


        });


        if ($sirinaProzora < 640) {
            $(".min640").css("display", "none");
        }
        
         if ($sirinaProzora < 768) {
            $(".min768").css("display", "none");
        }
        
         if ($sirinaProzora < 992) {
            $(".min992").css("display", "none");
        }
        
         if ($sirinaProzora < 1200) {
            $(".min1200").css("display", "none");
        }

    })


    $prikaziPlazu.click(function () {

        $slikePlazeParne.fadeIn('fast').animate({
            'top': '0',
            'left': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });

        $slikePlazeNeparne.fadeIn('fast').animate({
            'top': '0',
            'right': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });

        $slikeOkolineParne.fadeOut().css("top", "16vh").css("right", "7vh");
        $slikeOkolineNeparne.fadeOut().css("top", "15vh").css("left", "8vh");

        $slikeBasteParne.fadeOut().css("top", "28vh");
        $slikeBasteNeparne.fadeOut().css("top", "14vh").css("left", "8vh");
        
          if ($sirinaProzora < 640) {
            $(".min640").css("display", "none");
        }
        
         if ($sirinaProzora < 768) {
            $(".min768").css("display", "none");
        }
        
         if ($sirinaProzora < 992) {
            $(".min992").css("display", "none");
        }
        
         if ($sirinaProzora < 1200) {
            $(".min1200").css("display", "none");
        }

    })


    $prikaziOkolinu.click(function () {

        $slikePlazeParne.fadeOut().css("top", "20vh").css("left", "5vh");
        $slikePlazeNeparne.fadeOut().css("top", "15vh").css("right", "8vh");

        $slikeOkolineParne.fadeIn('fast').animate({
            'top': '0',
            'right': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });
        $slikeOkolineNeparne.fadeIn('fast').animate({
            'top': '0',
            'left': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });

        $slikeBasteParne.fadeOut().css("top", "28vh");
        $slikeBasteNeparne.fadeOut().css("top", "14vh").css("left", "8vh");
        
        
          if ($sirinaProzora < 640) {
            $(".min640").css("display", "none");
        }
        
         if ($sirinaProzora < 768) {
            $(".min768").css("display", "none");
        }
        
         if ($sirinaProzora < 992) {
            $(".min992").css("display", "none");
        }
        
         if ($sirinaProzora < 1200) {
            $(".min1200").css("display", "none");
        }

    })


    $prikaziSve.click(function () {

        $slikePlazeParne.fadeIn('fast').animate({
            'top': '0',
            'left': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });
        $slikePlazeNeparne.fadeIn('fast').animate({
            'top': '0',
            'right': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });


        $slikeOkolineParne.fadeIn('fast').animate({
            'top': '0',
            'right': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });
        $slikeOkolineNeparne.fadeIn('fast').animate({
            'top': '0',
            'left': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });

        $slikeBasteParne.fadeIn('fast').animate({
            'top': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });
        $slikeBasteNeparne.fadeIn('fast').animate({
            'top': '0',
            'left': '0'
        }, {
            duration: 'slow',
            queue: false
        }, function () {
            // Animation complete.
        });
        
        
          if ($sirinaProzora < 640) {
            $(".min640").css("display", "none");
        }
        
         if ($sirinaProzora < 768) {
            $(".min768").css("display", "none");
        }
        
         if ($sirinaProzora < 992) {
            $(".min992").css("display", "none");
        }
        
         if ($sirinaProzora < 1200) {
            $(".min1200").css("display", "none");
        }

    })

    //galerija na Homepageu - efekti navigacije

    $(".navigacija-galerijaStr>div").click(function () {
        $(".navigacija-galerijaStr>div").css("background-color", "#fff");
        $(".navigacija-galerijaStr>div").css("color", "#232323");
        $(this).css("background-color", "#344A71");
        $(this).css("color", "#fff");
    });







    //    -----------KRAJ sredjivnje galerije--------------






    //------------VELIKI EKRANI: VISINA PRIMARY NAV DA BUDE jednaka visini headera--- 



    $visinaMenija = $("header").height();
        
//       - $(".zaglavljeVeci").outerHeight();
    $visinaMenija += "px";
    $(".menu-primary-navigation-container>ul>li, .menu-primary-nav-eng-container>ul>li, .menu-primary-navigation-ru-container>ul>li").css("height", $visinaMenija);

    //boje primary menua

    function fjaMenuUlaz() {
        $(this).find("a").css("color", "#E7C130");
    }

    function fjaMenuIzlaz() {
        $(this).find("a").css("color", "#fff");

    }

    $(".menu-primary-navigation-container>ul>li:not(:first-child), .menu-primary-nav-eng-container>ul>li:not(:first-child), .menu-primary-navigation-ru-container>ul>li:not(:first-child)").hover(fjaMenuUlaz, fjaMenuIzlaz);

 
    
    
    
//    -----------DA VISINA RAMA ZA REZERVACIJE NE ODSKACE----------
    if ($(".checkMe").length > 0) {
    
    function visinaRamaZaRez(){
    
        
    $visinaRama = $(".checkMe").offset().top - $(".ramZaDostupnost").offset().top +   $(".checkMe").height() ;
    $visinaRama *= 1.25;
    $visinaRama += "px";
//    console.log("visinaAAA " + $visinaRama);
    $(".ramZaDostupnost").css("height", $visinaRama);
    }
    visinaRamaZaRez();
    $( window ).resize(visinaRamaZaRez);

    /*                   
        function polozajDugmeGalerije(){
            $sirinaProzora = $(window).width();
            
            
            if ($sirinaProzora < 700) {
                $udaljenost = 160;
            } 
            
            if ($sirinaProzora >= 700) {
                $udaljenost = 210;
            } 
            if ($sirinaProzora >= 992) {
                $udaljenost = 280;
            } 
            
             if ($sirinaProzora >= 1200) {
                $udaljenost = 350;
            } 
            
          //isto i za polozaj dugmeta galerije 
    $visinaRama = $("#slikeGalerijeStrana").offset().top + $("#slikeGalerijeStrana").height() ;
//            $("#okvir-galerijaStr").offset().top +   $(".slikeIzGelerijeStr").last().height() ;
    $visinaRama += $udaljenost ;
    $visinaRama += "px";
//    console.log("visinaAAA " + $visinaRama);
    $(".krajGalerije").css("top", $visinaRama);
    }
    polozajDugmeGalerije();
    $( window ).resize(polozajDugmeGalerije);                  
               
    
    */
    
        //i za navigaciju slidera utisci
    
    
    function polozajNavigacijeSliderUtisci(){
            $sirinaProzora = $(window).width();
            
            
            if ($sirinaProzora < 700) {
                $udaljenost = 25;
            } 
            
            if ($sirinaProzora >= 700) {
                $udaljenost = 40;
            } 
            if ($sirinaProzora >= 992) {
                $udaljenost = 60;
            } 
        
         if ($sirinaProzora >= 992) {
                $udaljenost = 70;
            } 
        
        if ($sirinaProzora >= 1200) {
                $udaljenost = 80;
            }
            
          //isto i za polozaj dugmeta galerije 
    $visina = $(".gost").offset().top + $(".gost").height() ;
//            $("#okvir-galerijaStr").offset().top +   $(".slikeIzGelerijeStr").last().height() ;
    $visina += $udaljenost ;
    $visina += "px";
//    console.log("visinaAAAje " + $visina);
    $(".navigationUtisci").css("top", $visina);
    }
    polozajNavigacijeSliderUtisci();
    $( window ).resize(polozajNavigacijeSliderUtisci); 
        
        
    }
        
   
    //    -----------KRAJ VELIKI EKRANI: VISINA PRIMARY NAV...--------------






    //------------STRANA GALERIJA: KLIK NA SLIKU-- 
    // za pocetak, skrivam sliku
    
//    $(".okvir-slike ").hide();
    
    
    function uvecajSliku(){
        $adresaSlike = $(this).find("img").attr("src");
        $(".odabranaSlika>div>img").attr("src", $adresaSlike);
        $(".okvir-slike ").css("display", "flex");
         $("body").css("overflow","hidden");
    }
    
    
    $(".slikeIzGelerije, .slikeIzGelerijeStr").click(uvecajSliku);
    
    // da klikom na iksic nestane prikazana slika
    
    function skloniSliku(){
        $(".okvir-slike ").css("display", "none");
        $("body").css("overflow","visible");
    }
    
    $(".zatvoriSliku").click(skloniSliku);
    
    
    
    
    // navigacija galerije na stranici galerija
    
    $(".navigacija-galerija>div").click(function(){
        $(".navigacija-galerija>div").css("border-bottom", "none");
        $(this).css("border-bottom", "2px solid rgb(52, 74, 113)");
    })
    
    
    //efekti na stranici o nama
    
    $(".dio-rasko").css("display", "none");
    $(".dio-rasko").fadeIn(1500);
    
    
   
    
   
    
    
   
   
    //zatvarajuci tag za document ready 
})

//  jQuery(".weatherContainer").children().css("background-color", "red");


