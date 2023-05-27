<?php
require 'jobs.php';
$str = new howlr2;
$str->setId($_REQUEST['id']);
$str->setLat($_REQUEST['lat']);
$str->setLng($_REQUEST['lng']);
$status = $str->updateLatLngJobs();
if($status == true) {
    echo "Updated...";
}
else {
    echo "Failed!";
}
print_r($_REQUEST);
?>