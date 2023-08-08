(function($) {
	$(document).on('click', '.copy-shortcode', function(e){
		var copyText = "["+$(this).data('prefix')+"="+$(this).data('value') + " edit=false]";

		/* Copy the text */
		navigator.clipboard.writeText(copyText);  
		
		var normalText = $(this).html();

		$(this).addClass('copied-text').html(normalText.replace(acf.__("Copy Code"),acf.__("Code Copied"))).css({'background-color':'#4BB543','color':'#fff'});
		setTimeout(function(){
			$('body').find('.copied-text').removeClass('copied-text').html(normalText.replace(acf.__("Code Copied"),acf.__("Copy Code"))).css({'background-color':'#fff','color':'#000'});
		}, 1000);
	});

})(jQuery);