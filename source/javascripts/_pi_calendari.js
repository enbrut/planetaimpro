
$(document).ready(function() {
	console.log(document.URL);
	if (document.URL.match(/\/ca\//)) {
		$("#eventCalendar").eventCalendar({
			eventsjson: '/json/calendar.json',
			eventsLimit: 10,
			showDescription: true,
			penEventInNewWindow: true,
			eventsScrollable: true,
			jsonDateFormat: 'human', // you can use also "human" 'YYYY-MM-DD HH:MM:SS'


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
	} else {
		$("#eventCalendar").eventCalendar({
			eventsjson: '/json/calendar.json',
			eventsLimit: 10,
			showDescription: true,
			penEventInNewWindow: true,
			eventsScrollable: true,
			jsonDateFormat: 'human', // you can use also "human" 'YYYY-MM-DD HH:MM:SS'


			monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
			dayNames: [ 'Domingo','Lunes','Martes','Miércoles', 'Jueves','Viernes','Sabado' ],
			dayNamesShort: [ 'Dom','Lun','Mar','Mie', 'Jue','Vie','Sab' ],
			txt_noEvents: "No hay eventos para este periodo",
			txt_SpecificEvents_prev: "",
			txt_SpecificEvents_after: "",
			txt_next: "siguiente",
			txt_prev: "anterior",
			txt_NextEvents: "Próximos eventos:",
			txt_GoToEventUrl: "Ir al evento",
			
			moveSpeed: 100,	// speed of month move when you clic on a new date
			
		});
	}
});
		