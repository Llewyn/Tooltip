jQuery.fn.FlashyTooltip = function() {

	$(this).on({
		mouseenter: function () {
			$('body').append('<div id="tooltip">' + $(this).attr('data-tooltip') + '</div>');
			$('#tooltip').css('opacity', 0);
		},
		mousemove: function (event) {
			var heightTooltip = $('#tooltip').height();
			var widthTooltip = $('#tooltip').width();
			var heightBrowser = $(window).height(); 
			var widthBrowser = $(window).width();
			if(event.pageY + 30 > heightBrowser) {
				$('#tooltip').css('top', event.pageY - heightTooltip - 30);	
			} else {
				$('#tooltip').css('top', event.pageY + 30);				
			}
			if(event.pageX + widthTooltip > widthBrowser) {
				$('#tooltip').css('left', event.pageX - widthTooltip - 30);
			} else {
				$('#tooltip').css('left', event.pageX + 30);
			}
			$('#tooltip').animate({
				opacity: 1 
			}, 500, function() {});
		},
		mouseleave: function () {
			$('#tooltip').remove();
		}
	});

}