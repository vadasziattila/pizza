<?php
    $result = adatlap();
    $row = mysqli_fetch_array($result);
?>
<div class="container py-5">
    <h1 class="text-center display-5"><?php echo $row["nev"]; ?></h1>
    <p class="fs-4"><?php echo $row["feltet"] ?></p>
    <?php if($row["akcios"]==1){ ?>
        <b><p class="fs-4">Ez a pizza most akciós a készlet erejéig - 10%</p></b>
        <b></b>
        <p class="fs-4">Árak:</p>
        <ul>
            <li>24 cm: <s><?php echo $row["ar"]; ?></s> helyett: <b><?php echo $row["ar"]*0.9; ?> Ft</b></li>
            <li>32 cm: <s><?php echo $row["ar"]*1.25; ?></s> helyett: <b><?php echo ($row["ar"]*1.25)*0.9; ?> Ft</b></li>
            <li>45 cm: <s><?php echo $row["ar"]*1.5; ?></s> helyett: <b><?php echo ($row["ar"]*1.5)*0.9; ?> Ft</b></li>
        </ul>
    <?php } else { ?>
        <b><p class="fs-4">Ez a pizza nem akciós, lehet, hogy jövő héten az lesz</p></b>
    <?php } ?>
</div>