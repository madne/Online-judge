<?php
$handel = $_GET['handel'];
$start = $_GET['start'];
$end = $_GET['end'];
$date = $_GET['date'];
$conn = mysqli_connect('localhost','root','','mydatabase1');
$sql = "insert into video_events (handel,date,start_hour,end_hour) values ('$handel','$date',$start,$end) ";
$query = mysqli_query($conn,$sql);
if($query){
    echo 'inserted sucessfully';    
}
?>