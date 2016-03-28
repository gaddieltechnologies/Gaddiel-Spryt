//validation for feedback name//

function fbName()
{
	var name=document.getElementById("txtNameId").value;
	if(name=="")
	{
		document.getElementById("errMsgNameId").innerHTML="Please Enter the Name";
		 document.getElementById("txtNameId").style.borderColor="#FF0000";
	}
	 else
	 {
		document.getElementById("errMsgNameId").innerHTML="";
		document.getElementById("txtNameId").style.borderColor="green";	
	 }
}

//email validation
function checkMail() {

    var email = document.getElementById("txtMailId");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) 
	{
    document.getElementById("errMsgMailId").innerHTML="Please Enter the Valid Email.";
	 document.getElementById("txtMailId").style.borderColor="#FF0000";
    email.focus;
    return false;
	 }
	 else{
	 document.getElementById("errMsgMailId").innerHTML="";
	 document.getElementById("txtMailId").style.borderColor="green";
	 
	 }
	}
	
	
//submit validation
function validateFb()
{
	var valid=true;
	var name=document.getElementById("txtNameId").value;
	var email = document.getElementById("txtMailId");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) 
	{
    document.getElementById("errMsgMailId").innerHTML="Please Enter the Valid Email.";
	 document.getElementById("txtMailId").style.borderColor="#FF0000";
    email.focus;
	valid=false;
    
	}
	
	if(name=="")
	{
		document.getElementById("errMsgNameId").innerHTML="Please Enter the Name";
		document.getElementById("txtNameId").style.borderColor="#FF0000";
		valid=false;
		
	}
	 
	 return valid;
	 
	
}

//uppercase validation

function makeUppercase() {
document.feedBack.txtName.value = document.feedBack.txtName.value.toUpperCase();
document.feedBack.txtSubjectName.value = document.feedBack.txtSubjectName.value.toUpperCase();
//document.feedBack.txtValueIdName.value = document.feedBack.txtValueIdName.value.toUpperCase();
//document.feedBack.txtValueName.value = document.feedBack.txtValueName.value.toUpperCase();

}