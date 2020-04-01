$("nav#menubar").load("https://anonpress.org/includes/nav.php");
$.getScript($("#menu-script").attr("src"), async function() {
	if (!$.isFunction($("ace").aceResponsiveMenu)) {
		await new Promise(r => setTimeout(r, 100)); // Give ace 100ms to sort itself out
	}
	$.globalEval($("nav#menubar script:not([src])").html());
	$("#top-nav").css("display", "none");
	$("nav#menubar").css("display", "");
});