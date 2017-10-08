<?
include "user.php";
if(!$connect) echo ("no"); else echo ("yes");
$no= mysql_query("select count(*) from jaewondb", $connect);
$no+=1;
$query= "insert into jaewondb (name, tag, phonenum, num) values ('$name', '$tag', '$phone', '$no')";
mysql_query( $query, $connect);
echo ("$name $tag $phone \n $no");
$query = mysql_query ("select * from jaewondb", $connect);
?>