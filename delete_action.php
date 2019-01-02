<?php

include("header.php");

$id = (int)$_GET['id'];
$sql = "DELETE FROM knygos WHERE id = $id";
$conn->query($sql);
header("Location: index.php");

include("footer.php");