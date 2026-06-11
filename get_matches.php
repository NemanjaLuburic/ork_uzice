<?php
include 'db.php';

$result = $conn->query("SELECT * FROM utakmice ORDER BY datum DESC");

while($row = $result->fetch_assoc()) {
?>

<tr>

<td><?= $row['protivnik'] ?></td>
<td><?= $row['datum'] ?></td>
<td><?= $row['golovi_uzice'] ?> : <?= $row['golovi_protivnik'] ?></td>
<td><?= $row['rezultat'] ?></td>

<td>

<button class="edit"
onclick="editMatch(
<?= $row['id'] ?>,
'<?= $row['protivnik'] ?>',
'<?= $row['datum'] ?>',
<?= $row['golovi_uzice'] ?>,
<?= $row['golovi_protivnik'] ?>
)">
✏ Izmeni
</button>

<button class="delete"
onclick="deleteMatch(<?= $row['id'] ?>)">
🗑 Obriši
</button>

</td>

</tr>

<?php } ?>