<?php
$result = pizza();
?>
<div class="container py-3">
    <h1 class="text-center display-5">Összes pizzánk</h1>
    <p class="fs-4">Rendezés: </p>
    <table class="table table-striped">
        <th>Név</th>
        <th>Feltétek</th>
        <th>24 cm</th>
        <th>32 cm</th>
        <th>45 cm</th>
        </tr>

        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td>
                    <a href="./p=adatlap&id"><?php echo $row["nev"]; ?></a>
                </td>
                <td>
                    <p><?php echo $row["feltet"]; ?></p>
                </td>
                <td>
                    <?php if($row["akcios"]==1) { ?>
                        <b><span class="text-danger"><?php echo $row["ar"]*0.9; ?> Ft</span></b>
                    <?php } else { echo $row["ar"]; } ?>
                </td>
                <td>
                <?php if($row["akcios"]==1) { ?>
                        <b><span class="text-danger"><?php echo ($row["ar"]*1.25)*0.9; ?> Ft</span></b>
                    <?php } else { echo $row["ar"]*1.25; } ?>
                </td>
                <td>
                <?php if($row["akcios"]==1) { ?>
                        <b><span class="text-danger"><?php echo ($row["ar"]*1.5)*0.9; ?> Ft</span></b>
                    <?php } else { echo $row["ar"]*1.5; } ?>
                </td>
                <td>
                    <p></p>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>