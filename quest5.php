<?php

echo "This is question 5 ";
echo "<br>";
echo "<br>";

$datab_host= 'localhost';
$datab_username= 'root';
$datab_pass= '';
$datab_database= 'unibase';

$datab = new PDO('mysql:host='.$datab_host.';dbname='.$datab_database, $datab_username, $datab_pass);
$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$resultnotmed = $datab->prepare("SELECT * FROM unitable20 WHERE (AD=1 OR AD=2) AND (AE=-1 OR AE=-2)  ");
			$resultnotmed->execute();?>
			
			
			<table border="3" cellspacing"0" cellpadding="1">
<thead>
<tr>
	<th><h1><fONT FACE="arial">INSTITUTION THAT HAS HOSPITAL       <br>
								...but NO MEDICAL DEGREE
	<fONT FACE="cursive"><h6>By Aidan McGourty</h6></FONT>
	</FONT></h1></th>
</tr>
</thead>

<tbody>
			
			<?php	for($l=0; $row = $resultnotmed->fetch(); $l++){ ?>
			
			<tr>
				<td>
				<ul>
				<li>
			
			<?php	echo $row['B']."<BR>";?>

			</li>
				 </ul>
				 </td>
			</tr>
			<?php } ?>



