<?php

include 'db.php';

$protivnik=$_POST['protivnik'];
$datum=$_POST['datum'];

$uzice=$_POST['uzice'];
$protivnikGolovi=$_POST['protivnikGolovi'];

if($uzice>$protivnikGolovi){
$rezultat="Pobeda";
}
elseif($uzice==$protivnikGolovi){
$rezultat="Nerešeno";
}
else{
$rezultat="Poraz";
}

$sql="
INSERT INTO utakmice
(protivnik,datum,golovi_uzice,golovi_protivnik,rezultat)
VALUES
('$protivnik','$datum','$uzice','$protivnikGolovi','$rezultat')
";

$conn->query($sql);