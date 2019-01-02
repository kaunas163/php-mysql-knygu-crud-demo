<?php include("header.php"); ?>

<header>
    <h1>Nauja knyga</h1>
</header>

<div class="content">
    <p><a href="index.php">Grįžti</a></p>
    
    <form action="new_action.php" method="get">
        <div class="group">
            <label for="pavadinimas">Pavadinimas</label>
            <input type="text" id="pavadinimas" name="pavadinimasInput">
        </div>
        <div class="group">
            <label for="autorius">Autorius</label>
            <input type="text" id="autorius" name="autoriusInput">
        </div>
        <div class="group">
            <label for="kaina">Kaina, eur</label>
            <input type="text" id="kaina" name="kainaInput">
        </div>
        <div class="group">
            <label for="puslapiai">Puslapių skaičius</label>
            <input type="number" min="1" id="puslapiai" name="puslapiaiInput">
        </div>
        <div class="group">
            <input type="submit" value="Sukurti">
        </div>
    </form>
</div>

<?php include("footer.php"); ?>