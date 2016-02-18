<?php

echo "This is question 1 ";
echo "<br>";
echo "<br>";

$datab_host= 'localhost';
$datab_username= 'root';
$datab_pass= '';
$datab_database= 'unibase';

$name=$_GET["name"];

$datab = new PDO('mysql:host='.$datab_host.';dbname='.$datab_database, $datab_username, $datab_pass);
$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$resultprint = $datab->prepare("SELECT * FROM unitable20 WHERE E='$name'");
	 $resultprint->execute();
?>
<table border="3" cellspacing"0" cellpadding="1">
<thead>
<tr>
	<th><h1><fONT FACE="arial">NAMES OF COLLEGES IN THIS STATE
	<fONT FACE="cursive"><h6>By Aidan McGourty</h6></FONT>
	</FONT></h1></th>
</tr>
</thead>

<tbody>
<?php
	 for($i=0; $row = $resultprint->fetch(); $i++){?>
<tr>
				<td>
				<ul>
				<li>
				 <?php echo $row['B']."<BR>"; ?> 
				 </li>
				 </ul>
				 </td>
</tr>
<?php
}
?>

</tbody>
</table>