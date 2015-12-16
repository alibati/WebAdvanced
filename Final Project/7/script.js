$(document).ready(function(){

// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
$('.read-more-content').addClass('hide')
$('.read-more-show, .read-more-hide').removeClass('hide')

// Set up the toggle effect:
$('.read-more-show').on('click', function(e) {
  $(this).next('.read-more-content').removeClass('hide');

	$(this).addClass('hide');
  $('#hideTarget').addClass('specialShow');
  e.preventDefault();
});

function delayedHide (obj, show) {
	if (show) {
		obj.removeClass('hide');
	} else {
		obj.addClass('hide');
	}
	
}

$('.read-more-hide').on('click', function(e) {
  $(this).parent('.read-more-content').addClass('hide');
  var moreid=$(this).attr("more-id");
  setTimeout ( function () { delayedHide ($('.read-more-show#'+moreid), true) }, 500 );
  $('#hideTarget').removeClass('specialShow');
  e.preventDefault();
});

});



$(function(){
    $('#worka').mixItUp();
    console.log("test");
});



$( ".block-grid" ).hover(
  function() {
   console.log("hover");
//jQuery("span", this).css("display","inline");
jQuery("span", this).slideDown("fast");

  }, function() {
jQuery("span", this).slideUp("fast");
  }
);













/*


$(window).on('resize', function(){

var width, height;
var divWidth = window.getComputedStyle($("#worka")[0], null).width;
width=(divWidth.substring(0,divWidth.length-2)/3)-10;
console.log(width);
$(".block-grid span").css("bottom",(width/2));



});
$(document).ready(function(){

var width, height;
var divWidth = window.getComputedStyle($("#worka")[0], null).width;
width=(divWidth.substring(0,divWidth.length-2)/3)-10;
console.log(width);
$(".block-grid span").css("bottom",(width/2)-10);
});

*/
/*
$('.grid-gutter').BlackAndWhite({
    hoverEffect : true, // default true
    // set the path to BnWWorker.js for a superfast implementation
    webworkerPath : false,
    // to invert the hover effect
    invertHoverEffect: false,
    // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
    intensity:1,
    speed: { //this property could also be just speed: value for both fadeIn and fadeOut
        fadeIn: 200, // 200ms for fadeIn animations
        fadeOut: 800 // 800ms for fadeOut animations
    },
    onImageReady:function(img) {
        // this callback gets executed anytime an image is converted
    }
});
*/
