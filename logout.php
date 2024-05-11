<?php
session_start();
include_once 'core/funcrion.php';
session_destroy();
redirect('login.php');
die();
?>