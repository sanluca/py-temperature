<?php
class db {
// implementazione della classe db...
//db

private $db_host = "127.0.0.1";
private $db_user = "root";
private $db_password = "root";
private $db_database = "temp";
private $db_manual = "manual";
private $db_work = "work";
private $db_hours ="hours";
private $db_login ="calendar_users";
private $db_device ="device";
private $db_bluetooth ="bluetooth";
private $db_dht ="dht";
private $db_hours_day ="hours_day";


// controllo sulle connessioni attive
private $attiva = false;
 
// funzione per la connessione a MySQL
public function connetti()
  {
   if(!$this->attiva)
   {
    $connessione = mysql_connect($this->db_host,$this->db_user,$this->db_password);
       }else{
        return true;
       }
    }
// funzione per la chiusura della connessione
public function disconnetti()
{
        if($this->attiva)
        {
                if(mysql_close())
                {
         $this->attiva = false; 
             return true; 
                }else{
                        return false; 
                }
        }
 }
 // funzione per l'estrazione dei record 
public function estrai($risultato)
 {
  if(isset($this->attiva))
  {
  $r = mysql_fetch_object($risultato);
  return $r;
  }else{
  return false; 
  }
 }

//database view manual
public function view_manual(){
$result=mysql_db_query($this->db_database,"select * from ".$this->db_manual." where id=1 ");
$manual = mysql_fetch_row($result);
return $manual;
}
//database view work
public function view_work(){
	$result=mysql_db_query($this->db_database,"select * from ".$this->db_work." where id=1 ");
	$work=mysql_fetch_row($result);
	return $work;
}
//database view hours
public function view_hours($day,$day2,$month,$month2,$year,$year2){
	$result=mysql_db_query($this->db_database,"select * from ".$this->db_hours." where day >= '$day' and day <= '$day2' and month >= '$month' and month <= '$month2' and year >= '$year' and year <= '$year2' ");
	return $result;
}
//database view hours_day
public function view_hours_day(){
	$result=mysql_db_query($this->db_database,"select * from ".$this->db_hours_day);
	return $result;
}
public function view_dht($day,$day2,$month,$month2,$year,$year2){
	$result=mysql_db_query($this->db_database,"select * from ".$this->db_dht." where day >= '$day' and day <= '$day2' and month >= '$month' and month <= '$month2' and year >= '$year' and year <= '$year2' ");
	return $result;
}
//database view bluetooth
public function view_bluetooth(){
	$result=mysql_db_query($this->db_database,"select * from ".$this->db_bluetooth);
	return $result;
}

public function view_login($username,$password){
$crypt = "we6c21end2r4u" ;
$cryptpas = crypt($password,$crypt);
$query=mysql_db_query($this->db_database,"select * from ".$this->db_login." where username = '$username' AND password = '$cryptpas' ");
return $query;}

//database update
public function update_man($par,$value){
	mysql_db_query($this->db_database,"update manual set $par='$value' where id=1");
}
public function update_work($par,$value){
	mysql_db_query($this->db_database,"update work set $par='$value' where id=1");
}
public function update_bluetooth($c,$id){
	mysql_db_query($this->db_database,"update bluetooth set scan='$c' where id='$id'");
}
public function delete_bluetooth($id){
	mysql_db_query($this->db_database,"delete from bluetooth where id='$id'");
}

}?>