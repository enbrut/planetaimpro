/*
 * Mostra els camps que hi ha amagats i que es corresponen a la id que passem com a paràmetre
 * @param id
 */

function mostrarCamps(id) {
	ids = ["nom-espectacle","nom-empresa"];
	for (i=0;i<ids.length;i++) {
		if(ids[i]==id) {
			document.getElementById(ids[i]).style.display="inline";
		}
		else {
			document.getElementById(ids[i]).style.display="none";
		}
	}	
}

function ocultarCamps(id) {
		document.getElementById("nom-espectacle").style.display="none";
		document.getElementById("nom-empresa").style.display="none";
	
}