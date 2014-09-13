
$(document).ready(function() {
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
});
		