<?php 

session_start();
$app_name = "DISTANT ELOGISTICS";

function connect(){
    return $conn = new mysqli('localhost','root','root','distant');
}

?>