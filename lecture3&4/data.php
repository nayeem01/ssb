<?php
    $db  = mysqli_connect("localhost", "root", "","registration");

    if ($db) {
       
     }else{
         die("error" . mysqli_error($db) );
     }
?>