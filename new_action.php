<?php

include("header.php");

$pavadinimas = $_POST['pavadinimasInput'];
$autorius = $_POST['autoriusInput'];
$kaina = floatval($_POST['kainaInput']);
$puslapiai = $_POST['puslapiaiInput'];

$data = new DateTime("NOW");
$formatuotaData = $data->format("Y-m-d H:i:s");

$sql = "INSERT INTO knygos (pavadinimas, autorius, kaina, puslapiu_sk, pridejimo_data)
        VALUES ('$pavadinimas', '$autorius', $kaina, $puslapiai, '$formatuotaData')";

$conn->query($sql);
header("Location: index.php");

include("footer.php");