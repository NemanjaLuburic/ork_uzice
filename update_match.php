<?php

include 'db.php';

$id = $_POST['id'];

$protivnik = $_POST['protivnik'];
$datum = $_POST['datum'];

$uzice = $_POST['uzice'];
$protivnikGolovi = $_POST['protivnikGolovi'];

if ($uzice > $protivnikGolovi) {
    $rezultat = "Pobeda";
} elseif ($uzice == $protivnikGolovi) {
    $rezultat = "Nerešeno";
} else {
    $rezultat = "Poraz";
}

$conn->query("
UPDATE utakmice
SET
protivnik='$protivnik',
datum='$datum',
golovi_uzice='$uzice',
golovi_protivnik='$protivnikGolovi',
rezultat='$rezultat'
WHERE id=$id
");

?>