<?php

require_once(dirname(__FILE__) . '/Settings.php');
$link=mysql_connect($db_server, $db_user, $db_passwd); 
mysql_select_db($db_name,$link) OR DIE ("Error: Imposible Conectar");

$id = (int)$_GET['id'];
 
$sql = "SELECT * FROM juegos WHERE id=".$id." LIMIT 1";
$query = mysql_query($sql, $link) or exit(mysql_error());
 
if( !$query || mysql_num_rows($query) <= 0 )
  exit('No se encontraron resultados');
 
$row = mysql_fetch_assoc($query);

echo
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>'.$row['nombre'].'</title>
<link rel="stylesheet" type="text/css" href="css/inicio.css">
<style>

</style>
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script type="text/javascript">

</script>
</head>
<body>
<div class="top"><img src="http://ikillcraft.a0001.net/logoikill.png" style="width:199px; height:30px; position:relative; padding:10px;" /><br><span style="font-size:24px;position:relative;left:10px;font-weight:bold;">'.$row['nombre'].'</span></div>
<div class="game">';
// Games go here

$query2 = "SELECT linkjuego,tipo,ancho,alto,code FROM juegos";
$result2 = mysql_query($query2) or die(mysql_error());

while($rs=mysql_fetch_assoc($result2)) {
$tipo_juego=$rs['tipo_juego'];

// Comprobamos que tipo de juego es: 
if($tipo_juego==='unity'){
   echo '<object blablalbalbalblalba src="'.$rs['link_juego'].'" blablabla></object>';
} elseif($tipo_juego==='flash'){
   echo '<object flash blablalbalbalblalba src="'.$rs['link_juego'].'" blablabla></object>';
} elseif($tipo_juego==='iframe'){
   echo '<iframe src="'.$rs['link_juego'].'" bla blablab lba></iframe>';
} else {
   echo 'Tipo de juego desconocido. Link:'.$rs['link_juego'];
}

}

echo '</div>
<div class="infobox"><b style="font-size:16px;">Controles:</b>';

/* Supongamos que la variable que tiene el resultado de la query se llama $row */
// Primero toca quitar el serialize a lo que hemos sacado. Para ello unserialize().
$teclas = unserialize($row['teclas']);
$acciones = unserialize($row['acciones']);
// Ahora ya tenemos metidos en un array las teclas y las acciones. Toca mostrarlos en una tabla
echo '<table>';
// Queremos tener el index, para obtener la accion que corresponde a la tecla.
foreach($teclas as $index=>$tecla){
   echo '<tr><td>'.$tecla.'</td><td>'.$acciones[$index].'</td></tr>';
}
// cerramos tabla y nos vamos :P
echo '</table><br>
<CENTER>
<TABLE CELLSPACING=1 CELLPADDING=1 WIDTH=300 BORDER=0 STYLE="border:1px solid black; margin-left:-10px;">
<TR>
<TD BGCOLOR="#FAFAFA">
<CENTER>
<SPAN STYLE="font-size:11px;font-family:Tahoma;color:black;font-weight:bold"> .Comentarios De Los Usuarios.
</SPAN>
</CENTER>
</TD>
</TR>

<TR>
<TD HEIGHT=1 BGCOLOR=black>
</TD>
</TR>

<TR>
<TD BGCOLOR="#FEFEFE">
<SPAN STYLE="font-size:11px;font-family:Tahoma;color:black;display:none;">'; 

$resultComen = mysql_query("SELECT * FROM comentarios WHERE id_juego='$id' ORDER BY id ASC");
while($rowComen = mysql_fetch_array($resultComen))
{
echo '
<FONT COLOR=RED>
<B>'. $rowComen["nick"] .'</B>
</FONT>'. $rowComen["comentario"] .'
<BR><br>';
}
if( !$resultComen || mysql_num_rows($resultComen) <= 0 )
echo '<center>No hay ning&uacute;n comentario. :(</center>';

mysql_free_result($resultComen);

echo '</SPAN>
<center><H3>COMENTARIOS DESACTIVADOS. :(</H3></center>
</TD>
</TR>
</TABLE>
</CENTER>';

echo '<h3>Inserta tu comentario aqu&iacute;:</h3><h3>Hay problemas con el sistema de comentarios, lo habilitaremos lo antes posible.</h3><div style="display:none;">

<FORM NAME="miFormu" ACTION="nuevoComentario.php" 
METHOD="post"> 
<INPUT TYPE="hidden" NAME="id" VALUE="'. $id .'"> 
Nick : <INPUT TYPE="text" NAME="nick" SIZE=20 MAXLENGTH=20> 
<BR> 
Comentario: <INPUT TYPE="text" NAME="comentario" 
SIZE=28 MAXLENGTH=250> 
<BR> 
<INPUT TYPE="submit" CLASS="boton" VALUE="Enviar Comentario"> 
</FORM>

<h3>Necesitas loguearte para enviar un mensaje.</h3></div></div>';

echo '</body></html>';



exit; // o no, si deseas incluir más información

?>
