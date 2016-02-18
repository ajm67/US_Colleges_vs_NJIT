<?php

echo "This is question 2 ";
echo "<br>";
echo "<br>";

$datab_host= 'localhost';
$datab_username= 'root';
$datab_pass= '';
$datab_database= 'unibase';

$instnum=$_GET["instnum"];

$datab = new PDO('mysql:host='.$datab_host.';dbname='.$datab_database, $datab_username, $datab_pass);
$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$resultsamelev = $datab->prepare("SELECT * FROM unitable20 WHERE V='$instnum' ");
	$resultsamelev->execute();
?>
<table border="3" cellspacing"0" cellpadding="1">
<thead>
<tr>
	<th><h1><fONT FACE="arial">INSTITUTION DEFINED BY NUMBER
	<fONT FACE="cursive"><h6>By Aidan McGourty</h6></FONT>
	</FONT></h1></th>
</tr>
</thead>

<tbody>
<?php
		for($j=0; $row = $resultsamelev->fetch(); $j++){?>
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
