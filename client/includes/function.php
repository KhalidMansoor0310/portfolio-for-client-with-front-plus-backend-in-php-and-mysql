<?php

    function header_data($db){
        $q = "SELECT * from header_section";
        $r = mysqli_query($db,$q);
        $result = mysqli_fetch_assoc($r);
        return $result;
    }
    function getAbout($db){
        $q = "SELECT * from About";
        $r = mysqli_query($db,$q);
        $result = mysqli_fetch_assoc($r);
        return $result;
    }
   
   
   






?>