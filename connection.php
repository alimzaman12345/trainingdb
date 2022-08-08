<?php

$conn = mysqli_connect('localhost', 'root', ''); 

mysqli_query($conn,'SET CHARACTER SET utf8');
mysqli_query($conn,"SET SESSION collation_connection='utf8_general_ci'");	
 
if (! $conn) {  
         die("Connection failed" . mysqli_connect_error());  
}  
else {  
         mysqli_select_db($conn, 'motjt1');  
}  



?>