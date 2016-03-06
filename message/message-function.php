<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF8">
    <title>发布留言</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/11/16
 * Time: 23:14
 */
include_once("config.php");
date_default_timezone_set('PRC');
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$sql = "INSERT INTO liuyan(id,name,mail,message,datetime) VALUES (NULL,'$name','$mail','$message','".date("Y-m-d H:i:s",time())."')";
echo "$name$mail$message";

if(empty($name)){
    die("Name is empty");
}
elseif(empty($mail)){
    die("Mail is empty");
}
elseif(empty($message)){
    die("Message is empty");
}
else{
    $result = mysql_query($sql,$coon);

    if ($result > 0) {
        echo "<script>alert('留言成功！');window.location='message.php';</script>留言成功！";

    } else {
        die("留言失败！");
    }

}
?>
</body>
</html>