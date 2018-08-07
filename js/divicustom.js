$divishop = jQuery('#divishop-menu'); 
if ( $divishop.length ) { 
jQuery(window).scroll(function() {
var scroll = jQuery(window).scrollTop(),
objectPosition = $divishop.offset().top;
var divishopwidth = jQuery('#divishop-menu').width(); 
if (scroll > 600) {
jQuery('body').addClass("et_divishop_cta");
} else {
jQuery('body').removeClass("et_divishop_cta");
}
});
}
