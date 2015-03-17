
<?php
if (isset($_POST['id']))
{
$i=$_POST['id'];
$n=$_POST['Role'];
$a=$_POST['Character_description'];
$r=$_POST['Requirements'];
$ag=$_POST['Age'];
$ra=$_POST['Race'];
$pa=$_POST['Pay'];
mysql_connect("127.0.0.1","root","");
mysql_select_db("store");
$Query="insert into casting values('".$i."','".$n."','".$a."','".$r."','".$ag."','".$ra."','".$pa."')";
mysql_query($Query);
mysql_close();
}
?> 
<html >
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="style.css" />
<title>Ajout_casting</title>
</head>


<body>
<form action="ajoutcasting.php" method="POST">
<p>
    id:<input type="text" name="id" /><br />
    Role:<input type="text" name="Role" /><br />
	Character_description:<input type="text" name="Character_description" /><br />
	Requirements:<input type="text" name="Requirements" /><br />
	Age:<input type="text" name="Age" /><br />
	Race:<input type="text" name="Race" /><br />
	Pay:<input type="text" name="Pay" /><br />
    <input type="submit" value="Add" />
</p>
</form>

</body>
</html>
