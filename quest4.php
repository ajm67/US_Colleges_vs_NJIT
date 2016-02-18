<?php

//echo "This is question 4 ";
//echo "NJIT Longitude: 40.741997 "
//echo "NJIT Latitude: 74.177113  "
//echo "NJIT relative distance: 0"
//echo "<br>";
//echo "<br>";

$datab_host= 'localhost';
$datab_username= 'root';
$datab_pass= '';
$datab_database= 'unibase';
//$njitlatul=75.00;
$njitlat =74.177113 ;
//$njitlatll=73.00;

//$njitlongul=41.00;
$njitlong=40.741997;
//$njitlongll=39.00;
$counter=0;
$datab = new PDO('mysql:host='.$datab_host.';dbname='.$datab_database, $datab_username, $datab_pass);
$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statabb = "NJ";
$collegeposnj = 47.102312140151;
$resultaroundnjit = $datab->prepare("SELECT * FROM unitable20 WHERE  X=9 AND ( E='NJ') ");
			$resultaroundnjit->execute(); ?>
			
				<table border="3" cellspacing"0" cellpadding="1">
<thead>
<tr>
	<th><h1><fONT FACE="arial">INSTITUTION DEFINED BY CLOSE-NESS
	<fONT FACE="cursive"><h6>By Aidan McGourty</h6></FONT>
	</FONT></h1></th>
</tr>
</thead>

<tbody>
<?php
				
				for($l=0; $row = $resultaroundnjit->fetch(); $l++){
				$counter++;
				if($counter<=20){
				$a= abs($row['BM']) - $njitlong; //long
				$b= abs($row['BN']) - $njitlat;//lat
				$a2 = $a * $a;
				$b2 = $b * $b;
				
				$c = $a2 + $b2; 
				// c^2
				$collegepos= sqrt($c);
					if($collegeposnj>=46.102312140151 && $collegeposnj<=48.102312140151)
						
					?>
					<tr>
				<td>
				<ul>
				<li>
					<?php echo $collegepos."  ".$row['B']."<br>";

				}
				//$difference = $njitpos - $collegepos;
				//$finalval = $difference*$difference;
				
				//if($a<=$njitlongul && $a>=$njitlongll  ){
				//	if($b<=$njitlatul && $b>=$njitlatll)
				//	echo $row['B']."<BR>";
	
				//}
				}

?>



