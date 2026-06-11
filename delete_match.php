<?php

include 'db.php';

$id=$_GET['id'];

$conn->query(
"DELETE FROM utakmice WHERE id=$id"
);