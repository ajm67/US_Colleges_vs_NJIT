<?php

echo "This is question 3 ";
echo "<br>";
echo "<br>";

$datab_host= 'localhost';
$datab_username= 'root';
$datab_pass= '';
$datab_database= 'unibase';

$hosstate=$_GET["hospital"];

$datab = new PDO('mysql:host='.$datab_host.';dbname='.$datab_database, $datab_username, $datab_pass);
$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$resulthos = $datab->prepare("SELECT * FROM unitable20 WHERE E='$hosstate' AND (AD=1 OR AD=2)  ");
			$resulthos->execute();
			?>
			
<table border="3" cellspacing"0" cellpadding="1">
<thead>
<tr>
	<th><h1><fONT FACE="arial">UNIVERSITIES THAT HAVE HOSPITAL IN STATE
	<fONT FACE="cursive"><h6>By Aidan McGourty</h6></FONT>
	</FONT></h1></th>
</tr>
</thead>

<tbody>
<?php
			
				for($k=0; $row = $resulthos->fetch(); $k++){ ?>
			<tr>
				<td>
				<ul>
				<li>
				<?php echo $row['B']."<BR>";	?>
				</li>
				 </ul>
				 </td>
			</tr>

<?php		
}
?>
</tbody>
</table>
