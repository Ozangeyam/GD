<?php
require 'site_name.php';
require 'email_file/mail-function.php';
require_once 'user/inc/functions.inc.php';
if (isset($_SESSION['id'])){
    header("Location: user/dashboard");
    exit();

}



