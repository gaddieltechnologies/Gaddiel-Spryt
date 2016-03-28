// alpha numeric validation//

function alphanumeric_only(e)
{

var keycode;
if (window.event) keycode = window.event.keyCode;

else if (event) keycode = event.keyCode;
else if (e) keycode = e.which;

else return true;if( (keycode >= 47 && keycode <= 57) || (keycode >= 65 && keycode <= 90) || (keycode >= 97 && keycode <= 122) )
{

return true;
}

else

{

return false;
}

return true;
}
//onsubmit mandatory validation//
function validateAdd()
{
	var valid=true;
	var gname=document.getElementById("txtGroupNameId").value;
	var kname=document.getElementById("txtKeyNameId").value;
	var vid=document.getElementById("txtValueId").value;
	var vname=document.getElementById("txtValueNameId").value;
	
	if(gname=="")
	{
		 document.getElementById("errMsgGroupId").innerHTML="Please Enter the Group Name";
		 document.getElementById("txtGroupNameId").style.borderColor="#FF0000";
		valid= false;
	}
	
	if(kname=="")
	{
		 document.getElementById("errMsgKeyId").innerHTML="Please Enter the Key Name";
		 document.getElementById("txtKeyNameId").style.borderColor="#FF0000";
		valid= false;
	}
	if(vid=="")
	{
		 document.getElementById("errMsgValueId").innerHTML="Please Enter the Value Id";
		 document.getElementById("txtValueId").style.borderColor="#FF0000";
		valid= false;
	}
	if(vname=="")
	{
		
		 document.getElementById("errMsgValueNameId").innerHTML="Please Enter the Value Name";
		 document.getElementById("txtValueNameId").style.borderColor="#FF0000";
		 valid= false;
	}

		return valid;	
		
	
}

//validation for group name//

function groupName()
{
	var gname=document.getElementById("txtGroupNameId").value;
	if(gname=="")
	{
		document.getElementById("errMsgGroupId").innerHTML="Please Enter the Group Name";
		 document.getElementById("txtGroupNameId").style.borderColor="#FF0000";
	}
	 else
	 {
		document.getElementById("errMsgGroupId").innerHTML="";
		document.getElementById("txtGroupNameId").style.borderColor="green";	
	 }
}


//validation for key  name//
function keyName()
{
	var kname=document.getElementById("txtKeyNameId").value;
	if(kname=="")
	{
		document.getElementById("errMsgKeyId").innerHTML="Please Enter the Group Name";
		 document.getElementById("txtKeyNameId").style.borderColor="#FF0000";
	}
	 else
	 {
		document.getElementById("errMsgKeyId").innerHTML="";
		document.getElementById("txtKeyNameId").style.borderColor="green";	
	 }
}

//validation for value  id//
function valueId()
{
	var vid=document.getElementById("txtValueId").value;
	if(vid=="")
	{
		document.getElementById("errMsgValueId").innerHTML="Please Enter the Group Name";
		 document.getElementById("txtValueId").style.borderColor="#FF0000";
	}
	 else
	 {
		document.getElementById("errMsgValueId").innerHTML="";
		document.getElementById("txtValueId").style.borderColor="green";	
	 }
}

//validation for value  name//
function valueName()
{
	var vname=document.getElementById("txtValueNameId").value;
	if(vname=="")
	{
		document.getElementById("errMsgValueNameId").innerHTML="Please Enter the Group Name";
		 document.getElementById("txtValueNameId").style.borderColor="#FF0000";
	}
	 else
	 {
		document.getElementById("errMsgValueNameId").innerHTML="";
		document.getElementById("txtValueNameId").style.borderColor="green";	
	 }
}
