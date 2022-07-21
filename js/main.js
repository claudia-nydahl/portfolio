// preloader
// $(window).on('load', function () {
// 	$('#overlay').fadeOut();
//  });

// menu functionality 
$('.menu-icon').click(function() {
	// $('.drop-menu').fadeToggle();
	$('.drop-menu').toggleClass('is_active');
	$('.menu-icon').toggleClass('is_active');
	$('main').fadeToggle();
	$('footer').fadeToggle();
})

// Animate on scroll
AOS.init({
	duration: 1500
});

// Show and hide differenet portfolio categories, change focus states on menu items
$('.all-btn').click(function() {
	$('.category-1').fadeIn();
	$('.category-2').fadeIn();
	$('.category-3').fadeIn();

	$('#selectors a').removeClass('selected');
	$('.all-btn').addClass('selected');
})

$('.category-1-btn').click(function() {
	$('.category-1').fadeIn();
	$('.category-2').hide();
	$('.category-3').hide();

	$('#selectors a').removeClass('selected');
	$('.category-1-btn').addClass('selected');
})

$('.category-2-btn').click(function() {
	$('.category-2').show();
	$('.category-2 .item').css('opacity', '1'); // AOS workaround
	$('.category-1').hide();
	$('.category-3').hide();

	$('#selectors a').removeClass('selected');
	$('.category-2-btn').addClass('selected');
})

$('.category-3-btn').click(function() {
	$('.category-3').fadeIn();
	$('.category-2').hide();
	$('.category-1').hide();

	$('#selectors a').removeClass('selected');
	$('.category-3-btn').addClass('selected');
})

