<?php

include("header.php");

$id = (int)$_GET['id'];

$pavadinimas = $_POST['pavadinimasInput'];
$autorius = $_POST['autoriusInput'];
$kaina = floatval($_POST['kainaInput']);
$puslapiai = $_POST['puslapiaiInput'];

$sql = "UPDATE knygos
        SET
            pavadinimas = '$pavadinimas',
            autorius = '$autorius',
            kaina = $kaina,
            puslapiu_sk = $puslapiai
        WHERE id = $id";

$conn->query($sql);
header("Location: index.php");

include("footer.php");