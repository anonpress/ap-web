$("nav#menubar").load("https://anonpress.org/includes/nav.php");
$.getScript($("#menu-script").attr("src"), async function() {
	for (let i = 10; i < 5000, !$.isFunction($("ace").aceResponsiveMenu); i += 10) {
		await new Promise(r => setTimeout(r, i)); // Give ace some time to sort itself out
	}
	if (!$.isFunction($("ace").aceResponsiveMenu)) {
		console.error("Failed to load menu for some reason :(");
		return; // give up
	}
	$.globalEval($("nav#menubar script:not([src])").html());
	$("#top-nav").css("display", "none");
	$("nav#menubar").css("display", "");
});