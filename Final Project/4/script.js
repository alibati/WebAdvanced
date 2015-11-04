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
