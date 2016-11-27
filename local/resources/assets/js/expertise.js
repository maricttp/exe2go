$( document ).ready(function() {
	$(window).scroll(function() {
		if($(window).width() > 650 ){
			$('.product-develop').each(function(){
				var imagePos = $(this).offset().top;
				var topOfWindow = $(window).scrollTop();
					if (imagePos < topOfWindow) {
						$('.solutioning .circle-box').addClass("animation-cicrcle-box-sol");
						$('.deploy .circle-box').addClass("animation-cicrcle-box-dep");


					}
			});
		}
	});
});