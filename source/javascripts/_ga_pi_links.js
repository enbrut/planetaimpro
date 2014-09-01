//Captura data-category i data-social per fer analítiques d'enllaços externs

$(document).ready(function(){
	$( "[data-action]" ).on( "click", function() {
		var category = $(this).closest("[data-category]").data('category');
		var action = $(this).data('action');
		
	  	// console.log(category);

		_gaq.push(['_trackEvent', category, action]);
	});

});

