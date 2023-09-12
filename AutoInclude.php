<?php
    include("Auto.php");
    include("AutoOverzicht.php");

    $ao = new AutoOverzicht();
    $ao->add(new Auto(merk: "BMW", type: "318i", prijs: 45677, kleur: "blauw"));
    $ao->add(new Auto(merk: "Audi", type: "R8", prijs: 34566, kleur: "bruin"));
    $ao->add(new Auto(merk: "Audi", type: "A3", prijs: 7888, kleur: "groen"));
    $ao->add(new Auto(merk: "Audi", type: "A1", prijs: 12355, kleur: "blauw"));
    $ao->add(new Auto(merk: "Ferarri", type: "GTS", prijs: 102435, kleur: "rood"));
    $ao->add(new Auto(merk: "Ferarri", type: "Enzo", prijs: 98955, kleur: "rood"));
    $ao->add(new Auto(merk: "Ferarri", type: "Testarossa", prijs: 133299, kleur: "rood"));

    if(isset($_POST['submit'])) {
        $autos = $ao->filterByMerk($_POST['merk']);
    } else {
        $autos = $ao->autos;
    }
?>

<form action="index.php?page=AutoInclude" method="post">
    <select name="merk">
        <option value="alle">Alle</option>
        <?php foreach($ao->getMerken() as $merk) { ?>
        <option><?= $merk ?></option>
        <?php } ?>
    </select>
    <input type="submit" name="submit">
</form>
<table>
    <?php foreach($autos as $auto){ ?>
    <tr>
        <td><?= $auto->merk ?></td>
        <td><?= $auto->type ?></td>
        <td><?= $auto->kleur ?></td>
        <td><?= $auto->prijs ?></td>
    </tr>
    <?php } ?>
</table>
