<?php
require_once(dirname(__FILE__) . '/Settings.php');

function reem($texto1) {

//Rememplazamos caracteres especiales latinos minusculas
$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', '\"', '€', 'ü', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', 'Ü', 'ç', 'Ç', '¿', '¡');
$repl = array('&aacute;', '&eacute;', '&iacute;', '&oacute;', '&uacute;', '&ntilde;', '&quot;', '&euro;', '&uuml;', '&Aacute;', '&Eacute;', '&Iacute;', '&Oacute;', '&Uacute;', '&Ntilde;', '&Uuml;', '&ccedil;', '&Ccedil;', '&#191;', '&#161;');
$texto1 = str_replace($find, $repl, $texto1);

return $texto1;

} 

function tecla2($cadena) {

//Rememplazamos caracteres especiales latinos minusculas
$find2 = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "H", "J", "K", "L", "M", "N", "Ñ", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "flechas", "enter", "control", "alt", "espacio", "der", "izq", "mover", "shift", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
$repl2 = array("<div class='tecla'>A</div>", "<div class='tecla'>B</div>", "<div class='tecla'>C</div>", "<div class='tecla'>D</div>", "<div class='tecla'>E</div>", "<div class='tecla'>F</div>", "<div class='tecla'>G</div>", "<div class='tecla'>H</div>", "<div class='tecla'>I</div>", "<div class='tecla'>H</div>", "<div class='tecla'>J</div>", "<div class='tecla'>K</div>", "<div class='tecla'>L</div>", "<div class='tecla'>M</div>", "<div class='tecla'>N</div>", "<div class='tecla'>Ñ</div>", "<div class='tecla'>O</div>", "<div class='tecla'>P</div>", "<div class='tecla'>Q</div>", "<div class='tecla'>R</div>", "<div class='tecla'>S</div>", "<div class='tecla'>T</div>", "<div class='tecla'>U</div>", "<div class='tecla'>V</div>", "<div class='tecla'>W</div>", "<div class='tecla'>X</div>", "<div class='tecla'>Y</div>", "<div class='tecla'>Z</div>", "<div class='tecla'>a</div>", "<div class='tecla'>b</div>", "<div class='tecla'>c</div>", "<div class='tecla'>d</div>", "<div class='tecla'>e</div>", "<div class='tecla'>f</div>", "<div class='tecla'>g</div>", "<div class='tecla'>h</div>", "<div class='tecla'>i</div>", "<div class='tecla'>j</div>", "<div class='tecla'>k</div>", "<div class='tecla'>l</div>", "<div class='tecla'>m</div>", "<div class='tecla'>n</div>", "<div class='tecla'>o</div>", "<div class='tecla'>p</div>", "<div class='tecla'>q</div>", "<div class='tecla'>r</div>", "<div class='tecla'>s</div>", "<div class='tecla'>t</div>", "<div class='tecla'>u</div>", "<div class='tecla'>v</div>", "<div class='tecla'>w</div>", "<div class='tecla'>x</div>", "<div class='tecla'>y</div>", "<div class='tecla'>z</div>", "<img title='Flechas de posicionamiento' src='ico/flechas.png' />", "<img title='Enter' src='ico/enter.png' />", "<img title='Ctrl/Control' src='ico/control.png' />", "<img title='Alt' src='ico/alt.png' />", "<img title='Espacio' src='ico/space.png' />", "<img title='Click derecho' src='ico/mouse_click_der.png' />", "<img title='Click izquierdo' src='ico/mouse_click_izq.png' />", "<img title='Mover el rat&oacute;n' src='ico/mouse_movi.png' />", "<img title='Shift' src='ico/shift.png' />", "<div class='tecla'>1</div>", "<div class='tecla'>2</div>", "<div class='tecla'>3</div>", "<div class='tecla'>4</div>", "<div class='tecla'>5</div>", "<div class='tecla'>6</div>", "<div class='tecla'>7</div>", "<div class='tecla'>8</div>", "<div class='tecla'>9</div>", "<div class='tecla'>0</div>");
$cadena = str_replace($find2, $repl2, $cadena);

return $cadena;

}  

function sanear_string($string)
{

    $string = trim($string);

    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );

    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );

    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );

    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );

    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );

    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C',),
        $string
    );

    //Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(
        array("\\", "¨", "º", "-", "~",
             "#", "@", "|", "!", "\"",
             "·", "$", "%", "&", "/",
             "(", ")", "?", "'", "¡",
             "¿", "[", "^", "`", "]",
             "+", "}", "{", "¨", "´",
             ">", "< ", ";", ",", ":",
             ".", " "),
        '',
        $string
    );


    return strtolower($string);
}

$miniatura = $_REQUEST['miniatura'] ;
$linkjuego = $_REQUEST['linkjuego'] ;
$nombre = reem($_REQUEST['nombre']) ;
$descripcion = reem($_REQUEST['descripcion']) ;
$cat = reem($_POST['cat']) ;
$cat2 = sanear_string($_POST['cat']);
    $perinv=$_POST['tecla'];//Recibir
    $total=count($perinv);//Contar el arreglo
    for ($i=0;$i<$total;$i++)
    {
    	$conexion = mysql_connect ($db_server, $db_user, $db_passwd) or die ('Error: ' . mysql_error());
	mysql_select_db ($db_name);
        mysql_query("INSERT INTO juegos (tecla) values (".tecla2($perinv[$i]).")", $conexion);
    }  
    $perinv2=$_POST['accion'];
    $total=count($perinv2);//Contar el arreglo
    for ($i=0;$i<$total;$i++)
    {
	$conexion = mysql_connect ($db_server, $db_user, $db_passwd) or die ('Error: ' . mysql_error());
	mysql_select_db ($db_name);
	mysql_query("INSERT INTO juegos (accion) values (".reem($perinv2[$i]).")", $conexion);
    }

mysql_connect ($db_server, $db_user, $db_passwd) or die ('Error: ' . mysql_error());
mysql_select_db ($db_name);
$query="INSERT INTO juegos (miniatura, linkjuego, nombre, descripcion, categoria, cat2) VALUES ('$miniatura', '$linkjuego', '$nombre', '$descripcion', '$cat', '$cat2')";
mysql_query($query) or die ('Error en la carga de datos');
header("location:okay.html")
?>
