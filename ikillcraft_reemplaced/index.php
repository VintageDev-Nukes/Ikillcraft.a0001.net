<?php
session_start();
// register session to change language
session_register("mylang");
// if session isn't set 
if(!isset($_SESSION['mylang'])) 
{
	$_SESSION['mylang']="es";
}
//include language class


if(isset($_GET['lang'])) 
{
	switch($_GET['lang']) 
	{
		case "es":
		$_SESSION['mylang']="es";
		break;
		case "en":
		$_SESSION['mylang']="en";
		break;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Free Minecraft Premium Accounts!</title>
<link rel="stylesheet" href="web.css" />
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script type="text/javascript">
<!--
    function toggle_visibility() {
       var e = document.getElementById('repro');
       if(e.style.visibility == 'visible') {
          e.style.visibility = 'hidden';
	  document.getElementById("repro2").style.marginLeft = "0px"
	  document.getElementById("repro3").innerHTML = "&raquo;" }
       else {
          e.style.visibility = 'visible';
	  document.getElementById("repro2").style.marginLeft = "201px"
	  document.getElementById("repro3").innerHTML = "&laquo;" }
    }
//-->
</script>
</head>
<body>

<div class="top"><img src="http://i.imgur.com/XZtiBPp.png" style="position:relative; top:50%; margin-top:-45px; height:90px; left:20px;" /><div style="height:50px;position:absolute;top:12px;right:20px; width:200px;"><font color="#fff" style="font-size:16px;text-align:center;position:relative;top:-4px;"><b>Lenguaje:</b></font><br><div style="position:absolute;top:-14px;right: -100px;width: 300px;"><span class="point">&#183;</span><img src="flags/spain.gif" alt="Espa&ntilde;ol" class="flag"><span class="point">&#183;</span><img src="flags/united_kingdom.gif" alt="Ingl&eacute;s" class="flag"><span class="point">&#183;</span></div></div></div>
<div class="content">

<?php
switch(@$_GET['function']){
 
   case 'incio':
      include_once('content.php');
      break;
 
   case 'codes':
      include_once('privada.php');
      break;
 
   default:
      include_once('content.php');
      break;
}
?>

<div class="push"></div>
</div>

<table style="color:#B40404; margin:5px; text-shadow:1px 1px #3B0B0B;" id="table">
<tr>
<td><div id="options">Index</div></td>
<td><div id="options">Aportes</div></td>
<td><div id="options">Foro</div></td>
</tr>
</table>

<div class="footer" style="border-top:3px #000 solid;height: 100px;"><div class="footer2" style="position:relative;top:50%;margin-top:-32px;">

<?php 
$fp = fopen("id.txt","r");  
//Se abre el archivo contador.txt, la r de read 

$visitas = intval(fgets($fp));  
// Se lee las visitas y se indica con intval para que se devuela un valor entero 

$visitas++;  
//Se agregan las visitas 

fclose($fp);  
// Se cierra el archivo 

$fp = fopen("id.txt","w");  
// Se abre en modo de escritura 

fputs($fp,$visitas);  
// Se escriben las visitas  
?>
<?php echo text9." "; ?>
<?
echo number_format($visitas);  
// Se muestran las visitas 
?> <?php echo text6; ?><br>|| <?php echo text7; ?> || (Skype: <h3 style="display: inline;">ikillnukes</h3>) ||<br><font color="000000">||</font> <a href="hack.php"><?php echo text8; ?></a> <font color="000000">||</font></div>
</div>

</div>

<div style="float: left; position: fixed;top:50%;margin-top:-125px;width:250px; height:250px;">
<div id="repro" style="width: 200px; height: 250px; background-color: rgb(255, 255, 255); border: 3px solid rgb(0, 0, 0); visibility: hidden; top: 4px; left: -4px;position: relative;"><object width="200" height="250" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="gsPlaylist8363415719" name="gsPlaylist8363415719"><param name="movie" value="http://grooveshark.com/widget.swf"><param name="wmode" value="window"><param name="allowScriptAccess" value="always"><param name="flashvars" value="hostname=grooveshark.com&amp;playlistID=83634157&amp;p=0&amp;bbg=000000&amp;bth=000000&amp;pfg=000000&amp;lfg=000000&amp;bt=FFFFFF&amp;pbg=FFFFFF&amp;pfgh=FFFFFF&amp;si=FFFFFF&amp;lbg=FFFFFF&amp;lfgh=FFFFFF&amp;sb=FFFFFF&amp;bfg=666666&amp;pbgh=666666&amp;lbgh=666666&amp;sbh=666666"><object type="application/x-shockwave-flash" data="http://grooveshark.com/widget.swf" width="200" height="250"><param name="wmode" value="window"><param name="allowScriptAccess" value="always"><param name="flashvars" value="hostname=grooveshark.com&amp;playlistID=83634157&amp;p=0&amp;bbg=000000&amp;bth=000000&amp;pfg=000000&amp;lfg=000000&amp;bt=FFFFFF&amp;pbg=FFFFFF&amp;pfgh=FFFFFF&amp;si=FFFFFF&amp;lbg=FFFFFF&amp;lfgh=FFFFFF&amp;sb=FFFFFF&amp;bfg=666666&amp;pbgh=666666&amp;lbgh=666666&amp;sbh=666666"><span><a href="http://grooveshark.com/search/playlist?q=IkillCraft%20Ikillnukes" title="IkillCraft by Ikillnukes on Grooveshark">IkillCraft by Ikillnukes on Grooveshark</a></span></object></object></div>
<div id="repro2" style="width:50px;height:250px;position:relative;top: -252px;left:-4px;" class="sh2" onclick="toggle_visibility();"><div style="width:100%;line-height:250px;font-weight:bold;color:#fff;"><span class="br" style="width:100%; font-size:12px; text-align:center; top:12px; left:-15px; position:relative;"><style>
.br {
    display: block;
    line-height:15px;
}
</style>R<br>e<br>p<br>r<br>o<br>d<br>u<br>c<br>t<br>o<br>r<br><br>M<br>P<br>3</span><center style="font-size:60px; position:relative; top:-230px; left:7px;" id="repro3">&raquo;</center></div></div>
</div>

</body>
</html>
