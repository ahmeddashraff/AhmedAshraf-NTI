<?php 
    if(! isset($_SESSION['phone_number']) && ! isset($_SESSION['result'])){
        header('location:Number.php');die;
    }
?>