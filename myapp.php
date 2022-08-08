<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <p>Hello World</p>
 <?php
  
// PHP program to obtain IP address of
// the server
  
// Creating a variable to store the
// server address
$ip_server = $_SERVER['SERVER_ADDR'];
  
// Printing the stored address
echo "Server IP Address is: $ip_server";
  
?>
 </body>
</html>