<?php
require 'db.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM menu WHERE id=$id";
    mysqli_query($db,$query);
    $query="DELETE FROM submenu WHERE parent_menu_id=$id";
    mysqli_query($db,$query);
header('location:../admin/index.php?managemenu');
}

?>