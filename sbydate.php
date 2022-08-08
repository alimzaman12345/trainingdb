<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Report</title>
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


<script>


function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>


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
            <h5>Report table</h5>
          </div>
		  <form action="sbydate.php" method="POST">
		  <button onclick="printDiv('printableArea')" value="Print" class="w3-bar-item w3-button"><img src="print.jpg" height="50" width="50">প্রিন্ট করুন</button>
<center>
তারিখ শুরুঃ<font color=red></font></td><td><input type="date" name="tdate"></td></tr>
তারিখ শেষঃ<font color=red></font></td><td><input type="date" name="t1date"></td></tr>

<input type="submit" value="Search">
</center>

</form></p>
<div id="printableArea"><br/><br/>
<h4><font color="#9764b4">MINISTRY OF TEXTILES AND JUTE.</font></h4>
<h4><font color="#9764b4">Foreign Training Report.</font></h4>
<h4><font color="#9764b4">----------------------------------------------</font></h4>
<?php 

// connect to database. 
$conn=mysql_connect("localhost","root","");
mysql_select_db("motjt1",$conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");


// we'll select all the information in the database for five dogs. 
$query = "SELECT * FROM tinfo WHERE (tfsdate BETWEEN '$_POST[tdate]' AND '$_POST[t1date]') AND status=1"; 

// actually "do" the query. 
$result = mysql_query($query); 


print "<center>";

print "<table width=100%>";
 print "<tr bgcolor=#2bf05e>";  

  
   echo "<th>নং</th>"; 
   echo "<th>নাম</th>"; 
echo "<th>পদবী</th>";

   

   echo "<th>দেশ</th>";  
   echo "<th>তারিখ</th>";
   
  
    
  print "<tr/>";







// সকল প্রশিক্ষণার্থীদের তথ্য দেখাবে
while ($row = mysql_fetch_array($result)) 
{ 
 print "<tr bgcolor=#eae7e3>";  

 
    echo "<td>$row[sno]</td>";
    echo "<td>$row[name]</td>";
  
  echo "<td>$row[designation]</td>";
   
   
  
     echo "<td>$row[tfcountry]</td>";
	  
   echo "<td> $row[tfsdate]</td>";
   
   
	  
  print "<tr/>";
  print "<tr/>";
   
} 

//print "<a href=finduserbypass.php>Back</a>";
print "</center>";











print "</center>";


?>
          </div>
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
