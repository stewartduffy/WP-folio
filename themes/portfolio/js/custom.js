// JavaScript Document
Cufon.replace('h2.content_header, #tag_line',{color: '#FFF', fontFamily: 'Futura XBlk BT' });
Cufon.replace('.global_nav', { fontFamily: 'Insignia LT A', hover: true });
Cufon.replace('.dropCap', { fontFamily: 'Insignia LT A', hover: true });
Cufon.replace('div.sub_nav h2 a, .scroll_link, .slider_nav li a, div.sub_nav h2, dt, h4', { fontFamily: 'Insignia LT A', hover: true });

jQuery.easing.easeOutQuart = function (x, t, b, c, d) {
	return -c * ((t=t/d-1)*t*t*t - 1) + b;
};

//This is how to write the Jquery ready function for wordpress - sometimes the otherway doesn't work
jQuery(document).ready(function($){
				
  $('a.scroll_link ').smoothScroll({
	afterScroll: function() {
	  /* location.hash = this.hash; */
	}
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
			if( this.blur )
				this.blur();
		},
		onAfter:function( elem ){
		}
	});
});