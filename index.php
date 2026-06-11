<!DOCTYPE html>
<html lang="sr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ORK Užice</title>

<link rel="stylesheet" href="main.css">
</head>

<body>

<header>

    <div class="header-left">
        <img src="images/logo.jfif" class="logo">
    </div>

    <div class="header-center">
        <h1>ORK UŽICE</h1>
        <p>
            Omladinski rukometni klub Užice osnovan je 1998. godine.
            Klub razvija mlade igrače i takmiči se u regionalnim ligama Srbije.
        </p>
    </div>

</header>

<main>

<!-- LEVI PANEL -->
<div class="left-panel">

    <img src="images/logo.jfif" class="big-logo">

    <h2>Unos utakmice</h2>

    <form id="matchForm">

        <input type="hidden" id="matchId" name="id">

        <input type="text" name="protivnik" placeholder="Protivnik" required>

        <input type="date" name="datum" required>

        <input type="number" name="uzice" placeholder="Golovi Užice" required>

        <input type="number" name="protivnikGolovi" placeholder="Golovi protivnika" required>

        <button type="submit" class="submit">
            Sačuvaj utakmicu
        </button>

    </form>

</div>

<!-- SREDNJI PANEL -->
<div class="center-panel">

    <div class="tabs">
        <button onclick="showPage('klub')">O KLUBU</button>
        <button onclick="showPage('odigrano')">ODIGRANO</button>
        <button onclick="showPage('statistika')">STATISTIKA</button>
    </div>

    <!-- KLUB -->
    <div id="klub" class="page active">

        <h2>O klubu</h2>

        <img src="images/klub.jfif" class="club-image">

        <p>
            ORK Užice je jedan od najperspektivnijih rukometnih klubova u regionu, prepoznat po kvalitetnom radu sa mlađim kategorijama i kontinuiranom razvoju mladih sportista. Klub neguje tradiciju rukometa u Užicu i predstavlja važan centar za razvoj ovog sporta u zapadnoj Srbiji. Poseban akcenat stavlja se na stručan rad sa decom i omladinom, kroz koji se mladim igračima pruža prilika da usavrše svoje rukometne veštine, razviju sportski duh i steknu zdrave životne navike. 

Škola rukometa ORK Užice okuplja veliki broj dečaka različitih uzrasnih kategorija, a cilj kluba je stvaranje kvalitetnih igrača koji će jednog dana nositi dres prvog tima i predstavljati grad na regionalnim i nacionalnim takmičenjima. Trenerski kadar posvećen je individualnom napretku svakog igrača, uz naglasak na timski rad, disciplinu i sportsko ponašanje.

Pored rada sa mlađim selekcijama, klub redovno učestvuje u ligaškim i turnirskim takmičenjima, gde ostvaruje zapažene rezultate i promoviše rukomet među mladima. Tokom prethodnih sezona ORK Užice je beležio značajne pobede i pokazao da poseduje potencijal za dalji napredak i razvoj.

Vizija kluba je da Užice postane prepoznatljiv rukometni centar, mesto gde će mladi sportisti imati najbolje uslove za trening, napredovanje i ostvarivanje svojih sportskih ambicija. Kroz predan rad, zajedništvo i ljubav prema rukometu, ORK Užice nastavlja da gradi uspešnu budućnost.
        </p>

    </div>

    <!-- ODIGRANO -->
    <div id="odigrano" class="page">

        <h2>Odigrane utakmice</h2>

        <table>

            <thead>
                <tr>
                    <th>Protivnik</th>
                    <th>Datum</th>
                    <th>Rezultat</th>
                    <th>Ishod</th>
                    <th>Radnje</th>
                </tr>
            </thead>

            <tbody id="matchesTable"></tbody>

        </table>

    </div>

    <!-- STATISTIKA -->
    <div id="statistika" class="page">

        <h2>Statistika</h2>

        <div id="statsBox"></div>

    </div>

</div>

<!-- DESNI PANEL -->
<div class="right-panel">

    <h2>Igrači</h2>

    <div class="players">

        <p><b>Miroslav Kujundžić</b> - Požrtvovan trener i uprava kluba. Ima ogromnu strast prema rukometu i tokom svoje karijere je bio respektabilan igrač Super B lige.</p>
        <p><b>Čolović Slobodan</b> - Veoma stručan i školovan trener. Vodio je jedne od najboljih klubova Nemačke lige koji su sa njim na čelu osvojili značajne rezultate.</p>
        <p><b>Aleksa Aleksić</b> - Najbolji i najiskusniji golman kluba, čije odbrane i bačene kontre često preokrenu tok i ishod utakmice.</p>
        <p><b>Danilo Grujičić</b> - Najmlađi igrač prve postave tima. Nezaustavljiv srednji bek čiji golovi su uvek tu kad je to najpotrebnije.</p>
        <p><b>Darko Radojević</b> - Najiskusniji pivot kluba i čovek čije samo ime uliva samopouzdanje i čiji svaki gol podiže publiku na noge.</p>
        <p><b>Aleksa Radojević</b> - Još jedan pivot kluba koji daje svoj maksimum na terenu i ugleda se svog brata (Darka) i pokušava da ga dostigne.</p>
        <p><b>Ilija Antić</b> - Iskusan igrač koji može da igra svaku poziciju i nikad ne razočara.</p>
        <p><b>Nemanja Praščević</b> - Najbolji i najefikasniji igrač ekipe koji često nosi ekipu i čiji golovi preokreću tok utakmice.</p>
        <p><b>Admir Duraković</b> - Kapiten kluba, sjajan igrač koji ume da uzme stvar u svoje ruke i predvodi tim.</p>
        <p><b>Marjanović Miroslav</b> - Najbolji izvođač sedmeraca i verovarno najiskusniji igrač kluba sa jako nezgodnim šutom.</p>
        <p><b>Stefan Krstović</b> - Sjajan levoruki igrač i veoma iskusno desno krilo koje često igra i desnog beka.  </p>
        <p><b>Jovan Marinković</b> - Iskusno levo krilo koje nikad ne razočara.</p>
        <p><b>Nemanja Barjaktar</b> - Igrač prve postave na poziciji levog krila, takođe nekada igrao u Super B ligi. Njegove kontre preokreću tok utakmice.</p>
        <p><b>Uroš Glišović</b> - Čovek koji ostavlja srce i dušu na parketu, svakog minuta koji provede u igri da svoj maksimum.</p>
        <p><b>Dorđe Jovanović</b> - Budućnost kluba. Veoma mlad igrač koji daje sve od sebe i već igra u prvoj ligi zapada.</p>
        <p><b>Darko Otašević</b> - Golman od koga se mnogo okečuje. Takođe mlad golman koji znatno napreduje iz sezone u sezonu.</p>
        <p><b>Vukašin Tešić</b> - Naš mladi levoruki igrač koji daje sve od sebe na terenu. </p>
        <p><b>Nemanja Lazić</b> - Jako talentovan levi bek sa maksimalnim predispozicijama od koga se mnogo očekuje u svakom pogledu. Takođe i sudija po potrebi na prijateljskim utakmicama.</p>         
        <p><b>Mateja Vasiljević</b> - Najluđe levo krilo u istoriji rukometa. Odličan igrač koji na terenu pokazuje svoj maksimum. Takođe i sudija po potrebi na prijateljskim utakmicama.</p>
        <p><b>Filip Simanić</b> - Čovek-Gidsel niko mu ništa ne može.</p>

    </div>

</div>

</main>

<footer>

    <p>G-mail: orkuzice123@gmail.com</p>
    <p>Kontakt uprave kluba: +381 67 123 45 67</p>
    <p>Autor: Nemanja Luburić IIIe1</p>

</footer>

<script src="script.js"></script>

</body>
</html>
