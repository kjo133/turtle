$(document).ready(function(){
	$.ajax({
		type: "GET",
		url: "../images/gallery/gallery.xml",
		cache: false,
		dataType: "xml",
		success: function(xml){
			
		}
	});
});