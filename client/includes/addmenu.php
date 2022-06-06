<?php
require 'db.php';
if(isset($_POST['addmenu'])){
    // print_r($_POST);
    $menu_name=mysqli_real_escape_string($db,$_POST['menu-name']);
    $menu_link=mysqli_real_escape_string($db,$_POST['menu-link']);

    $query="INSERT INTO menu(name,action) VALUES('$menu_name','$menu_link')";
    mysqli_query($db,$query);
header('location:../admin/index.php?managemenu');
}




if(isset($_POST['addsubmenu'])){
    // print_r($_POST);
    $menu_name=mysqli_real_escape_string($db,$_POST['submenu-name']);
    $parent_id=mysqli_real_escape_string($db,$_POST['parent-id']);

    $menu_link=mysqli_real_escape_string($db,$_POST['submenu-link']);

    $query="INSERT INTO submenu(name,action,parent_menu_id) VALUES('$menu_name','$menu_link',$parent_id)";
    mysqli_query($db,$query);
header('location:../admin/index.php?managemenu');
}
?>