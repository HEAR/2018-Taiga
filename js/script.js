$(function(){

	console.log("Taïga OK");

	$("ul#ECTS>li,ul#ECTS>li>ul>li").each(function(){
		console.log($(this).justtext());

		var elem = $("<li>"+$(this).justtext()+"</li>");

		elem.click( function(event){
			var text = $(this).text();

			$("ul#ECTS>li,ul#ECTS>li>ul>li").each(function(){
				if( $(this).justtext() == text ){

					$("body").scrollTo( $(this) , 800);
				}
			});
		});

		$("#sommaire ul").append( elem );

	})

x	
})


// https://viralpatel.net/blogs/jquery-get-text-element-without-child-element/
jQuery.fn.justtext = function() {
	return $(this)	.clone()
			.children()
			.remove()
			.end()
			.text();
};