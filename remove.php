<?
$con= mysql_connect("localhost",$name,$password);
//$con= mysql_connect('localhost','www','aaa');
if(!$con) echo ("���ӽ���");
mysql_select_db ("userdb",$con);

mysql_query("delete from $name where num=$product",$con);

echo ("<meta http-equiv='Refresh' content='0; url=view.php'>");
?>