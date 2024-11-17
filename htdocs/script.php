<?php
if (isset($_GET['user']) && (isset($_GET['gen']))){
    $user=$_GET['user'];
    $gen=$_GET['gen'];
    echo $user .'<br>'. $gen;
}
?>