?php\
$con = mysql_connect("localhost","root"," ");
if(!$con)
{
die('could not connect: ' . mysql_error());
}
mysql_select_db("mybd" , $con);
$sql="insert into person(Fname,Lname<Age) values ('$_post[fname]' ,'$_post[lname]' , '$_post[age])";
if(!mysql_query($sql,$con))
{
die('error: ' . mysql_error());
}
$result=mysql_query("select * from person");
echo "<table border='1'>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Age</th>
</tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr>"
echo "<td>".$row['Fname'],"</td>";
echo "<td>".$row['Lastname'],"</td>";
echo "<td>".$row['Age'],"</td>";
echo "</tr>";
}
echo "<table>";
mysql_close($con);