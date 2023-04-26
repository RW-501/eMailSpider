
<?php
//echo "??????????????????????????????????????????????????????";
			
	if(isset($_POST['em'])){

	$em = $_POST['em'];
	$nm = $_POST['nm'];
	
 			 
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/Includes/db_Conx/index.php";
	include($path); 
	
 $email = clean_Input($db_conx,$em);
 $name = clean_Input($db_conx,$nm);



 $queryx =  "SELECT * FROM `MailerTable`
  WHERE mailerEmail = '$email' LIMIT 1"; 
						$resultx = mysqli_query($db_conx, $queryx);
							$rowx = mysqli_num_rows($resultx);

if($rowx > 0){

			echo "All_Ready_ADDED";	
			exit;

		}else{
	$sqlx = "INSERT INTO MailerTable (mailerEmail, mailerName ) VALUES ('$email', '$name')";
		$queryx = mysqli_query($db_conx, $sqlx);

		
if($queryx){
echo "Updated";
exit;
}else{
	
	echo "error $sqlx";
exit;
}
		
		
		}


}
   ?>
  