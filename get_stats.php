<?php

include 'db.php';

$pobede = $conn->query(
"SELECT COUNT(*) broj
FROM utakmice
WHERE rezultat='Pobeda'")
->fetch_assoc()['broj'];

$nereseno = $conn->query(
"SELECT COUNT(*) broj
FROM utakmice
WHERE rezultat='Nerešeno'")
->fetch_assoc()['broj'];

$porazi = $conn->query(
"SELECT COUNT(*) broj
FROM utakmice
WHERE rezultat='Poraz'")
->fetch_assoc()['broj'];

$bodovi =
($pobede * 2)
+
($nereseno * 1);

$ukupnoDatih = $conn->query(
"SELECT SUM(golovi_uzice) ukupno
FROM utakmice"
)->fetch_assoc()['ukupno'];

$ukupnoPrimljenih = $conn->query(
"SELECT SUM(golovi_protivnik) ukupno
FROM utakmice"
)->fetch_assoc()['ukupno'];

echo "
<h3>Pobede: $pobede</h3>

<div style='height:20px;
background:green;
width:" . ($pobede*20) . "px'></div>

<h3>Nerešeno: $nereseno</h3>

<div style='height:20px;
background:orange;
width:" . ($nereseno*20) . "px'></div>

<h3>Porazi: $porazi</h3>

<div style='height:20px;
background:red;
width:" . ($porazi*20) . "px'></div>

<div class='points'>Ukupan broj bodova: $bodovi</div>

<div class='points'>Ukupan broj datih golova: $ukupnoDatih</div>

<div class='points'>Ukupan broj primljenih golova: $ukupnoPrimljenih</div>
";