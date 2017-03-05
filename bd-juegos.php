<?php 
include('paginator.class.2.php');
require_once(dirname(__FILE__) . '/Settings.php');
mysql_connect ($db_server, $db_user, $db_passwd) or die ('Error: ' . mysql_error());
mysql_select_db ($db_name);
$query = "SELECT COUNT(*) FROM juegos";
$result = mysql_query($query) or die(mysql_error());
$num_rows = mysql_fetch_row($result);
 $form_query = "SELECT DISTINCT categoria,cat2 FROM juegos ORDER BY categoria DESC";
 $form_result = mysql_query($form_query) or die(mysql_error());

$pages = new Paginator;
$pages->items_total = $num_rows[0];
$pages->mid_range = 9; // Number of pages to display. Must be odd and > 3
$pages->paginate();
?> 
