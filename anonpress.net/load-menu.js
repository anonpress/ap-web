$(function() {
	$.get("https://anonpress.org/includes/nav.php", function(navbar) {
		$("nav#menubar").html(navbar);
		$("#top-nav").css("display", "none");
		$("head").append("<style>@media screen and (max-width:965px){header>*{display:none}.page_header>.container{top:2em}}</style>");
	});
});