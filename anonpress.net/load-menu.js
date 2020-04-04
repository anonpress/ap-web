if (!window.jQuery) {
	console.error("Attempted to load menu without jquery loaded!");
} else {
	$(function() {
		$.get("https://anonpress.org/includes/nav.php", function(navbar) {
			var navElement = $("nav#menubar");
			navElement.html(navbar);
			$("#top-nav").css("display", "none");
			navElement.css("display", "");
			document.head.append("<style>@media screen and (max-width: 965px) { header { display: none; } }</style>");
		});
	});
}