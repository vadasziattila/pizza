<?php
    function akcio(){
        $con = Connect();
        $sql = "SELECT * FROM pizzak WHERE akcios=1";
        $result = mysqli_query($con,$sql);
        return $result;
    
        mysqli_close($con);
    }

    function adatlap(){
        $con = Connect();
        $id = $_GET["id"];
        $sql = "SELECT * FROM pizzak WHERE ID=".$id;
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }

    function pizza()
    {
        $con = Connect();
        $sql = "SELECT * FROM pizzak";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
?>