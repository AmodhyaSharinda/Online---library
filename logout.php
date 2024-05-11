<?php

@include 'config.php';

session_start();
session_unset();
session_destroy();
setcookie("user_name", "", time()-3600);
setcookie("admin_name", "", time()-3600);

header('location:login_form.php');

?>