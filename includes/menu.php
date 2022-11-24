<?php
    $content = "includes/akcios.php";

    if(isset($_GET["p"])){
        switch($_GET["p"]){
            case "adatlap":
                $content = "includes/adatlap.php";
                break;
            case "pizzak":
                $content = "includes/pizza.php";
                break;
            case "rnd":
                $content = "includes/rnd.php";
                break;
        }
    }
?>