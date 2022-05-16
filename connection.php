<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_errno($link));
mysqli_select_db($link,"CAT_1") or die(mysqli_errno($link));
?>