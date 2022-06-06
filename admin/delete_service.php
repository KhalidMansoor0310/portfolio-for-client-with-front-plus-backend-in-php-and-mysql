<?php
    include_once './includes/db.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $q = "DELETE from services where id ='$id'";
        $res = mysqli_query($connection,$q);
        if($res){
            echo "<script>alert('Deleted services!!!')</script>";
            header('location:services.php');
        }
    }
?>