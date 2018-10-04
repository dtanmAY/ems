<?php
$con=mysqli_connect('localhost', 'root', '', 'online_ems');
if(!$con)
{
      die("DB connection error,".mysqli_error());
}
$db_selected=mysqli_select_db($con, 'online_ems');
if(!$db_selected)
{
  die("DB selection error!".mysqli_error());
}
?>
