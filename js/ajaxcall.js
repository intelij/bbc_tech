$(document).ready(function () {

	function search() {
		var input_value = $('input#search').val();
		$('b#search-string').html(input_value);
		if(input_value !== ''){
			$.ajax({
				type: "POST",
				url: "search.php",
				data: { query: input_value },
				cache: false,
				success: function(html){
					$("ul#results").html(html);
				}
			});
		}return false;    
	}
	
	$("input#search").live("keyup", function(e) {
		clearTimeout($.data(this, 'timer'));
		
		var search_string = $(this).val();
		
		if (search_string == '') {
			$("ul#results").fadeOut();
			$('h4#results-text').fadeOut();
		} else {
			$("ul#results").fadeIn();
			$('h4#results-text').fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		}
	});
	
	
});