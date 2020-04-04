if (!window.jQuery) {
	console.error("Attempted to load menu without jquery loaded!");
} else {
	$(function() {
		$.get("https://anonpress.org/includes/nav.php", function(navbar) {
			$("nav#menubar").html(navbar);
			$("#top-nav").css("display", "none");
			$("nav#menubar").css("display", "");
			$("head").append("<style>@media screen and (max-width: 965px) { header { display: none; } }</style>");
		});
	});
}