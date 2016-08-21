<?php
$handel = $_GET['handel'];
$start = $_GET['start'];
$end = $_GET['end'];
$date = $_GET['date'];
$conn = mysqli_connect('localhost','root','','mydatabase1');
$sql = "delete from video_requests where handel='$handel' and start_hour=$start and end_hour=$end and date='$date' ";
$query = mysqli_query($conn,$sql);
if($query){
    echo 'deleted sucessfully ';    
}
?>