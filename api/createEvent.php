<?php
include 'dbSetup.php';

$eventName = mysql_real_escape_string($_POST['eventName']);
$eventDesc = mysql_real_escape_string($_POST['eventDesc']);
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$startTime = $_POST['startTime'];
$endTime = $_POST['endTime'];

$sql = 'INSERT INTO events (event_name, event_desc , start_date, end_date, start_time, end_time)
        VALUES ("'.$eventName.'", "'.$eventDesc.'", "'.$startDate.'", "'.$endDate.'", "'.$startTime.'", "'.$endTime.'")';
$result = mysql_query($sql);
if ($result) {
  echo 'New record added';
}


?>
