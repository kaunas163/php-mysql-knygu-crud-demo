<?php include("header.php"); ?>

<?php

$id = (int)$_GET['knygos_id'];

$sql = "SELECT pavadinimas, autorius, kaina, puslapiu_sk, pridejimo_data
        FROM knygos
        WHERE id=$id";

$rezultatai = $conn->query($sql);

if ($rezultatai->num_rows > 0) {
    $knyga = $rezultatai->fetch_assoc();

    ?>

        <header>
            <h1>Knygos "<?php echo $knyga['pavadinimas']; ?>" duomenys</h1>
        </header>

        <div class="content">
            <p><a href="index.php">Grįžti</a></p>

            <p><strong>Autorius:</strong> <?php echo $knyga['autorius']; ?></p>
            <p><strong>Kaina:</strong> <?php echo $knyga['kaina']; ?> eur</p>
            <p><strong>Puslapių sk.:</strong> <?php echo $knyga['puslapiu_sk']; ?></p>
            <p><strong>Pridėjimo data:</strong> <?php echo $knyga['pridejimo_data']; ?></p>
        </div>

    <?php
} else {
    header("Location: index.php");
}

?>

<?php include("footer.php"); ?>
