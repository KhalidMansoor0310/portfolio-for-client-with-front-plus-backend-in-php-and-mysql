<?php
    include_once './includes/db.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $q = "DELETE from skills where id ='$id'";
        $res = mysqli_query($connection,$q);
        if($res){
            echo "<script>alert('Deleted skill!!!')</script>";
            header('location:skills.php');
        }
    }
?>