
<html>
<head>
<meta charset="UTF-8">
<title>প্রশিক্ষণ ডাটাবেস</title>
</head>
<body>





 



<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt1",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");

$sql="INSERT INTO tinfo values('$_POST[sno]','$_POST[name]','$_POST[designation]','$_POST[tf]','$_POST[tfcountry]','$_POST[tfsdate]','$_POST[tfedate]','$_POST[status]')";

if(mysql_query($sql,$conn))
{
include("home.php");
}
else
{
echo "Record not added<br/>";
}


?>

</body>

</html>

