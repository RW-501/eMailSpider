
<?php
//echo "??????????????????????????????????????????????????????";
			
	if(isset($_POST['em'])){

	$em = $_POST['em'];
	$nm = $_POST['nm'];
	
 			 
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/Includes/db_Conx/index.php";
	include($path); 
	
 $emailx = clean_Input($db_conx,$em);
 $name = clean_Input($db_conx,$nm);

$emails=explode(",",$emailx);

//$emailCount = count($emails);
$emailCount =  substr_count($emailx,",");

for ($x = 1; $x <= $emailCount; ) {
  //echo "The number is: $x ";
  
  $email = $emails[$x];    

  
//  echo " $emailCount ??????????????/  $email ";
  
  
  
 $queryx =  "SELECT * FROM `MailerTable`
  WHERE mailerEmail = '$email' LIMIT 1"; 
						$resultx = mysqli_query($db_conx, $queryx);
							$rowx = mysqli_num_rows($resultx);

if($rowx > 0){

			//echo "All_Ready_ADDED";	
			//exit;
	$x++;

		}else{
	$sqlx = "INSERT INTO MailerTable (mailerEmail, mailerName ) VALUES ('$email', '$name')";
		$queryx = mysqli_query($db_conx, $sqlx);

		
if($queryx){
	$x++;
//echo "Updated";
//exit;
}else{
	$x++;
	//echo "error $sqlx";
//exit;
}
		
			$x++;

		}
  

  
  
}

  if($x >= $emailCount){
	
				echo "NEXT";	
exit;
}else{
//	echo "$x error $sqlx";
	
}



}
   ?>
  