<?php 
require_once(dirname(__FILE__) . '/db.php');
$Login = new database();
$Login->connect();
$sql = "SELECT * FROM juegos"; 
$query = $Login->Query($sql);
?> 
<html> 
<head> 
<title>ALgo</title> 
</head> 
<body> 

<table> 
<? 
  while($rs=mysql_fetch_array($query)) 
  { 
    echo "<tr>" 
           ."<td>".$rs['id']."</td>" 
           ."<td>".$rs['miniatura']."</td>" 
           ."<td>".$rs['linkjuego']."</td>" 
           ."<td>".$rs['nombre']."</td>" 
           ."<td>".$rs['descripcion']."</td>" 
           ."</tr>"; 
  } 
?> 
</table> 

</body> 
</html>
