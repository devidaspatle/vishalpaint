<?php
session_start();

if(empty($_SESSION['rsoftId'])){

header("Location:index.php?not");
}
?>