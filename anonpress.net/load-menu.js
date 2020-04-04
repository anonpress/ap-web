$(function() {
	$.get("https://anonpress.org/includes/nav.php", function(navbar) {
		$("nav#menubar").html(navbar);
		$("#top-nav").css("display", "none");
		$("nav#menubar").css("display", "");
		$("head").append("<style>@media screen and(max-width:965px){header>*{display:none;}.page_header>.container{top:2em;}}</style>");
		if ($("#ace").hasClass("hide-menu"))
	});
});