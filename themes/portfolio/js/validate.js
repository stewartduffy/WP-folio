// JavaScript Document
function getElements() {
	var myForm = document.getElementById('enquiry_form');
	myForm.onsubmit = function () { return validate(); }
	
	var ename = document.getElementById('name');
	ename.onfocus = function () { if (this.value == "Name"){ this.value = ""; }}
	ename.onblur = function () { if (this.value == ""){ this.value = "Name"; }}
	var eemail = document.getElementById('email_form');
	eemail.onfocus = function () { if (this.value == "Email"){ this.value = ""; }}
	eemail.onblur = function () { if (this.value == ""){ this.value = "Email"; }}
	var esubject = document.getElementById('subject');
	esubject.onfocus = function () { if (this.value == "Subject"){ this.value = ""; }}
	esubject.onblur = function () { if (this.value == ""){ this.value = "Subject"; }}
	var eenquiry = document.getElementById('enquiry');
	eenquiry.onfocus = function () { if (this.value == "Enquiry"){ this.value = ""; }}
	eenquiry.onblur = function () { if (this.value == ""){ this.value = "Enquiry"; }}
}

window.onload = getElements;


function validate() {
	var mytarget = document.getElementById('message');
	var vname = document.getElementById('name');
	var vnameVal = document.getElementById('name').value;
	var vemail = document.getElementById('email_form');
	var vemailVal = document.getElementById('email_form').value;
	var vsubject = document.getElementById('subject');
	var vsubjectVal = document.getElementById('subject').value;
	var venquiry = document.getElementById('enquiry');
	var venquiryVal = document.getElementById('enquiry').value;
	var vspam = document.getElementById('other');
	var vspamVal = document.getElementById('other').value;
	
	
	if (vnameVal=="" || vnameVal=="Name") {
		mytarget.innerHTML= "Please enter your Name ";
	} else if ((vemailVal=="" || vemailVal=="Email") || (vemailVal.indexOf("@") == -1) || (vemailVal.indexOf(".") == -1)) {
		mytarget.innerHTML= "Please enter a valid Email address";
	} else if (vsubjectVal=="" || vsubjectVal=="Subject") {
		mytarget.innerHTML= "Please enter a Subject ";
	} else if (venquiryVal=="" || venquiryVal=="Enquiry") {
		mytarget.innerHTML= "Please enter your Enquiry ";
	} else if (vspamVal!="") {
		mytarget.innerHTML= "SPAM ALERT!";
	} else {
		return true;
	}	
	
		
	if (vnameVal=="" || vnameVal=="Name") {
		vname.style.borderWidth = "2px";
		vname.focus();
		return false;
	} else {
		vname.style.borderWidth = "1px";
	}
	if ((vemailVal=="" || vemailVal=="Email") || (vemailVal.indexOf("@") == -1) || (vemailVal.indexOf(".") == -1)) {
		vemail.style.borderWidth = "2px";
		vemail.focus();
		return false;
	} else {
		vemail.style.borderWidth = "1px";
	}
	if (vsubjectVal=="" || vsubjectVal=="Subject") {
		vsubject.style.borderWidth = "2px";
		vsubject.focus();
		return false;
	} else {
		vsubject.style.borderWidth = "1px";
	}	if (venquiryVal=="" || venquiryVal=="Enquiry") {
		venquiry.style.borderWidth = "2px";
		venquiry.focus();
		return false;	
	} else {
		venquiry.style.borderWidth = "1px";
	}
	if (vspamVal!="") {
		return false;	
	} else {
		vspam.style.backgroundColor = "#CFBD89";
	}

}
