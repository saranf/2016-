<?
$con= mysql_connect("localhost",$name,$password);
//$con= mysql_connect('localhost','www','aaa');
if(!$con) echo ("접속실패");
mysql_select_db ("userdb",$con);


echo ("
<table border=5 width=800 height=300 align=center>
<tr><td align=center><font size=15>$name's category</font></td><tr>
</table>
");

echo ("
<table border=1 width=800 align=center>
<tr> <td width=150 align=center>num</td>
<td width=350> <align=center>product</td>
<td width=200> <align=center>tag</td>
<td width=100><align=center>^.^</td></tr>
</table>
");
$fet=mysql_query("select * from $name", $con);
$no= mysql_query("select count(*) from $name",$con);

for ($i=0; $i<=$no; $i++)
{
$num=mysql_fetch_row($fet) or die(mysql_error());
$j=$i;
echo ("
<table border=1 width=800 align=center>
<tr> <td width=150 align=center>$num[0]</td>
<td width=350> <align=center>$num[1]</td>
<td width=200> <align=center>$num[2]</td>

<td width=100> <align=center> <a href=remove.php?product=$j, $name= $name, $password=$password>[remove] </a></td></tr>
</table>
");
}



?>