
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<meta http-equiv="Pragma" content="no-cache">

<html xmlns="http://www.w3.org/1999/xhtml"  lang="en" xml:lang="en">
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />

<title>MyLinks.Buzz - ADD </title>



  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" sizes="192x192" href="https://mylinks.buzz/backend/favicon.ico">
  <link rel="shortcut icon" href="https://mylinks.buzz/backend/favicon.ico" type="image/x-icon"/>
  <link rel="apple-touch-icon" href="https://mylinks.buzz/backend/favicon.ico" type="image/x-icon"/>


<style type="text/css" media="all">

<!--



@import url("/backend/email/indexCSS.css");

#total_guest{
    display: flex;
    padding: inherit;
    place-content: space-evenly;
}
.day{
	background-color:rgba(236,166,166,1.00);
}
.hour{
	background-color:rgba(236,231,166,1.00);
}

.min30{
	background-color:rgba(168,236,166,1.00);
}
.min5{
	background-color:rgba(171,166,236,1.00);
}





-->

</style>


<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/Includes/db_Conx/index.php";
	include($path);   
?>


</head>

<body>


<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/Includes/header/header.php";
	include($path);
	


// If user is already logged in, Signin Page
if($user_ok == true){
		$uName = $_SESSION["username"];
		$userid = $_SESSION["userid"];
		
		$DisplaySignupLogin = 'none';
		
		
}else{
	
	$DisplayBar = "none";
	
}
	?>

	<style type="text/css" media="all">

<!--




-->

</style>

<div id="page_container">
		
	
<div id="center_container">	







<div id='table_bar'>


<div><a   href='https://www.mylinks.buzz/backend/mailer/add' > Add  </a></div>
<div><a   href='https://www.mylinks.buzz/backend/mailer/viewer/' > view  </a></div>


<div><a   href='https://www.mylinks.buzz/backend/mailer/list' > List </a></div>

<div><a   href='https://www.mylinks.buzz/backend/stats/' > Guest </a></div>

<div ><a   href='https://www.mylinks.buzz/backend/stats/users/' > Members </a></div>
<div ><a   href='https://www.mylinks.buzz/user/backend/icons/' > Icons </a></div>
<div ><a   href='https://www.mylinks.buzz/backend/transactions/' > Transactions </a></div>
<div ><a   href='https://www.mylinks.buzz/backend/email/' > Email </a></div>

<div id='timeArea'  class='bar_btn' >Timer:</div>
</div>


<div id='table_header' >

<div id='' class='header ' onclick="viewMessageFunc('viewMSG')">View Emails</div>
<div id='' class='header ' onclick="viewMessageFunc('sendMSG')">Send Email</div>




</div>


<div  id='viewMSG' class='MSGviews table_body'>



                
                <?php 
				
		
		



	$sql = "SELECT * FROM ContactTable order by contactID desc LIMIT 100";
			$result0 = mysqli_query($db_conx, $sql);
 //   $row = mysqli_fetch_row($result0);
							$rowx = mysqli_num_rows($result0);

if($rowx > 0){
		while ($rowx = mysqli_fetch_array($result0, MYSQLI_ASSOC)) {
				$contactName =  $rowx['contactName'];
				$contactUserID =  $rowx['contactUserID'];
				$contactEmail =  $rowx['contactEmail'];
				$contactSubject =  $rowx['contactSubject'];
				$contactMessage =  $rowx['contactMessage'];
				$contactIPaddress =  $rowx['contactIPaddress'];
				$contactDate =  $rowx['contactDate'];
				$DeleteBool =  $rowx['DeleteBool'];
				$ReadBool =  $rowx['ReadBool'];
 				
				
				
				
		$Times_Title =  "$contactSubject: $contactName $contactDate $ReadBool";							

				
				
			$messageBody = "<br><strong>Message: Title: $Times_Title</strong>
			<br></br>
			<li><br>Date: $contactDate</li>
			<li>Subject: $contactSubject</li>
			<li>Name: $contactName</li>
			<li>Email: $contactEmail</li>
			<li>IP: $contactIPaddress</li>

<br>$contactMessage</br>
		</br>";	
				
		
		
							
	$Main_message = "<div class='Msg_Title'></div> ".$messageBody."";
							





	$date=date_create($The_Time);
$The_Time = date_format($date,"g:i");

											echo"
	<div  class='available_cont' id='cdates_".$x."' >
<button  onClick='selectDayFunc(this,cdates_".$x.");' type='button' class='collapsible available_times'>".$Times_Title."</button>
<div class='content'>
  <div class='message_area'>".$Main_message."</div>
  

  ";
							
  
 
				
    



echo"<div id='avbox_<?php echo $linkID; ?>' ><div class='btn_container' id='day_scheduled'><div class='selectTimeArea'>";

	 
	  echo"<div class='select_func' id='Cancel$x'   onClick=appBTNSFunc(this,$linkID,'$contactID','$The_Time','cancel');>
Cancel
</div>";	 
	  echo"<div class='select_func' id='contact$x'   onClick=appBTNSFunc(this,$linkID,'$contactID','$The_Time','Contact');>
Contact
</div>";		

	  echo"<div class='select_func' id='completed$x'   onClick=appBTNSFunc(this,$linkID,'$contactID','$The_Time','Complete');>
Complete
</div>";
echo"</div>";
echo"</div>  </div>";
echo"</div>  </div>";
				
				
				
				}

				
				
				
				
				
				
				
			
		
}
				
				?>






</div>
<div  id='sendMSG' class='MSGviews table_body'>



<div class='contactform'>



    <label  for="cemail"  >email</label>
    <input type="email" id="Cemail" class='Cinputs'  maxlength="100"   name="email" placeholder="yourname@Mylinks.buzz"   >
    
    
        <label for="fname">Subject</label>
    <input type="text" id="Cname" class='Cinputs'  maxlength="100" name="name" placeholder="Subject..">

    <label for="cnumber"  >Send From</label>
    <input type="text"  id="Cphone"  class='Cinputs' maxlength="50"   name="pnumber" placeholder="ContactUs@Mylinks.buzz"   >



    <label for="message">Message</label>
    <textarea id="Cmessge" name="message"  class='Cinputs' placeholder="Write something.." style="height:20vw"></textarea>

    <button id='Cclose' class='cBtns' onClick="closeAcontainersFunc( )" >Cancel</button>
    
    <button id='Csubmit' class='cBtns'  onClick="submitApoFunc( )" >Submit</button>
    
</div>









</div>













		</div>



<?php

	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/Includes/footer/index.php";
	include($path); 
	
	?>

				
		
				
				

		</div>
		
	 
 
<script>
	
function selectDayFunc(xxx,yyy){

//_(yyy).style.display = "block";

					var coll = document.getElementsByClassName("collapsible");
//var i;

//for (i = 0; i < coll.length; i++) {
	
  //coll[i].addEventListener("click", function() {
 
    var content = xxx.nextElementSibling;
    if (content.style.display === "block") {
	  content.style.display = "none";
//selectedDatesFunc();	
//xxx.classList.remove("active");	
    } else {
		
var i;	var dateCount = document.getElementsByClassName("collapsible");	
	for (i = 0; i < dateCount.length; i++) {
var dateTabs = document.getElementsByClassName("collapsible")[i];
dateTabs.classList.remove("active");
    var content2 = dateTabs.nextElementSibling;
	  content2.style.display = "none";
	  
		  // selectedDatesFunc();	

//element.classList.remove("mystyle");
	}		
      /// 

		
      content.style.display = "block";
//	content.scrollIntoView(true);
    }
	if(xxx.nextElementSibling){
  	      var content = xxx.nextElementSibling;

    if (content.style.display === "block") {

xxx.classList.toggle("active");


	}else{
xxx.classList.remove("active");
	}
	}
	
	
}

   
function appBTNSFunc(el,linkID,contactID,Time,func){
	
	if(func == "Contact"){
		
	}else if(func == "Complete"){
		
		
	}else if(func == "cancel"){
		
	}
	
			upGrade();

	
		
var i;	var dateCount = document.getElementsByClassName("select_func");	
	for (i = 0; i < dateCount.length; i++) {
var dateTabs = document.getElementsByClassName("select_func")[i];
dateTabs.classList.remove("activeTab");

	}		
el.classList.toggle("activeTab");

		
	
	
	
	
	
}











function submitApoFunc(xxx){
//console.log("apo_title???????/     ?????????????");
				var apo_Email =_("Cemail").value;

		if(apo_Email.length > 0){
		var checkNumber;
		var checkEmail;
		var checkAddress;
		
		 
		var date_time = new Date()
		var apo_Name = _("Cname").value;
		var apo_Email =_("Cemail").value;
		var apo_PhoneN =_("Cphone").value;
		var contact_msg =_("Cmessge").value;
		var address =_("Caddress").value;
		var apo_title =_("linkName_"+currentLinkID).innerText;

		var uID ='';
		var apo_dates_text = apo_selectedTimes.join(" # ");
		var characterCount = _("Caddress").value.length;
			
			if(characterCount > 5){
				checkAddress = true;
			}else{
				checkAddress = false;
			}

		var l_ID = "linkName_"+currentLinkID;
			 
	//console.log("a_value.length    "+characterCount+"  required  "+email_required+phoneN_required+address_required+"  checkAddress  "+checkAddress+"   checkNumber  "+checkNumber+"  checkEmail  "+checkEmail);


			//	console.log("apo_title???????/     "+apo_title);// //var apo_dates_text = apo_selectedTimes.toString();
 console.log("Inside !!!!!!!!!!!!!!!!");

$.post("/Link_Page/backend/actions/apoFunc/submit_apo.php",  {lkid:currentLinkID,ap_m:contact_msg,a_P:apo_PhoneN,a_e:apo_Email,ap_title:apo_title,a_n:apo_Name,td:date_time,apoAddr:address,ap_times:apo_dates_text}, function(output) {	
//console.log("output     "+output);
if(output){
	
	if(output=="success"){
		 apo_Name = "";
		apo_Email = "";
		 apo_PhoneN = "";
		 contact_msg = "";
		 address = "";
		 checkNumber = "";
		 checkEmail = "";
		 checkAddress = "";
		 
_(l_ID).innerHTML = "Appointment Scheduled";
closeAcontainersFunc(xxx);
	}else{
		
		_("apo_status"+xxx).innerHTML = "There was a problem";

		
	}
 //console.log(output+"        +output");// 
// 		_("Cmessge").value = apo_dates_text;

}
			});

		
			
		
		
		//closeAcontainersFunc(xxx);
	
		
		
	 
		
		
		
			}else{
					_("apo_status"+xxx).innerHTML = "No message address";

		}
		
	
	}
	
	





function viewMessageFunc(xxx){


var i;	var Count = document.getElementsByClassName("MSGviews");	
	for (i = 0; i < Count.length; i++) {
var Tabs = document.getElementsByClassName("MSGviews")[i];
	  Tabs.style.display = "none";
	}
		  _(xxx).style.display = "block";




}













function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
   // alert("You have entered an invalid email address!")
    return (false)
}








        // function for get email id
        function extractEmails ( text ){
            return text.match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+)/gi);
        }
		
		
 
 
 	
						</script>
						

						
				
	<script>
	
	
			
			
			var hours = 0;
			var mins = 0;
			var sec = 0;
			function myTimer(){
				sec++;
				
				if(sec == 60){
					mins += 1;
					sec = 0;
				}
				if(mins == 60){
					hours += 1;
					mins = 0;
				}			
				
						  	  var New_hours = ("0" + hours).slice(-2);
							  var New_mins = ("0" + mins).slice(-2);
							var New_sec = ("0" + sec).slice(-2);  
							  
    _('timeArea').innerHTML = "Timer "+New_hours+":"+New_mins+":"+New_sec;
    
			}
			
			
			
setInterval(myTimer, 1000);



viewMessageFunc('viewMSG');
</script>
			
	



</body>
</html>
