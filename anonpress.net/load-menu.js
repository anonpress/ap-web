$(function() {
	$.get("https://anonpress.org/includes/nav.php", function(navbar) {
		$("nav#menubar").html(navbar);
	});
});