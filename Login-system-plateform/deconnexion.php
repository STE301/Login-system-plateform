<?php
    session_start();
    if(isset($_POST['deconex'])){
        session_destroy();
        header("location:index.php");
        exit();
    }     
?>