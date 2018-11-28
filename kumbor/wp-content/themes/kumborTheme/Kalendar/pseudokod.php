1. index.php-u 2 mysql querya, za izbor dosupnosti mjeseca i za cijene (iz tabela "smjestaj" i "cijjene");

2. u kalendar.php: a) povezivanje sa bazom (mysqli_query...), fetchovano i dobijeni ime objekta, sobe i mjeseca, dostupnost soba.
b) to dobijeno stavljeno u sakriveni html element, kako bih mogao preuzeti pomocu js-a
c) pomocu for petlje iscrtan kalendar. U klasi je dostuponst soba (dostupnost0 = zauzeto, dostupnost1 = slobodno).


3. U javascript.js:
a) uzet naziv objekta, mjesca, i td. Dan se uzima kao broj kvadratica u koji je usao pointer
i cijene
b) pomocu ajax post-a, podaci se salju skrikpte na php skripte cjenovnik.php (dje se izracunavaju cijene, centralni dokument)
 

4. U cjenovnik.php uvoz podataka:

a) primjeni podaci od ajaxa.
b) ubacena konekcija
c) includovano cijeneQuery.php - to je php fajl sa mysqli query-em za preuzimanje podataka iz tabele "cijene'. Fetchovani podaci, dobijene cijene u obliku $cijene[i], i je dan u mjesecu
d) includovano dostupnost.php - to je php fajl sa mysqli query-em za preuzimanje podataka iz tabele "cijene'. Fetchovani podaci, dobijene cijene u obliku $dostupnost[i], i je dan u mjesecu
e) includovano sljedeciMjesec.php. Pomocu odgovarajucih query-a trezene cijene i dostupnost za sljedeci mjesec, u formatu $nextDostupnost[i] i $nextCijene[i], i je dan u mjesecu
f) includovano prethodniMjesec.php. Pomocu odgovarajucih query-a trezene cijene i dostupnost za prethodni mjesec, u formatu $prevDostupnost[i] i $prevCijene[i], i je dan u mjesecu


dalje, po redu ukljucivanja u cjenovnik.php:

5) ukjuceno parcijalneSume.php - tu su izracunate sume za boravak od prvog, pa do svakog slobodnog datuma (npr suma za boravak od prvod do drugog, od prvog do treceg itd), sve dok je dostupnost 1 (while petlja)

6) ukljuceno daLiSuSlobodniDoKraja.php: clanovi u obliku $daLiSuSlobodniDoKrajaMjeseca[$i], pocetna vrijednost je za svako i true. Pomocu for petlje (od dana i do posjednjeg u mjesecu) provjeravam da li je dostupnost svih narednih dana 1, ako nije, $daLiSuSlobodniDoKrajaMjeseca[$dan] dobija vrijendost false i izlazim iz petlje

7) u cjenovnik.php izracunat broj dana od odabranog datuma do sljedeceg zauzetog, sa tim sto je maksimalna vrijednost tog broajca 9, jer ce se koristiti samo ako nije dostupna ponuda za 10 i 21 dan. Vrijednost brojaca $brojacDoZauzetogUkupno je je podjeljena na $brojacDoZauzetogOvajMj + $brojacDoZauzetogNextMj

8) ukljuceno izradaPonudePrviKorak - za izradu ponude za 10 i 21 dan, ako je naredni zauzet dan u aktivnom  mjesecu. Ponude za 10 i 21 su nizovi integera u formatu $ponudaZa10[$dan] i $ponudaZa21[$dan]  : ponovo while petlja, cijena aranzmana za dati dan je cijena aranzmana za prethodni dan + cijena za dati dan

9) ukljuceno izradaPonudeDrugiKorak - za aranzmane ciji dani nisu svi iz istog mjeseca
  PRVO ZA PONUDU ZA 10 DANA:
  a) izracunata $dioCijeneIzAktivnogMjeseca kao zbir cijena od izabranog dana do posljednjeg u mjesecu 
  b) ako ne postoji ponuda za 10 i svi su sloobodni => treba preci u sljedeci mjesec. Izracunato koliko dana treba dodati iz sljedeceg mjeseca ( = ukupan broj do sljedeceg zauzetog - broj dana iz datog mjeseca). Za taj izracunati broj je iz array-a parcijalnih suma uzeta odgovarajuca parcijalna suma $parcijalneSume[$zaDodatiDanaIzSljedecegMjes10]. Tu parcijalnu sumu dodajem na $dioCijeneIzAktivnogMjeseca i dobijam $ponudaZa10[$dan]

   ONDA PONUDA ZA 21 DAN,
   princip je isti


10) Pocinjem stampanje ponude:
    a) ako postoji ponuda za 10 i 21 dan, stampa te ponude za taj dan
    b) ako postoji ponuda za 10, ali ne i za 21, ubacujem samo10iManje.php. U tom fajlu prvo se izradjuje ponuda za manje od 10 dana ako su svi dani iz istog mjeseca, pa za 10 i manje dana ako aranzman preskace u naredni mjesec. Kod preskoka, suma je ponovo podjeljena na dva dijela, sumu iz aktivnog mjeseca i na sumu iz narednog mjeseca. Ubaceni popusti
    c) ako ne postoji ponuda ni za 10 ni za, ubacujem ponudaZaKrace.php. Tu takodje postoje opcije kada preskace i kada ne preskace. Dakle, gleda se ponuda do prvog narednog zauzetog dana, kao i  $ponudaMinus2 i  $ponudaMinus1, tj ponuda za 2 i 1 dana manje nego sto ih je do narednog slobodnog dana.
    





