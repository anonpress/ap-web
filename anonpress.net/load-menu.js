$("nav#menubar").load("https://anonpress.org/includes/nav.php");
$.getScript($("#menu-script").attr("src"), function() {
	while (!$.isFunction($("#ace").aceResponsiveMenu)) {} // Wait for aceResponsiveMenu to figure out how it works
	$.globalEval($("nav#menubar script:not([src])").html());
	$("#top-nav").css("display", "none");
	$("nav#menubar").css("display", "");
});