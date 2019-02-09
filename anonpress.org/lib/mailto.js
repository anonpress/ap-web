function mailto(mailtoSettings) {
	document.styleSheets[0].addRule("[data-before]::before", "content: attr(data-user);");
	document.styleSheets[0].addRule("[data-after]::after", "content: attr(data-domain);");
	var domain = mailtoSettings.domain || location.hostname.replace(/^www\./,"");
	$("[data-email]").each(function() {
		var user = ($(this).prop("data-email") || mailtoSettings.user);
		var mtl = "mailto:" + user + "@" + domain;
		if($(this).is("a, area:not([nohref]), [href]")) {
			$(this).prop("href", mtl);
		}
		if($(this).is("form")) {
			$(this).prop("action", mtl);
		}
		if($(this).is("button, input[type='submit']")) {
			$(this).prop("formaction", mtl);
		}
		if(!$.trim($(this).html())) {
			if($(this).css('display') === "inline") {
				$(this).prop("data-before", user);
				$(this).prop("data-after", domain);
				$(this).text("@");
			}
			else {
				$(this).text(user + "@" + domain);
			}
		}
	})
}
