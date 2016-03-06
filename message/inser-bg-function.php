<?php
include("config.php");
$url = @$_POST['url'];
$sql = "INSERT INTO bgURL(id,URL) VALUES (NULL,'$url')";
$result = mysql_query($sql,$coon);
if($result>0){
    echo "<script>alert('SUCESSES!');</script>";
    header("Location:inser-bg.php");
}else{
    echo "<script>alert('FAIL！');</script>";
    header("Location:inser-bg.php");
}
?>