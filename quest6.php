<?php

echo "This is question 6 ";
echo "<br>";
echo "<br>";

$datab_host= 'localhost';
$datab_username= 'root';
$datab_pass= '';
$datab_database= 'unibase';

$datab = new PDO('mysql:host='.$datab_host.';dbname='.$datab_database, $datab_username, $datab_pass);
$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$array1= array("AK","AL","AR","AS","AZ","CA","CO","CT","DC","DE","FL","FM","GA","GU","HI","IA","ID","IL","IN","KS","KY","LA","MA","MD","ME","MH","MI","MN","MO","MP","MS","MT","NC","ND","NE","NH","NJ","NM","NV","NY","OH","OK","OR","PA","PR","PW","RI","SC","SD","TN","TX","UT","VA","VI","VT","WA","WI","WV","WY");
?>

<table border="3" cellspacing"0" cellpadding="1">
<thead>
<tr>
	<th><h1><fONT FACE="arial">STATES' NUMBER OF COLLEGES OPEN TO PUBLIC </FONT>
	<fONT FACE="cursive"><h6>By Aidan McGourty</h6></FONT>
	</FONT></h1></th>
</tr>
</thead>

<tbody>			
			<?php
for($c=0; $c<count($array1); $c++){
		$stname=$array1[$c]; //gives me AZ AK and AL
$resultcolrank = $datab->prepare("SELECT * FROM unitable20 WHERE AH=1 AND E='$stname' ");
			$resultcolrank->execute(); ?>
			
			
<?php			
				$count =0; ?>
				
				
				<?php for($l=0; $row = $resultcolrank->fetch(); $l++){ ?>
				<?php $count=$count+1;
				//echo $row['B']."<BR>";
				}?>
				
				<tr>
				<td>
				<ul>
				<li>
				<?php echo $array1[$c]." has ". $count ." college(s)"; ?>
				 </li>
				 </ul>
				 </td>
</tr>
<?php
		}

?>
</tbody>
</table>