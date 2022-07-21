<html>
<body>
<?php
$mysql_hostname = '10.0.0.13';
$mysql_username = 'root';
$mysql_password = 'It12345!';
$mysql_database = 'random';
$mysql_port = '3306';
$mysql_charset = 'UTF8';

$connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);

if($connect->connect_errno){
    echo '[연결실패..] : '.$connect->connect_error.'';
}else{
    echo '[연결성공!]'.'<br>';
}

mysqli_query($connect,"INSERT INTO person VALUES ('$_POST[user_name]', '$_POST[user_phone]', '$_POST[user_email]');");
mysqli_close($connect);
echo ("<meta http-equiv='Refresh' content='1; URL=event.php'>");
?>
</body>
</html>