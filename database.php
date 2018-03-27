<html>
<body>

<?php

//ENTER YOUR DATABASE CONNECTION INFO BELOW:
$hostname="db722400680.db.1and1.com";
$database="db722400680";
$username="dbo722400680";
$password="dob281085";

//DO NOT EDIT BELOW THIS LINE
$link = mysql_connect($hostname, $username, $password);
if (!$link) {
die('Connection failed: ' . mysql_error());
}
else{
     echo "Connection to MySQL server " .$hostname . " successful!
" . PHP_EOL;
}

$db_selected = mysql_select_db($database, $link);
if (!$db_selected) {
    die ('Can\'t select database: ' . mysql_error());
}
else {
    echo 'Database ' . $database . ' successfully selected!';
}

$sql="INSERT INTO test (firstname, surname)

VALUES

('$_POST[firstname]','$_POST[surname]')";


if (!mysql_query($sql,$con))

  {
  die('Error: ' . mysql_error());
  }

echo "1 record added";

mysql_close($link);

?>
</body>

</html>
