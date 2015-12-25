<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml/DTD/xhtml11-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="eng">

	<head>
		<title>TP3 - Données</title>
		<meta http-equiv="content-type" 
			content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
	</head>
	
	<body>
<?php
	$db = mysql_connect('localhost','login', 'password');
	mysql_select_db('TP3', $db);
	
	echo "<h1>TP3</h1>";
	
	$dataB = file ('dataSep-25-2015.csv');
	
	foreach ($dataB as $line_num => $line) {
		$info = explode ("|", $line);
		printf(print_r($info, true)); //print_r($dataB, true)
		$req = mysql_query('insert into TP3_DATA ( $info[0], $info[1], $info[2], $info[3])');
	}
	
	

?>
	</body>

</html>