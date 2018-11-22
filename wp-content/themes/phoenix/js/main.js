$(document).ready(function() {
	$(".buttons li").on('click', function(e) {
		buttonClicked = $(this).attr('id');
		scrollTo = $('.' + buttonClicked);
		e.preventDefault();

		$('body, html').animate({
			scrollTop: scrollTo.offset().top - 120
		}, 1000);

	  	$(window).scroll(function() {
    		scrollTo.scrollTop();
    	})
	  })

	$(".picker div").on('click', function() {
		pickerClicked = $(this).attr('id');
		toShow = $('#' + pickerClicked +'_text');
		if (toShow.is($('#web_text'))) {
			$(this).css('background-color', 'rgb(62,11,21)')
			$('#social').css('background-color', 'rgb(255,140,0)')
			$('#branding').css('background-color', 'rgb(255,140,0)')

			$('#web_text p').fadeIn( "slow", function() {

			})
			$('#social_text p').fadeOut( "slow", function() {

			})
			$('#branding_text p').fadeOut( "slow", function() {

			})
		}
		else if (toShow.is($('#social_text'))) {
			$(this).css('background-color', 'rgb(62,11,21)')
			$('#web').css('background-color', 'rgb(255,140,0)')
			$('#branding').css('background-color', 'rgb(255,140,0)')

			$('#social_text p').fadeIn( "slow", function() {

			})
			$('#web_text p').fadeOut( "slow", function() {

			})
			$('#branding_text p').fadeOut( "slow", function() {

			})

		}


		// }
		else if (toShow.is($('#branding_text'))) {
			$(this).css('background-color', 'rgb(62,11,21)')
			$('#social').css('background-color', 'rgb(255,140,0)')
			$('#web').css('background-color', 'rgb(255,140,0)')

			$('#branding_text p').fadeIn( "slow", function() {

			})
			$('#social_text p').fadeOut( "slow", function() {

			})
			$('#web_text p').fadeOut( "slow", function() {

			})


		}

	});

})

