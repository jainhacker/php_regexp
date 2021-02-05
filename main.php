<?php 
session_start();
if(isset($_SESSION['msg'])){
echo "u are log in ",$_SESSION['msg'];
}

?>