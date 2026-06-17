<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "ork_uzice";

// Konekcija na MySQL server
$conn = new mysqli($host, $user, $password);

if ($conn->connect_error) {
    die("Greška: " . $conn->connect_error);
}

// Kreiranje baze ako ne postoji
$sql = "CREATE DATABASE IF NOT EXISTS $dbname
        CHARACTER SET utf8mb4
        COLLATE utf8mb4_general_ci";

if (!$conn->query($sql)) {
    die("Greška pri kreiranju baze: " . $conn->error);
}

// Izbor baze
$conn->select_db($dbname);

// Kreiranje tabele ako ne postoji
$sql = "CREATE TABLE IF NOT EXISTS utakmice (
    id INT(11) NOT NULL AUTO_INCREMENT,
    protivnik VARCHAR(100) NOT NULL,
    datum DATE NOT NULL,
    golovi_uzice INT(11) NOT NULL,
    golovi_protivnik INT(11) NOT NULL,
    rezultat ENUM('Pobeda','Nerešeno','Poraz') NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

if (!$conn->query($sql)) {
    die('Greška pri kreiranju tabele: ' . $conn->error);
}

// Provera da li tabela sadrži podatke
$provera = $conn->query("SELECT COUNT(*) AS broj FROM utakmice");
$red = $provera->fetch_assoc();

// Ubacivanje početnih podataka samo prvi put
if ($red['broj'] == 0) {

    $conn->query("
    INSERT INTO utakmice
    (id, protivnik, datum, golovi_uzice, golovi_protivnik, rezultat)
    VALUES
    (3, 'radnicki', '2026-06-11', 32, 12, 'Pobeda'),
    (4, 'mladost', '2026-07-05', 45, 23, 'Pobeda'),
    (6, 'jagodina', '2026-07-02', 45, 45, 'Nerešeno'),
    (7, 'kraljevo', '2026-06-01', 12, 12, 'Nerešeno'),
    (8, 'kragujevac', '2026-06-18', 35, 14, 'Pobeda'),
    (9, 'sloga', '2026-06-12', 12, 45, 'Poraz'),
    (10, 'rk cacak', '2026-06-16', 5, 10, 'Poraz'),
    (11, 'valjevo', '2026-06-23', 46, 35, 'Pobeda'),
    (12, 'paracin', '2026-06-23', 25, 25, 'Nerešeno'),
    (13, 'crvena zvezda', '2026-06-25', 14, 25, 'Poraz')
    ");
}

?>