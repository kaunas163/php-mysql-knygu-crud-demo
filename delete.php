<?php include("header.php"); ?>

<?php

$id = (int)$_GET['id'];

$sql = "SELECT pavadinimas FROM knygos WHERE id = $id";
$rezultatai = $conn->query($sql);

if ($rezultatai->num_rows > 0) {
    $knyga = $rezultatai->fetch_assoc();
    ?>

        <header>
            <h1>Knygos "<?php echo $knyga['pavadinimas']; ?>" šalinimas</h1>
        </header>

        <div class="content">
            <p>Ar tikrai norite šalinti šią knygą?</p>
            <p>
                <a href="delete_action.php?id=<?php echo $id; ?>">Taip</a>
                <a href="index.php">Ne</a>
            </p>
        </div>

    <?php
} else {
    header("Location: index.php");
}

?>

<?php include("footer.php"); ?>