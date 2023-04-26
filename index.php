
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



@import url("/backend/mailer/add/indexCSS.css");

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
#center_container {
    width: 95%;
    display: inline-flex;
	    margin: auto;
}

#remove_container{
	margin:2%;
	padding:2%;
	box-sizing:border-box;
	    display: flex;
    padding: inherit;
    place-content: space-evenly;
	    width: 95%;

	
}


.headeR{
	font-weight:400;

}

.header {
    font-size: 2vw !important;
	}
#dropArea{
display:flex;

}


#dropboxText{
	    width: 50%;
		min-height:20vw;

}


#resboxText{
		    width: 50%;
			min-height:20vw

}

#myProgress {
  width: 100%;
  background-color: grey;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: green;
}
.cols {


    justify-content: space-evenly;
}



#table_body {
    display: inline-flex;
    justify-content: space-evenly;
}



-->

</style>



<div id="page_container">
		
	
<div id="center_container">	










<div id="stats_container">	
<div id="remove_container">	

<div  class='headeR ' onclick="closeRowFunc('row-1')">IP Address</div>


</div>
<div id='stats_main_box' >

<div id='table_bar'>


<div><a   href='https://www.mylinks.buzz/backend/mailer/add' > Add  </a></div>
<div><a   href='https://www.mylinks.buzz/backend/mailer/viewer/' > view  </a></div>


<div><a   href='https://www.mylinks.buzz/backend/mailer/list' > List </a></div>

<div><a   href='https://www.mylinks.buzz/backend/stats/' > Guest </a></div>

<div ><a   href='https://www.mylinks.buzz/backend/stats/users/' > Members </a></div>
<div ><a   href='https://www.mylinks.buzz/user/backend/icons/' > Icons </a></div>
<div ><a   href='https://www.mylinks.buzz/user/backend/transactions/' > Transactions </a></div>
<div ><a   href='https://www.mylinks.buzz/user/backend/email/' > Email </a></div>

<div id='timeArea'  class='bar_btn' >Timer:</div>
</div>


<div id='table_header' >

<div id='addBTN' class='header ' onclick="startBTNFUNC()">Add Emails</div>
<input type="text" class="header" id='AddCount' />

<div id='bademailCounT' class='header ' onclick="">bademailCounT</div>

<div id='goodemailCounT' class='header ' onclick="">goodemailCounT</div>



<div id='emailCount' class='header ' onclick="">emailCount</div>



<div id='emailTotal' class='header ' onclick="">emailTotal</div>


<div id='addedemailCounT' class='header ' onclick="">addedemailCounT</div>

<div id='stopBTN' class='header ' onclick="Stopaddfunc()">Stop</div>

</div>

<div class='cols'>
<div id='currentemail' class='header '>currentemail</div>
<div id='status' class='header '>status</div>
<div id='percent' class='header '>percent</div>
</div>


<div id="myProgress">
  <div id="myBar"></div>
</div>

<div id='dropArea'>
<textarea id="dropboxText" > </textarea>
<textarea id="resboxText" > </textarea>


</div>





<div id='table_body'>

<div id='timeD' class='header '>time</div>

<div id='listTotal' class='header '>listTotal</div>


</div>





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


function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
   // alert("You have entered an invalid email address!")
    return (false)
}


var stopBool = "NO";

			
			var hoursX = 0;
			var minsX = 0;
			var secX = 0;
			function myTimerX(){
				secX++;
				
				if(secX == 60){
					minsX += 1;
					secX = 0;
				}
				if(minsX == 60){
					hoursX += 1;
					minsX = 0;
				}			
				
						  	  var New_hoursX = ("0" + hoursX).slice(-2);
							  var New_minsX = ("0" + minsX).slice(-2);
							var New_secX = ("0" + secX).slice(-2);  
							  
    _('timeD').innerHTML = "Timer "+New_hoursX+":"+New_minsX+":"+New_secX;
    
			}
			
			
			












var	restarTimer;


var emval;
var valtimer;
        // function for get email id
        function extractEmails ( text ){
            return text.match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+)/gi);
        }
		var timeOut;
		var timeOut2;
		var runTimer;
		var allemails =0;
var EmaiCount = 0;
var EmaiTotal = 0;
var email;
 var Line = 0;
 var bademailCounT = 0;
 var goodemailCounT = 0;
 var addedemailCounT = 0;
 var skipped = 0;
 
 var theCount = 200;
 
var CurrentAddCount = 0;
 
 			var SendTotalCount = 200;

 
 
 
 function startBTNFUNC(xxx){
//Stopaddfunc();
	CurrentAddCount = _('AddCount').value;	
theCount = CurrentAddCount
SendTotalCount = CurrentAddCount;
//addedemailCounT = CurrentAddCount;
//EmaiCount = CurrentAddCount;
//EmaiTotal +CurrentAddCount;


_('AddCount').value = CurrentAddCount;

_('addBTN').innerHTML ='Running';


console.log('CurrentAddCount'+ CurrentAddCount);



	stopBool = "NO";
//theCount = CurrentAddCount;
//SendTotalCount = theCount;





console.log('SendTotalCount'+ SendTotalCount);
	listTotalFunc();
sendTextAreaFunc();
 }
 
function sendTextAreaFunc(){
	
		if(stopBool == "NO"){

	  clearInterval(runTimer);
	runTimer =setInterval(myTimerX, 1000);

 var textareaText = _('dropboxText').value;
// console.log('textareaText'+ textareaText);

 var emails = extractEmails(textareaText);
// console.log('emails  '+ emails);

 _('dropboxText').value = emails;

				  clearTimeout(restarTimer);

	restarTimer =	setTimeout(sendToDB, 300000);

}else{
					  		_("status").innerHTML = "Stopped ";
 console.log('Stopped');

		}

if(EmaiCount == 0){
	 EmaiTotal = (_('dropboxText').value.match(/,/g) || []).length;

console.log('count'+ EmaiCount);
//EmaiCount = EmaiTotal;
}


					if(stopBool == "NO"){

if(emails){
var emails = emails.toString();




    //code here using lines[i] which will give you each line
		email = '';
		
 email = emails.split(/,(.+)/)[0];
 emails  = emails.split(/,(.+)/)[1];
_('dropboxText').value = emails;


		//console.log('email: '+email);

		
	  email = email.trim();
	
			
	if(ValidateEmail(email) == true){
		
		if(stopBool == "NO"){
		goodemailCounT++;
		//sendToDB(email);
		//	console.log("   ssss!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
sendToDB(email);
		
		
		}else{
					  		_("status").innerHTML = "Stopped ";

		}

		}else{
	bademailCounT++;
	skipped++;
						  		_("status").innerHTML = " inValid email ";

//console.log("  ccccccccccccc!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
	if(EmaiCount < EmaiTotal){
				if(stopBool == "NO"){

				EmaiCount =+ 1;
//		console.log("  ccccccccccccc!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
sendTextAreaFunc();



	}else{
				if(stopBool == "NO"){
						  clearTimeout(restarTimer);
			  clearTimeout(valtimer);
		  clearTimeout(emval);
		  		_("status").innerHTML = "Done ";
						}else{
					  		_("status").innerHTML = "Stopped ";
_('addBTN').innerHTML ='Stopped';

		}

	}

}
}
		_("addedemailCounT").innerHTML = "Added "+addedemailCounT;

_("emailTotal").innerHTML = "Total "+EmaiTotal;

			_("bademailCounT").innerHTML = "Skipped  "+skipped;
			_("goodemailCounT").innerHTML = "Good  "+goodemailCounT;
		//	_("emailCount").innerHTML =  "emails  "+ EmaiCount;
			
				 allemails = addedemailCounT + goodemailCounT;
				 var totalT = EmaiCount + EmaiTotal;
			var width = allemails / totalT * 100;
if(width >99){
	
			_("status").innerHTML = "Done ";
				Stopaddfunc();
}
    var elem = document.getElementById("myBar");
        elem.style.width = width + "%";

var per = Math.round(width * 100) / 100;
			_("percent").innerHTML = per + "%";


			if(EmaiCount <= EmaiTotal){
/*
	  clearTimeout(restarTimer);
			  clearTimeout(valtimer);
		  clearTimeout(emval);
  clearInterval(runTimer);
*/
			}

}
			
					}else{
					  		_("status").innerHTML = "Stopped ";

		}
			
}
			
		
			
			
			
			var SendTotal;
			var timeOut3;
			
			
	function sendToDB(xxx){
		
	//console.log(xxx+"   xxx ndemail emails confirmed ?????????????????????????????/  "+email);
					if(stopBool == "NO"){
						
						
	if(goodemailCounT + theCount >= EmaiTotal ){
			//theCount = SendTotalCount;
		}



if(email){
	SendTotal += ","+email;
		 SendTotalCount = (SendTotal.match(/,/g) || []).length;
			//_("emailCount").innerHTML = "Current:  "+xxx;
}

//console.log(SendTotalCount+"    SendTotalCount?????== count confirm??????????SendTotal/  "+SendTotal);

	//if(SendTotalCount > theCount && SendTotalCount > 0){
		//SendTotalCount = theCount / 2;
		

//					}


					
					
		
		
			_("emailCount").innerHTML = "Sending:  "+SendTotalCount;


	if(SendTotalCount >= theCount ){
		
	
		
		
		
			 	$.post("/backend/mailer/add/addemail.php",  {em:SendTotal}, function(output) {
		
		
					 var output = output.trim();
console.log(output+"    output  ");


if(output == "NEXT"){
	_("status").innerHTML = "status " +output;
	//console.log(email+"vvv??/  "+xxx);
	console.log(allemails+" allemailshhhhhhhhhhhEmaiTotal "+EmaiTotal);
SendTotal ='';
		 SendTotalCount =0;
		 email ='';
		Line ='';
				EmaiCount =+ theCount;
addedemailCounT=+theCount;

		_('resboxText').value += output+" Added " +"\n";

	if(goodemailCounT <= EmaiTotal){
						if(stopBool == "NO"){

//	console.log("vvv??/  ");
	//console.log("vvv??/  "+EmaiCount);
	listTotalFunc();
						  clearTimeout(restarTimer);

	restarTimer =	setTimeout(sendTextAreaFunc, 4000);
						}else{
					  		_("status").innerHTML = "Stopped ";

		}
	}else{
		_("status").innerHTML = "Done ";
				Stopaddfunc();

	}
}

if(output == "All_Ready_ADDED"){
				if(stopBool == "NO"){

	if(goodemailCounT <= EmaiTotal){
				EmaiCount =+ theCount;
//	console.log("jjjj??/  ");
				skipped++;
			_("status").innerHTML = output+" In DB " +"\n";

			
			
							}else{
					  		_("status").innerHTML = "Stopped ";

		}
	}else{
		_("status").innerHTML = "Done ";
				Stopaddfunc();

	}
	
}
				


		

				
		});		
		
				}else{
					  		_("status").innerHTML = "Loading ";
	  clearTimeout(timeOut3);
timeOut3 = setTimeout(sendTextAreaFunc, 100);
//console.log(output+"    output  ");
		}

		
		
	}

console.log('SendTotalCount  '+ SendTotalCount);
	

	_("addedemailCounT").innerHTML = "Added "+addedemailCounT;

			_("bademailCounT").innerHTML = "Skipped  "+skipped;
			_("goodemailCounT").innerHTML = "Good  "+goodemailCounT;
			//_("emailCount").innerHTML =  "emails  "+ EmaiCount;

			
				 allemails = addedemailCounT + goodemailCounT;
				 var totalT = EmaiCount + EmaiTotal;
			var width = allemails / totalT * 100;

    var elem = document.getElementById("myBar");
        elem.style.width = width + "%";

var per = Math.round(width * 100) / 100;
			_("percent").innerHTML = per + "%";		
	
		
_("emailTotal").innerHTML = "Total "+EmaiTotal;

	email ='';

	


	



}

function Stopaddfunc(){
	_('addBTN').innerHTML ='Stopped';

		 EmaiTotal = (_('dropboxText').value.match(/,/g) || []).length;

	stopBool = "YES";
	  clearTimeout(restarTimer);
			  clearTimeout(valtimer);
		  clearTimeout(emval);
  clearInterval(runTimer);
	
	listTotalFunc();
}
									
									
									

function listTotalFunc(){
				 	$.post("/backend/mailer/funcs/listCount.php",  {}, function(output) {
			 var output = output.trim();
//console.log(output+"    output  ");
		if(output){
			 _('listTotal').innerHTML = "List Total: "+output;
console.log(output+"    nnnnnnn  ");
		}
});
}
	
listTotalFunc();

									
									
												
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

</script>
			
	



</body>
</html>
