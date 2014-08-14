<?php
session_start();
//se non c'� la sessione registrata
//meta http-equiv="refresh" content="10"
if (!session_is_registered('autorizzato')) {
  //echo "<h1>Area riservata, accesso negato.</h1>";
  echo "<script type='text/javascript'>alert('Login Error!');</script>";
  echo '<script language=javascript>document.location.href="index.php"</script>';
 // echo "Per effettuare il login clicca <a href='index.php'><font color='blue'>qui</font></a>";
 // die;
}
 
//Altrimenti Prelevo il codice identificatico dell'utente loggato
session_start();
$cod = $_SESSION['cod']; //id cod recuperato nel file di verifica
if(isset($_GET['lang']))
{
$lang =$_GET['lang'];
$_SESSION['lang']=$lang ;
}
else
{
if(isset($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else
{
//valore di default
$lang = "it";
}
}
# Includo il file di linguaggio interessato
require("{$lang}.php");
?>
<html>
<head>
<title>Py-Temperature</title>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<meta name="generator" content="Bluefish 2.2.3" >
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="style.css">
<link href='style_mob.css' media='only screen and (max-width: 480px), only screen and (max-device-width: 480px)' rel='stylesheet' type='text/css'>


</head>
<body>
<div id="templatemo_wrapper">
<div id="templatemo_header">
<div id="site_title"><h1>Py-Temperature</h1></div>
<div id="templatemo_menu">
<div class="home"><a href="index.php"></a></div>
<ul>
    <li><a href="status.php"><?php echo $output[0] ?></a></li>
    <li><a href="calendarix/index.php"><?php echo $output[1] ?></a></li>
    <li><a href="download.php"><?php echo $output[2] ?></a></li>
    <li><a href="configure.php"><?php echo $output[3] ?></a></li>
    <li><a href="logout.php"><?php echo $output[4] ?></a></li>
    <li><?php echo "<a href='" . $_SERVER['PHP_SELF'] . "?lang=it'>IT</a>";
	      echo "<a href='" . $_SERVER['PHP_SELF'] . "?lang=en'>EN</a>";
	    ?></li>  
    
</ul>
</div></div>
<?php
// richiamo il file di configurazione
require 'mysql.php';
$data = new db();
 
// richiamo le funzioni visualizzazione
$data->connetti();

$device=$data->view_bluetooth(); 
$numfields = mysql_num_fields($device);

$manual=$data->view_manual();
$work=$data->view_work();

// valorizzazione delle variabili con i parametri dal form pulsante save
if(isset($_POST['submit'])&&($_POST['submit']=="Save")){
$a=1;
$b=0;
  if(isset($_POST['temperature'])){
    $temperature = addslashes(filter_var($_POST['temperature'], FILTER_SANITIZE_STRING));
    $data->update_man('temp',$temperature);
    $autor = $_POST['auto'];
    $e = $_POST['bluetooth'];
    	if($autor == 1){
    	$data->update_man('calendar',$a);
    	$data->update_man('button',$b);
    		}
    		else {
    		$data->update_man('calendar',$b);
    		$data->update_man('manual',$a);
    			}
    				if($e == 1){
    	$data->update_man('bt',$a);
    		}
    		else {
    		$data->update_man('bt',$b);
    			}
    	}
    echo '<script language=javascript>document.location.href="configure.php"</script>'; 	}

elseif(isset($_POST['submit'])&&($_POST['submit']=="Uphours")){
	if(isset($_POST['tot_hours'])){
    $tot = addslashes(filter_var($_POST['tot_hours'], FILTER_SANITIZE_STRING));
    $tot = $tot*3600;
			$data->update_work('tot',$tot);
}}

elseif(isset($_POST['submit'])&&($_POST['submit']=="Scan")){
	if ($manual[5]==1){
	echo "<script type='text/javascript'>alert('Bluetooth Active! Disable');</script>";
}
else{
	$data->update_man('scan',1);
}}
elseif(isset($_POST['submit'])&&($_POST['submit']=="Cancel")){
	$id=$_POST['id'];
	$data->delete_bluetooth($id);
}
elseif(isset($_POST['submit'])&&($_POST['submit']=="Modify")){
	$id=$_POST['id'];
	$scan=$_POST['scan'];
	$data->update_bluetooth($scan,$id);
}

elseif(isset($_POST['submit'])&&($_POST['submit']=="Conhours")){
	if(isset($_POST['con_hours'])){
    $con = addslashes(filter_var($_POST['con_hours'], FILTER_SANITIZE_STRING));
			$data->update_work('con',$con);
		}}
		
elseif(isset($_POST['submit'])&&($_POST['submit']=="MinTemp")){
	if(isset($_POST['mintemperature'])){
    $mintemperature=addslashes(filter_var($_POST['mintemperature'], FILTER_SANITIZE_STRING));
    $data->update_man('mintemp',$mintemperature);
		}}
		
elseif(isset($_POST['submit'])&&($_POST['submit']=="+")){
	$a=isset($_POST['temperature']);
	$b=$a+1;
	
}
	
if ($manual[4]==1){
	$check_cal='CHECKED';
//	$check_man='';
}
else{
//	$check_cal='';
	$check_man='CHECKED';
	}
	
	if ($manual[6]==1){
	$check_blu='CHECKED';
}
else{
	$check_blu='';
	}
	
	$tot_ho1=$work[3]/3600;
	$tot_ho=round($tot_ho1,2);

?>

<div id="templatemo_content_wrapper">
<div id="templatemo_content">
<table><FORM name=form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
<tr>

<td>
<table><tr><td>

<table><th><?php echo $output[25] ?></th>
<tr>
<td><?php echo $output[7] ?></td>
<td><?php echo $output[1] ?></td>
<td><?php echo $output[19] ?></td>
<td><?php echo $output[26] ?></td>
</tr>
<tr>
<td><input class="input" type="text" name="temperature" value="<?php echo "$manual[2]" ?>"/></td>
<td><input type="radio" name="auto" value="1" <?php print "$check_cal" ?> /></td>
<td><input type="radio" name="auto" value="2" <?php print "$check_man" ?>/></td>
<td><input type="checkbox" name="bluetooth" value="1" <?php print "$check_blu" ?>/></td></tr>
</table></td></tr>

<tr><td><table>
<td><input class="button aqua" name="submit" type="submit" value="+">
<input class="button aqua" name="submit" type="submit" value="-">
<input class="button aqua" name="submit" type="submit" value="Save">
</td>
</table></td>
</tr></table>
</td>


<td><table>
<tr>
<td><?php echo $output[20] ?></td></tr>
<tr><td><?php echo $output[21] ?></td></tr>
<tr><td>
<div class="scroll"><?php echo "<table>\n<tr>";
for ($i=0; $i < $numfields; $i++) 
  { 
   echo '<th>'.mysql_field_name($device, $i).'</th>'; 
   }
   echo "</tr>\n";
   
   while ($row = mysql_fetch_row($device)) 
  {
   echo '<tr><td>'.implode($row,'</td><td>')."</td></tr>\n"; 
  }
echo "</table>\n";?></div>
</td></tr>
<tr><td><input class="input" type="text" name="id" value="id"/>
<input class="input" type="text" name="scan" value="scan"/></td></tr>
<tr><td><input class="button aqua" name="submit" type="submit" value="Scan">
<input class="button aqua" name="submit" type="submit" value="Cancel">
<input class="button aqua" name="submit" type="submit" value="Modify"></td>
</tr></table></td></tr>
<tr>
<td><table>
<tr>
<td><?php echo $output[12] ?></td>
<td><?php echo $output[27] ?></td>
<td><?php echo $output[18] ?></td>
</tr>
<tr>
<td><input class="input" type="text" name="tot_hours" value="<?php echo "$tot_ho" ?>"/></td>
<td><input class="input" type="text" name="con_hours" value="<?php echo "$work[5]" ?>"/></td>
<td><input class="input" type="text" name="mintemperature" value="<?php echo "$manual[3]" ?>"/></td>
</tr>
<tr><td><input class="button aqua" name="submit" type="submit" value="Uphours"></td>
<td><input  class="button aqua" name="submit" type="submit" value="Conhours"></td>
<td><input  class="button aqua" name="submit" type="submit" value="MinTemp"></td></tr>
</table></td>

<td>

<table><th><?php echo $output[28] ?></th>
<tr>
<td><?php echo $output[29] ?></td>
<td><?php echo $output[30] ?></td>
</tr>
<tr>
<td><input class="input" type="text" name="email" /></td>
<td><input type="checkbox" name="activate_email" /></td>
</tr>
</table></td>

</tr>
</form>
</table></div>

<?php 
$data->disconnetti();
?>

</div></div>
</body>

</html>