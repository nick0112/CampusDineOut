/*Highlight field functions for invalid input */
function highLightInvalidInput(id)
{
	document.getElementById(id).style.borderColor = "red";
	document.getElementById(id).style.backgroundColor = "#e6f3f7";
}

/* remove highlights*/
function removeHighlight(id)
{
	document.getElementById(id).style.borderColor = "blue";
	document.getElementById(id).style.backgroundColor = "#FFFFFF";
}



/* name validation */

function testNameValid(id)
{
	var regex = /^[a-zA-Z ]{2,20}$/;
	var string = document.getElementById(id).value;
	if(document.getElementById(id).id == "name")
	{
		return (regex.test(string));
	}
}


function warnInvalidName(id, errors)
{
   var name = document.getElementById(id);
   if (!testNameValid(id))
   {
	  highLightInvalidInput(id);
	  document.getElementById("nameError").className = 'error';
	  document.getElementById("nameError").innerHTML = errors;
	  name.focus();
   } else {
	   removeHighlight(id);
	   document.getElementById("nameError").className = 'valid';
	   document.getElementById("nameError").innerHTML = ' ';
   }
     
}

/* Email validation */
function testEmailValid(id)  
{  
   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
   var email = document.getElementById(id).value;
   if(document.getElementById(id).id == "signUpEmail")
   {
	   return (mailformat.test(email));
   }
}

function warnInvalidEmail(id, errors)
{
	if(!testEmailValid(id))
	{
      highLightInvalidInput(id);
	  document.getElementById("emailError").className = 'error';
	  document.getElementById("emailError").innerHTML = errors;
	  name.focus();
   } else {
	   removeHighlight(id);
	   document.getElementById("emailError").className = 'valid';
	   document.getElementById("emailError").innerHTML = ' ';
   }
}


/* Restaurant validation */
function testRestaurantValid(id)
{
	return (document.getElementById(id).selectedIndex != 0);
}

function warnRestaurantInvalid(id, errors){
    if(!testRestaurantValid(id) ){
		highLightInvalidInput(id);
	  document.getElementById("restError").className = 'restError';
	  document.getElementById("restError").innerHTML = errors;
	  name.focus();
   } else {
	   removeHighlight(id);
	   document.getElementById("restError").className = 'valid';
	   document.getElementById("restError").innerHTML = ' ';
   }
           
}

/*gender validation*/
function testValidGender(id)
{
	var gender = document.getElementById(id).id;
	if(gender == "gender" || gender == "female" || gender == "other")
	{
		return (document.getElementById(id).value == "male" || document.getElementById(id).value == "female" || document.getElementById(id).value == "other");
	}
}

function warnInvalidGender(id)
{
	if(!testValidGender(id))
	{
		alert("Please validate your gender");
	}
}

/* Comment Validation */
function testCommentValid(id)
{
	var comment = document.getElementById(id).value.length;
	var regex = /[a-zA-Z\d]/;
	var string = document.getElementById(id).value;
	if(document.getElementById(id).id == "Comment")
	{
		return (comment != 0 && regex.test(string));
	}
}

function warnCommentInvalid(id, errors)
{
	if(!testCommentValid(id)){
	  highLightInvalidInput(id);
	  document.getElementById("commentError").className = 'restError';
	  document.getElementById("commentError").innerHTML = errors;
	  name.focus();
   } else {
	   removeHighlight(id);
	   document.getElementById("commentError").className = 'valid';
	   document.getElementById("commentError").innerHTML = ' ';
   }
}

/* Password validation*/

function testPasswordValid(id)
{
	var pass = document.getElementById(id).value;
	var regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
	if(document.getElementById(id).id == "signUpPassword")
	{
		return (regex.test(pass));
	}
}

function warnPasswordInvalid(id, errors)
{
	if(!testPasswordValid(id)){
	  highLightInvalidInput(id);
	  document.getElementById("passWordError").className = 'error';
	  document.getElementById("passWordError").innerHTML = errors;
	  name.focus();
   } else {
	   removeHighlight(id);
	   document.getElementById("passWordError").className = 'valid';
	   document.getElementById("passWordError").innerHTML = ' ';
   }
}
