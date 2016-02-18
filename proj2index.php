<?php
//Defining credentials for connection
$datab_host= 'localhost';
$datab_username= 'root';
$datab_pass= '';
$datab_database= 'unibase';



//PDO to establish connection
$datab = new PDO('mysql:host='.$datab_host.';dbname='.$datab_database, $datab_username, $datab_pass);
$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>
<center><img src="http://media.digitalcameraworld.com/wp-content/uploads/sites/123/2014/10/Mountain_landscape_photography_CAN92.lead_._MG_8452opener.jpg" alt="Mountain View" style="width:304px;height:228px;"> </center>
<center><p><b>Question 1 </b>- Search for colleges by the state they are locatd in. </p></center>
		
<center><form action="quest1.php" method="get">
<b>Enter the full name of the state: </b><input type="text" name="name"><input type="submit" value="Submit">

<br>
<br>
</form></center>


<center><p> <b>Question 2</b> - Search for colleges by the numbered level of the institution: </p></center>
<center><form action="quest2.php" method="get">
<b>Institutions defined by numbers 1 through 6, as noted below. </b>
<p>1) Degree-granting, graduate with no undergraduate degrees - These institutions offer a Master's degree, Doctor's degree  or a First-professional degree and do not offer a Bachelor's degree or an Associate's degree. </p>
<p>2) Degree-granting, primarily baccalaureate or above - These institutions offer a Bachelor's degree, Master's degree,Doctor's degree or a First-professional degree.  Also, the total number of degrees/certificates at or above the bachelor's level awarded divided by the total number of degrees/certificates awarded is greater than 50 percent. </p>
<p>3) Degree-granting, not primarily baccalaureate or above - These institutions offer a Bachelor's degree, Master's degree, Doctor's degree,or a First-professional degree.  Also, the total number of degrees/certificates at or above the bachelor's level awarded divided by the total number of degrees/certificates awarded must be less than or equal to 50 percent.</p>
<p>4) Degree-granting, Associate's and certificates - Institutions offer an Associate's degree and may offer other postsecondary certificates, awards or diplomas of less than one academic year; at least one but less-than two academic years; at least two but less-than four academic years. This category also includes institutions that offer a postbaccalaureate certificate, Post-master's certificate or a First-professional certificate and the highest degree offered is an Associate's degree.</p>
<p>5) Nondegree-granting, above the baccalaureate - Institutions do not offer Associate's, Bachelor's, Master's, Doctor's or First-professional degrees, but offer either Postbaccaulaureate, Post-master's or First-professional certificates. </p>
<p>6) Nondegree-granting, sub-baccalaureate - Institutions do not offer Associate's, Bachelor's , Master's, Doctor's, or First-professional degrees, or certificates above the baccalaureate level. They do offer postsecondary certificates, awards or diplomas of less than one academic year; at least one but less than two academic years; or at least two but less than four academic years.</p>
<input type="intval" name="instnum">
<input type="submit" value="Submit">
</form></center>
<br>



<center><p><b>Question 3</b> - Input a state abbreviation. This will tell you which colleges in a given state have a hospital.</p></center>
<form action="quest3.php" method="get">
<center><b>Enter the state abbreviation: </b><input type="text" name="hospital"><input type="submit" value="Submit">
</form></center>

<br>

<center><p><b>Question 4</b> - Display top 20 nearest Colleges around NJIT (40.7420 degrees N, 74.1790 degrees W) whose high level of offering is not less than 9.</p>
<form action="quest4.php">
<input type="submit" value="Search">
</form></center>

<center><p><b>Question 5</b> - Display all Colleges who have a hospital but do not offer a medical degree. </p>
<form action="quest5.php">
<form>
<input type="submit" value="Search">
</form></center>

<center><p><b>Question 6</b> - Display the rank list of state regarding the number of colleges opening to the general public. </p>
<form action="quest6.php">
<input type="submit" value="Search">
</form></center>


</html>