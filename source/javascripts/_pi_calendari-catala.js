
$(document).ready(function() {
	$("#eventCalendar").eventCalendar({
		eventsjson: 'json/events.json.php',
		eventsLimit: 4,
		showDescription: true,
		penEventInNewWindow: true,
		eventsScrollable: true,


		monthNames: [ "Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre" ],
		dayNames: [ 'Diumenge','Dilluns','Dimarts','Dimecres', 'Dijous','Divendres','Dissabte' ],
		dayNamesShort: [ 'Dg','Dl','Dt','Dx', 'Dj','Dv','Ds' ],
		txt_noEvents: "No hi ha esdeveniments durant aquest període",
		txt_SpecificEvents_prev: "",
		txt_SpecificEvents_after: "esdeveniments:",
		txt_next: "següent",
		txt_prev: "anterior",
		txt_NextEvents: "Propers esdeveniments:",
		txt_GoToEventUrl: "Anar a l'esdeveniment",
	});
});
		