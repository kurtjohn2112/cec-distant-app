<?php 
include 'functions.php';


if(isset($_GET['user_id'])):
    destroy($_GET['user_id'],'id','users');
endif;
if(isset($_GET['driver_id'])):
    destroy($_GET['driver_id'],'id','drivers');
endif;




?>