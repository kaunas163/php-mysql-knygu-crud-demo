<?php include("header.php"); ?>

<?php

$id = (int)$_GET['id'];
$sql = "SELECT pavadinimas, autorius, kaina, puslapiu_sk
        FROM knygos
        WHERE id = $id";
$rezultatai = $conn->query($sql);

if ($rezultatai->num_rows > 0) {
    $knyga = $rezultatai->fetch_assoc();
    ?>

        <header>
            <h1>Knygos "<?php echo $knyga['pavadinimas']; ?>" atnaujinimas</h1>
        </header>

        <div class="content">
            <p><a href="index.php">Grįžti</a></p>
            
            <form action="edit_action.php?id=<?php echo $id; ?>" method="post">
                <div class="group">
                    <label for="pavadinimas">Pavadinimas</label>
                    <input type="text" id="pavadinimas" name="pavadinimasInput" value="<?php echo $knyga['pavadinimas']; ?>">
                </div>
                <div class="group">
                    <label for="autorius">Autorius</label>
                    <input type="text" id="autorius" name="autoriusInput" value="<?php echo $knyga['autorius']; ?>">
                </div>
                <div class="group">
                    <label for="kaina">Kaina, eur</label>
                    <input type="text" id="kaina" name="kainaInput" value="<?php echo $knyga['kaina']; ?>">
                </div>
                <div class="group">
                    <label for="puslapiai">Puslapių skaičius</label>
                    <input type="number" min="1" id="puslapiai" name="puslapiaiInput" value="<?php echo $knyga['puslapiu_sk']; ?>">
                </div>
                <div class="group">
                    <input type="submit" value="Atnaujinti">
                </div>
            </form>
        </div>

    <?php
} else {
    header("Location: index.php");
}

?>

<?php include("footer.php"); ?>