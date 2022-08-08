<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Tables</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<?php

include("topmenu.php");

?>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->
<?php
include("sidebar.php");

?>



<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <?php 

// connect to database. 
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt1",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");

// we'll select all the information in the database for five dogs. 
$query = "SELECT * FROM tinfo WHERE status=1"; 

// actually "do" the query. 
$result = mysql_query($query); 


print "<center>";

print "<table width=100%>";
 print "<tr bgcolor=#2bf05e>";  

  
    echo "<th>নং</th>"; 
   echo "<th>নাম</th>"; 
echo "<th>পদবী</th>";

   
echo "<th>বিদেশ প্রশিক্ষণ বিষয়</th>";
   echo "<th>দেশ</th>";  
    echo "<th>শুরু</th>";
   echo "<th>শেষ</th>";
  
    
  print "<tr/>";







// সকল প্রশিক্ষণার্থীদের তথ্য দেখাবে
while ($row = mysql_fetch_array($result)) 
{ 
 print "<tr bgcolor=#eae7e3>";  

 
    
   echo "<td>$row[sno]</td>";
   echo "<td>$row[name]</td>";
  
   echo "<td>$row[designation]</td>";
   
   
   echo "<td>$row[tf]</td>";
     echo "<td>$row[tfcountry]</td>";
	  
   echo "<td> $row[tfsdate]</td>";
   echo "<td>$row[tfedate]</td>";
    
	  
  print "<tr/>";
  print "<tr/>";
   
} 

//print "<a href=finduserbypass.php>Back</a>";
print "</center>";



?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
 
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
