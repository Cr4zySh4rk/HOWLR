<?php
require 'db/config.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: bootup.php");
