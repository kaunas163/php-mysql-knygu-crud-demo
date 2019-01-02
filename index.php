<?php include("header.php"); ?>

<?php

    $sql = "SELECT id, pavadinimas, autorius, kaina, puslapiu_sk, pridejimo_data
            FROM knygos";
    $rezultatai = $conn->query($sql);

?>

<header>
    <h1>Knygos</h1>
</header>

<div class="content">
    <p>
        <a href="">Nauja knyga</a>
    </p>

    <?php
    
        if ($rezultatai->num_rows > 0) {
            ?>

                <table border="1">
                    <tr>
                        <th>Pavadinimas</th>
                        <th>Autorius</th>
                        <th>Kaina, eur</th>
                        <th>Puslapių sk.</th>
                        <th>Pridėjimo data</th>
                        <th>Veiksmai</th>
                    </tr>

                    <?php

                        while ($knyga = $rezultatai->fetch_assoc()) {
                            ?>

                                <tr>
                                    <td><?php echo $knyga['pavadinimas']; ?></td>
                                    <td><?php echo $knyga['autorius']; ?></td>
                                    <td><?php echo $knyga['kaina']; ?></td>
                                    <td><?php echo $knyga['puslapiu_sk']; ?></td>
                                    <td><?php echo $knyga['pridejimo_data']; ?></td>
                                    <td>
                                        <a href="view.php?knygos_id=<?php echo $knyga['id']; ?>">Peržiūrėti</a>
                                        <a href="">Atnaujinti</a>
                                        <a href="">Šalinti</a>
                                    </td>
                                </tr>

                            <?php
                        }

                    ?>
                    
                </table>

            <?php
        } else {
            echo "<p>Nieko nerasta.</p>";
        }
    
    ?>
    
</div>

<?php include("footer.php"); ?>