<?php

include("header.php");

$pavadinimas = $_GET['pavadinimasInput'];
$autorius = $_GET['autoriusInput'];
$kaina = floatval($_GET['kainaInput']);
$puslapiai = $_GET['puslapiaiInput'];

$data = new DateTime("NOW");
$formatuotaData = $data->format("Y-m-d H:i:s");

$sql = "INSERT INTO knygos (pavadinimas, autorius, kaina, puslapiu_sk, pridejimo_data)
        VALUES ('$pavadinimas', '$autorius', $kaina, $puslapiai, '$formatuotaData')";

$conn->query($sql);
header("Location: index.php");

include("footer.php");