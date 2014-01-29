$(document).ready(function () {
	// Uniform JS: tell what element to style
	$('select, input[type="checkbox"], input[type="radio"]').uniform();
	$("select").uniform({
	  selectAutoWidth: false
	});
	$(":file").uniform({fileDefaultHtml: 'Select a file please'});
});
