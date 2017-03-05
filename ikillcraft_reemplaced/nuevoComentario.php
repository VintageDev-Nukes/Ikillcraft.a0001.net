<?
if(isset($HTTP_POST_VARS["id"]) && isset($HTTP_POST_VARS["nick"]) && isset($HTTP_POST_VARS["comentario"])) {
if($HTTP_POST_VARS["comentario"] != "")
{
if($HTTP_POST_VARS["nick"] == "")
{
$nickNuevo = "anonimo";
}
else
{
$nickNuevo = $HTTP_POST_VARS["nick"];
}
$resultCom2 = mysql_query("SELECT id FROM comentarios ORDER BY id DESC LIMIT 0,1");
$rowCom2 = mysql_fetch_array($resultCom2);
$con = $rowCom2["id"];
mysql_free_result($resultCom2);

$con++;
$idNoticia = $HTTP_POST_VARS["id"];
$comentarioNoticia = $HTTP_POST_VARS["comentario"];

mysql_query("INSERT INTO comentarios VALUES
('$con','$idNoticia','$nickNuevo','$comentarioNo ticia')");

echo "Comentario Enviado Con Exito.<BR>Espere Unos Segundos...<SCRIPT LANGUAGE="javascript">window.location.href = "".getenv('HTTP_REFERER')."";</SCRIPT>"; }
else
{
echo "Debe Introducir Un Comentario.";
}
}
?>
