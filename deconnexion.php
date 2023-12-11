<?php
session_start() ;
unset($_SESSION['admin']) ;
unset($_SESSION['autorisation']) ;
header("location: formulaire.php") ;
?>