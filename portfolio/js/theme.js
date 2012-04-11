// JavaScript Document
Cufon.replace('h2.content_header, #tag_line',{color: '#FFF', fontFamily: 'Futura XBlk BT' });
Cufon.replace('.global_nav', { fontFamily: 'Insignia LT A', hover: true });
Cufon.replace('.dropCap', { fontFamily: 'Insignia LT A', hover: true });
Cufon.replace('div.sub_nav h2 a, .scroll_link, .slider_nav li a, div.sub_nav h2, dt, h4', { fontFamily: 'Insignia LT A', hover: true });

jQuery.easing.easeOutQuart = function (x, t, b, c, d) {
	return -c * ((t=t/d-1)*t*t*t - 1) + b;
};

jQuery(document).ready(function($){
  Shadowbox.init();

    
  $('a.scroll_link ').smoothScroll({
    afterScroll: function() {}
  });
  
  $('div.screen_slider').serialScroll({
          target:'div.sections',
          items:'li',
          axis:'xy',
          navigation:'.slider_nav li a',
          duration:400,
          force:true,
          
          onBefore:function( e, elem, $pane, $items, pos ){
                  e.preventDefault();
                  if( this.blur ){
                          this.blur();
                  }
          },
          onAfter:function( elem ){
          }
	});
});

/*

// JavaScript Document
function getElements() {
  var myForm    = document.getElementById('enquiry_form');
  var ename     = document.getElementById('name');
  var eemail    = document.getElementById('email_form');
  var esubject  = document.getElementById('subject');
  var eenquiry  = document.getElementById('enquiry');

  myForm.onsubmit = function () {
    return validate();
  };
  
  ename.onfocus = function () { if (this.value == "Name"){ this.value = ""; }}
  ename.onblur = function () { if (this.value == ""){ this.value = "Name"; }}
  eemail.onfocus = function () { if (this.value == "Email"){ this.value = ""; }}
  eemail.onblur = function () { if (this.value == ""){ this.value = "Email"; }}
  esubject.onfocus = function () { if (this.value == "Subject"){ this.value = ""; }}
  esubject.onblur = function () { if (this.value == ""){ this.value = "Subject"; }}
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
	
	
	if (vnameVal==="" || vnameVal==="Name") {
		mytarget.innerHTML= "Please enter your Name ";
	} else if ((vemailVal==="" || vemailVal==="Email") || (vemailVal.indexOf("@") == -1) || (vemailVal.indexOf(".") === -1)) {
		mytarget.innerHTML= "Please enter a valid Email address";
	} else if (vsubjectVal==="" || vsubjectVal==="Subject") {
		mytarget.innerHTML= "Please enter a Subject ";
	} else if (venquiryVal==="" || venquiryVal==="Enquiry") {
		mytarget.innerHTML= "Please enter your Enquiry ";
	} else if (vspamVal!="") {
		mytarget.innerHTML= "SPAM ALERT!";
	} else {
          return true;
	}
	
		
	if (vnameVal==="" || vnameVal==="Name") {
		vname.style.borderWidth = "2px";
		vname.focus();
		return false;
	} else {
		vname.style.borderWidth = "1px";
	}
	if ((vemailVal==="" || vemailVal=="Email") || (vemailVal.indexOf("@") == -1) || (vemailVal.indexOf(".") == -1)) {
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
*/