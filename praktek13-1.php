<html>
<head>
<title>Koneksi ke MySQL</title>
</head>
<body>
<?php
 	$link = mysql_connect('localhost','root')
 	or die('Could not connect'.mysql_error());
 	echo 'Connected successfuly';
 	mysql_select_db('ShowRoomMobil') or die ('Could not select database');
 ?>
 </body>
 </html>