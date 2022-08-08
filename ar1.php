<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

// connect to database. 
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt1",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['sno']) && is_numeric($_GET['sno']))

{

// get id value

$sno = $_GET['sno'];



// delete the entry

$result = mysql_query("UPDATE tinfo SET status=0 WHERE sno=$sno")

or die(mysql_error());



// redirect back to the view page

header("Location: changestatus.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

echo "Fail!";

}



?>

