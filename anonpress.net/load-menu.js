$(function() {
	$.get("https://anonpress.org/includes/nav.php", function(navbar) {
		$("nav#menubar").html(navbar);
	});

	// TODO: Move this somewhere more suitable
	// If there is exactly one option on the study edition page, select it
	labelList = document.querySelectorAll('div#divOptionsBlock div.opt-field>label.radio-format>label');
	if (labelList.length == 1) {
		labelList[0].onclick();
	}
});
