$(document).ready(function(){

  $('.up').hide();
  $(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('.up').fadeIn();
			} else {
				$('.up').fadeOut();
			}
		});
		$('.up').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
});
