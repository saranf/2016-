<?
echo ("$name $password");
$connect = mysql_connect ("localhost","root","apmsetup");
mysql_select_db ("userdb", $connect);
mysql_query ("create table $name (num int auto_increment primary key,product varchar(40), tag varchar(40) )", $connect);
mysql_select_db ("mysql", $connect);
//mysql_query ("insert into user (Host,User,Password) values ('localhost','$name','$password') ", $connect);
mysql_query ("create user '$name'@'%' identified by '$password'",$connect);

mysql_select_db ("userdb", $connect);
mysql_query ("grant select, delete, insert on $name to '$name'@'%'",$connect); 


//$hellow="grant select, delete, insert on userdb to $name@%";
//mysql_query ($hellow);





/*
while (1)
{
for($i=0; $i==10; $i++)
{
for($j=0; $j==i; $j++)
{
if (mysql_result($same, $i, 0) == mysql_result($same, $j, 0)) {mysql_query(update user set name= $user.(i+1);}
}
}
}
*/
echo ("<meta http-equiv='Refresh' content='3; url=index.php'>");
?>