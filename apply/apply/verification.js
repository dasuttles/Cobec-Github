/*
	By Adebanke Alabi
	May 9-10, 2012
*/


function verify()
{
	var elementArray =  document.forms["cobecform"].elements;
	var curElement;
	var value;
	var issue = false;
	var checkBoxCount = 0;
	
	
	for(i = 0; i < elementArray.length; i++)
	{
		curElement = elementArray[i];
		value = curElement.value 
		
		switch(curElement.className){
			case "someText": if(value == curElement.defaultValue || value == "Required Field"){
								curElement.style.color = "Red";
								curElement.value = "Required Field";
								issue = true;}//end if
								curElement.onclick = 
									function(){
										if(this.value == 'Required Field')
										{this.style.color = 'Black'; this.value = '';}/*end if*/ };//end function 
			break;
			case "checkbox": if(curElement.checked)
									checkBoxCount++;
			break;
			case "radio":    var radioCount = 0;
							  var radioGroup = document.forms["cobecform"].elements[curElement.name];	
							  for(var r = 0; r < radioGroup.length; r++){
								if(radioGroup[r].checked)
									radioCount++;}//end for
							  if(radioCount == 0)
								issue = true;
							  i++;
									
			break;
			case "number":    if(!value.match(/^[0-9]+$/)){
								curElement.style.color = "Red";
								curElement.value = "Invalid Number";
								issue = true;}//end if
								curElement.onclick = 
									function(){
										if(this.value == 'Invalid Number')
										{this.style.color = 'Black'; this.value = '';}/*end if*/ };//end function 
			break;
			case "email":      var atIndex =  value.indexOf("@");
			                    var dotIndex = value.lastIndexOf(".");
								if(value == curElement.defaultValue || value == "Invalid email address" || atIndex<1 || dotIndex<atIndex+2 || dotIndex+2>=value.length){
								curElement.style.color = "Red";
								curElement.value = "Invalid email address";
								issue = true;}//end if
								curElement.onclick = 
									function(){
										if(this.value == 'Invalid email address')
										{this.style.color = 'Black'; this.value = '';}/*end if*/ };//end function 
			break;
		}
	}
	if(issue){
		document.getElementById("errorNotification").innerHTML = "The form was not filled out correctly. Please see corrections above in Red. Ensure you have included shuttle, payment, and payment method information.";
		return false;}
	
	if(checkBoxCount == 0){
		document.getElementById("errorNotification").innerHTML = "You must select at least one day you will be attending the conference";
		return false;}
		
		
}

/*
	DOCUMENTATION
	=============
	VERIFY FUNCTION:
	This function goes through all the input elements in the form
		Text: if an element of type text is empty, set it to the color red and fill it with "Required field"
			  Also, set its onclick method so that the next time it is clicked, the "required text" will be erased
			  and the user can proceed typing (not in red)
		Checkbox: There are 3 checkboxes. We will count each one that is clicked. The user has to choose one.
		Radio: Ensure one radio button is selected by group
		Number: See if data entered is numeric
				(onclick method is same as for text)
		Email: Check for valid email format
				(onclick method is same as for text)
	
	SOURCE:
	1. Radio Button Verification with javascript
	http://quomon.com/question-Radio-button-validation-2405.aspx
				  
*/