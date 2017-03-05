<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inserta tu juego aquí</title>
<script type="text/javascript" src="funciones.js"></script>
<script>

var orden=1;
function clonarNodos()
{
  var id=document.getElementById("enlaces");
  var nuevos=id.cloneNode(true);
  nuevos.style.id='enlaces'+orden;
  orden++;
  id=document.getElementById("enlacesnuevos");
  id.appendChild(nuevos);
}

</script>
 <script type="text/javascript">
    function OnDropDownChange(dropDown) {
        var selectedValue = dropDown.options[dropDown.selectedIndex].value;
        document.getElementById("trat").value = selectedValue;
	
    }
 </script>
<link rel="stylesheet" type="text/css" href="style.css" />

<body>
<form id="form1" name="form1" method="post" action="envia.php">
  <b>Nombre del juego:</b>
    <input type="text" name="nombre" id="nombre" />
<div class="form">
        	<label for="message" style="font-weight:bold;display: block;">Descripci&oacute;n del juego:</label>
        	<textarea rows="5" onkeyup="contar(this);" cols="100" name="descripcion" id="descripcion"></textarea><span id="letras">500 caracteres</span>
        </div>
  <b>Link del juego:</b>
    <input type="text" name="linkjuego" id="linkjuego" /><br>
<script>
document.write("<select name=\"ver\" onChange=\"OnDropDownChange(this);\"><option selected=\"selected\">Selecciona el lenguaje</option><option>-----</option><option></option><option value=\"<script type='text/javascript' src='http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject.js'><\/script><script type='text/javascript'><!-- function GetUnity() { if (typeof unityObject != 'undefined') { return unityObject.getObjectById('unityPlayer'); } return null; } if (typeof unityObject != 'undefined') { var params = { backgroundcolor: '000000', bordercolor: '000000', textcolor: 'FFFFFF', disableContextMenu: true }; unityObject.embedUnity('unityPlayer', '', document.documentElement.clientWidth, document.documentElement.clientHeight, params); } //--> --> <\/script> <div id='unityPlayer' style='width: 100%; height: 100%; visibility: visible;'><embed type='application/vnd.unity' style='display: block; width: 100%; height: 100%;' width='100%' height='100%' tabindex='0' backgroundcolor='000000' bordercolor='000000' textcolor='FFFFFF' disablecontextmenu='true' firstframecallback='unityObject.firstFrameCallback();' src=''></div>\">Flash</option><option value=\"\">Java</option><option value=\"\">Unity3D</option><option value=\"\">iFrame</option></select>");</script>
<br>
<textarea id="trat" style="width: 490px; height: 60px;"></textarea>
<br>
  <b>Miniatura:</b>
    <input type="text" name="miniatura" id="miniatura" /><br>
<b>Categor&iacute;a:</b>
<select name="cat">
            <option selected="selected">Selecciona la categor&iacute;a</option>
            <option>-----</option>
            <option></option>
<option value="Acción">Acci&oacute;n</option>
<option value="Animacion">Animaci&oacute;n</option>
<option value="Aventuras">Aventuras</option>
<option value="Bestias">Bestias</option>
<option value="Cartas">Cartas</option>
<option value="Chicas">Chicas</option>
<option value="Clásicos">Cl&aacute;sicos</option>
<option value="Coches">Coches</option>
<option value="Colorear">Colorear</option>
<option value="Curiosidades">Curiosidades</option>
<option value="Deportes">Deportes</option>
<option value="Estrategia">Estrategia</option>
<option value="Habilidad">Habilidad</option>
<option value="Lucha">Lucha</option>
<option value="Multijugador">Multijugador</option>
<option value="Música">M&uacute;sica</option>
<option value="Naves">Naves</option>
<option value="Plataformas">Plataformas</option>
<option value="Puzzles">Puzzles</option>
<option value="Tiempo Real MMO">Tiempo Real MMO</option>
<option value="Tiros">Tiros</option>
          </select><br>
<div class="form">
        	<label for="message" style="font-weight:bold;display: block;">Reglas del juego:</label>
        	<textarea rows="5" onkeyup="contar(this);" cols="100" name="reglas"  id="descripcion"></textarea><span id="letras">500 caracteres</span>
        </div>
<b>Controles:</b><br>
<i>Tecla: </i><input type="text" name="tecla0" id="tecla" /> - <i>Acci&oacute;n: </i><input type="text" name="accion0" id="accion" /><br>
<i>Tecla: </i><input type="text" name="tecla1" id="tecla" /> - <i>Acci&oacute;n: </i><input type="text" name="accion1" id="accion" /><br>
<i>Tecla: </i><input type="text" name="tecla2" id="tecla" /> - <i>Acci&oacute;n: </i><input type="text" name="accion2" id="accion" /><br>
<i>Tecla: </i><input type="text" name="tecla3" id="tecla" /> - <i>Acci&oacute;n: </i><input type="text" name="accion3" id="accion" /><br>
<i>Tecla: </i><input type="text" name="tecla4" id="tecla" /> - <i>Acci&oacute;n: </i><input type="text" name="accion4" id="accion" /><br>
<i>Tecla: </i><input type="text" name="tecla5" id="tecla" /> - <i>Acci&oacute;n: </i><input type="text" name="accion5" id="accion" /><br>
<i>Tecla: </i><input type="text" name="tecla6" id="tecla" /> - <i>Acci&oacute;n: </i><input type="text" name="accion6" id="accion" /><br>
<i>Tecla: </i><input type="text" name="tecla7" id="tecla" /> - <i>Acci&oacute;n: </i><input type="text" name="accion7" id="accion" /><br>
<i>Tecla: </i><input type="text" name="tecla8" id="tecla" /> - <i>Acci&oacute;n: </i><input type="text" name="accion8" id="accion" /><br>
<i>Tecla: </i><input type="text" name="tecla9" id="tecla" /> - <i>Acci&oacute;n: </i><input type="text" name="accion9" id="accion" /><br>
<br>
<input type="submit" name="button" id="button" value="Enviar">
</form>
</body>
</html>
