function hideShowDays(currentDay) {
	console.log(currentDay);
	$('#' + currentDay).hide();
	$('#' + currentDay).next().show();
}