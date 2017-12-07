function init() {
	document.getElementById('deletbtn')
		.addEventListener('click', warnung);
}

function warnung() {
	var check = confirm('Soll der Beiträg wirklich gelöscht werden?');
	if (check == false) {
		history.back();
	}else {
		
	}
}
document.addEventListener('DOMContentLoaded', init);
