// JavaScript Document
Cufon.replace("h2.content_header, #tag_line",{color:"#FFF",fontFamily:"Futura XBlk BT"});Cufon.replace(".global_nav",{fontFamily:"Insignia LT A",hover:!0});Cufon.replace(".dropCap",{fontFamily:"Insignia LT A",hover:!0});Cufon.replace("div.sub_nav h2 a, .scroll_link, .slider_nav li a, div.sub_nav h2, dt, h4",{fontFamily:"Insignia LT A",hover:!0});jQuery.easing.easeOutQuart=function(a,b,c,d,e){return-d*((b=b/e-1)*b*b*b-1)+c};jQuery(document).ready(function(a){a("a.scroll_link ").smoothScroll({afterScroll:function(){}});a("div.screen_slider").serialScroll({target:"div.sections",items:"li",axis:"xy",navigation:".slider_nav li a",duration:400,force:!0,onBefore:function(a,b,c,d,e){a.preventDefault();this.blur&&this.blur()},onAfter:function(a){}})});