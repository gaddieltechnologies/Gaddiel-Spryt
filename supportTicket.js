//mail validation
/*function checkEmail(email) {
var regExp = /(^[a-z]([a-z_\.]*)@([a-z_\.]*)([.][a-z]{3})$)|(^[a-z]([a-z_\.]*)@([a-z_\.]*)(\.[a-z]{3})(\.[a-z]{2})*$)/i;
return regExp.test(email);
}
 
function checkEmails(){
    var emails = document.getElementById("txtCopyEmailId").value;
    var emailArray = emails.split(";");
    var invEmails = "";
    for(i = 0; i <= (emailArray.length - 1); i++){
        if(checkEmail(emailArray[i])){
            //Do what ever with the email.
        }else{
            invEmails += emailArray[i] + "\n";
        }
    }
    if(invEmails != ""){
        alert("Invalid emails:\n" + invEmails);
    }

}*/

/*function checkMail() {

    var email = document.getElementById("txtCopyEmailId");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  
    if (!filter.test(email.value)) 
	{
    document.getElementById("errMsgMailId").innerHTML="Please Enter the Valid Email.";
	 document.getElementById("txtCopyEmailId").style.borderColor="#FF0000";
    email.focus;
    return false;
	 }
	 else{
	 document.getElementById("errMsgMailId").innerHTML="";
	 document.getElementById("txtCopyEmailId").style.borderColor="green";
	 
	 }
}*/
	
	//message empty validation

	function message()
{
	var msg=document.getElementById("txtMessageId").value;
	if(msg=="")
	{
		document.getElementById("errMsgMsgId").innerHTML="Please Enter the Message";
		 document.getElementById("txtMessageId").style.borderColor="#FF0000";
	}
	 else
	 {
		document.getElementById("errMsgMsgId").innerHTML="";
		document.getElementById("txtMessageId").style.borderColor="green";	
	 }
}

//attachment validation jpeg or pdf

var _validFileExtensions = [".jpg", ".jpeg", ".pdf"]; 
function Validate(oForm) {
							
							var arrInputs = oForm.getElementsByTagName("input");
							for (var i = 0; i < arrInputs.length; i++) {
								var oInput = arrInputs[i];
								if (oInput.type == "file") {
									var sFileName = oInput.value;
									if (sFileName.length > 0) {
										var blnValid = false;
										for (var j = 0; j < _validFileExtensions.length; j++) {
											var sCurExtension = _validFileExtensions[j];
											if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
												blnValid = true;
												break;
											}
										}
				
												
												if (!blnValid) {
													alert("Please Choose PDF or JPEG files");
													return false;
												}
											}
										}
									}
}
				
//select box validation
function select()
{
	if(document.getElementById('optSubjectId').value=="select")
	{
		 document.getElementById("errMsgSubId").innerHTML="Please select a Frequency ID";
		 document.getElementById("optSubjectId").style.borderColor="#FF0000";
		
	}
	else
	{
		document.getElementById("errMsgSubId").innerHTML="";
		document.getElementById("optSubjectId").style.borderColor="green";
	}
	
}


//on submit

function supportSubmit()
{
	valid=true;		
	var msg=document.getElementById("txtMessageId").value;	
	if(document.getElementById('optSubjectId').value=="select")
	{
		 document.getElementById("errMsgSubId").innerHTML="Please select a Frequency ID";
		 document.getElementById("optSubjectId").style.borderColor="#FF0000";
		valid=false;
	}
	if(msg=="")
	{
		document.getElementById("errMsgMsgId").innerHTML="Please Enter the Message";
		 document.getElementById("txtMessageId").style.borderColor="#FF0000";
		 valid=false;
	}
	 var emails = document.getElementById("txtCopyEmailId").value;
    var emailArray = emails.split(";");
    var invEmails = "";
    for(i = 0; i <= (emailArray.length - 1); i++){
        if(checkEmail(emailArray[i])){
            //Do what ever with the email.
        }else{
            invEmails += emailArray[i] + "\n";
			
        }
    }
    if(invEmails != ""){
        document.getElementById("errMsgMailId").innerHTML="Please enter the Valid eMail Id";
        document.getElementById("txtCopyEmailId").style.borderColor="#FF0000";
		 valid=false;
    }
	else{
		 document.getElementById("errMsgMailId").innerHTML="";
        document.getElementById("txtCopyEmailId").style.borderColor="green";
		
	}

	
	 return valid;
	
}

//file validation
//1)
function attach()
{
var id_value = document.getElementById("fileAttachId").value;
               if (id_value != '') {
                   var valid_extensions = /(.jpg|.pdf)$/i;
                   if (valid_extensions.test(id_value)) {
                       
                   }
                   else {
                      document.getElementById("errMsgFileId").innerHTML="Please Choose PDF or JPEG files";
						

                   }
               } 
               return true;
 }

