<?php
function translate($msgin){

    switch ($msgin) {
	case "About Calendarix": $new = "Visiteu el web de l&#8217;autor"; break ;		// translate?
	case "Add": $new = "Afegir"; break ;
	case "Add Category": $new = "Afegir Categoria"; break;
	case "Add Event": $new = "Afegir Activitat"; break;
	case "Add event": $new = "Afegir activitat" ; break;
	case "Add new user": $new = "Afegir nou usuari"; break;
	case "Adding category": $new = "Afegint una categoria"; break;
	case "Adding event": $new = "Afegint activitat" ; break ;
	case "Adding user": $new = "Afegint usuari"; break ;
	case "Administration": $new = "Administraci�"; break;
	case "Administrator": $new = "Administrador"; break ;
	case "All categories": $new = "Totes les categories"; break ;
	case "Approval needed for posting of events.": $new = "Es necessita aprovaci� per afegir activitats."; break ;
	case "Approvals": $new = "Aprovacions"; break ;
	case "Approve": $new = "Aprovar"; break;
	case "Approving event": $new = "Aprovant activitat"; break;

	case "Back": $new = "Enrera"; break;
	case "Both passwords entered do not match": $new = "Les consignes introduides no coincideixen"; break;

	case "Calendar": $new = "Calendari"; break;
	case "Cancel": $new = "Cancelar"; break ;
	case "Cannot delete current login user": $new = "No es pot esborrar aquest usuari"; break ;
	case "Cannot change current login user": $new = "No es pot modificar aquest usuari"; break;
	case "Cannot have a category with blank name": $new = "No es pot tenir una categoria sense nom"; break ;
	case "Categories": $new = "Categories"; break;
	case "Category": $new = "Categoria"; break;
	case "Change": $new = "Modificar"; break ;
	case "Change password/group": $new = "Canvi de consigna/grup"; break;
	case "Choose Category": $new = "Escull Categoria"; break;
	case "Close": $new = "Tancar"; break;
	case "Coming Events": $new = "Activitats pendents"; break;
	case "Confirm delete?": $new = "Confirmar esborrar?" ; break ;	
	case "Confirm delete all historical events before": $new = "Confirmar abans d'esborrar totes les activitats hist�riques"; break ;
	case "confirmed events for today": $new = "activitats confirmades per avui"; break ;
	case "Confirm password": $new = "Confirmar consigna"; break;
	case "Copy Event": $new = "Copiar activitat"; break ;
	case "Current Week": $new = "Aquesta Setmana"; break;
	case "Current Month": $new = "Aquest Mes"; break;
	case "Current Year": $new = "Aquest any"; break;

	case "Date": $new = "Data"; break;
	case "Day": $new = "D�a"; break;
	case "Delete all historical events listed": $new = "Esborrar totes les activitats hist�riques de la llista"; break;
	case "Delete category": $new = "Esborrar categoria"; break;
	case "Delete event": $new = "Esborrar activitat"; break;
	case "Delete user": $new = "Esborrar usuari"; break;
	case "Deleting category": $new = "Esborrant categoria"; break;
	case "Deleting event": $new = "Esborrant activitat"; break ;
	case "Deleting user": $new = "Esborrant usuari"; break ;
	case "disabled": $new = "Secci� desactivada"; break;

	case "Edit category": $new = "Editar categoria"; break;
	case "Edit event": $new = "Editar activitat"; break;
	case "Email": $new = "Email"; break;
	case "End Time": $new = "Hora d'acabament"; break ;
	case "Event": $new = "Activitat"; break ;
	case "Event Category": $new = "Categoria de l'activitat"; break;
	case "Event Description": $new = "Descripci� de l'activitat"; break;
	case "Event Title": $new = "T�tol de l'activitat"; break;
	case "events": $new = "activitats"; break;
	case "Events added will be posted immediately.": $new = "Les activitats afegides es publicaran inmediatament."; break ;
	case "events awaiting approval": $new = "activitats esperant aprovaci�"; break ;
	case "Events before": $new = "activitats anteriors"; break ;
	case "events for": $new = "activitats per a"; break;
	case "Events for day": $new = "Activitats per dia"; break;
	case "events for whole calendar": $new = "Activitats per calendari sencer"; break;
	case "events for year": $new = "Activitats per any"; break;
	case "Events from ": $new = "Activitats de "; break;
	case "Events in category": $new = "Activitats a la categoria"; break;

	case "From": $new = "De"; break ;

	case "Go to": $new = "Anar a"; break;
	case "Go to day": $new = "Anar a dia"; break;
	case "Go to week": $new = "Anar a setmana"; break;

	case "Historical Items": $new = "Art�cles hist�rics"; break;

	case "Login": $new = "Login"; break;
	case "Login session time out in seconds": $new = "Temps de caducitat de la sessi� de login en segons"; break;
	case "Login session timeout": $new = "Sesi� login fora de temps"; break ;
	case "Logout": $new = "Logout"; break;

	case "Menu": $new = "Men�"; break;
	case "Month": $new = "Mes"; break;
	case "More info": $new = "M�s informaci�"; break;

	case "Next": $new = "Seg�ent"; break;				
	case "Next day": $new = "D�a seg�ent"; break;
	case "Next week": $new = "Setmana seg�ent"; break;
	case "No categories yet": $new = "Sense categories encara"; break;
	case "No events": $new = "Sense Activitats"; break;
	case "No Repeat": $new = "No Repetir"; break;
	case "No results": $new = "Sense resultats"; break;
	case "No, go back!": $new = "No, torna enrera!"; break;
	case "noadminapprove": $new = "No �s necesaria l'aprovaci� de les activitats afegides per administradors"; break ;
	case "noapprove": $new = "L'aprovaci� dels administradors de les activitats afegides per usuaris no �s necesaria"; break ;
	case "nocat": $new = "Selecciona una categoria!"; break;
	case "noday": $new = "Selecciona un dia!"; break;
	case "nodescription": $new = "Falta descriure l'activitat!"; break;
	case "nomonth": $new = "Selecciona un mes!"; break;
	case "nonapproved": $new = "Activitats que requereixen aprovaci� : "; break;
	case "nononapproved": $new = "No hi han activitats que necessitin aprovaci�"; break;
	case "notitle": $new = "Posa un t�tol a l'activitat!"; break;
	case "noyear": $new = "Selecciona un any!"; break;

	case "on": $new = "el"; break;
	case "Optional": $new = "Opcional"; break;
	case "or month": $new = "o mes"; break;
	case "or week": $new = "o setmana"; break;

	case "password": $new = "consigna"; break;
	case "Please choose the category you only want to view events for": $new = "Escull una categoria d'activitats que vulguis veure"; break;
	case "Popup Month": $new = "Obrir mes en una finestra petita"; break ;
	case "Previous": $new = "Anterior"; break;			
	case "Previous day": $new = "D�a anterior"; break;
	case "Previous week": $new = "Setmana anterior"; break;

	case "Read more": $new = "Llegir m�s"; break;
	case "reallydelcat": $new = "Est�s segur que vols esborrar aquesta categoria? Totes les activitats asociades a aquesta categoria ser�n esborrades permanentement!"; break;

	case "Repeat": $new = "Repetir"; break;
	case "results": $new = "resultats"; break;

	case "search": $new = "cercar"; break;
	case "Sort by": $new = "Ordenar per"; break ;
	case "Sort by date": $new = "Ordenar per data"; break ;
	case "Sort by events": $new = "Ordenar per activitat"; break ;
	case "Start Time": $new = "Hora d'inici"; break ;

	case "thankyou": $new = "Gracies per afegir una activitat, apareixer� despr�s de la seva aprovaci�."; break;
	case "thankyoupost": $new = "Gracies per afegir una activitat, ja l'hem publicada."; break;
	case "till": $new = "fins"; break;
	case "Time added or updated": $new = "Hora afegida o actualitzada"; break ;
	case "timeout msg": $new = "Els canvis dins d'una sessi� caducada nom�s tindr�n efecte en el proper login" ; break ;
	case "times every": $new = "vegades cada"; break;
	case "To": $new = "A"; break ;
	case "To delete category": $new = "Per esborrar categoria"; break ;
	case "Today": $new = "Avui"; break;
	case "Total": $new = "Total"; break;
	case "Total number of events for the month": $new = "N�mero total d'activitats d'aquest mes"; break ;
	case "Total unapproved events for the month": $new = "Activitats sense aprovar del mes" ; break;
	case "Two weeks": $new = "Dues setmanas" ; break;

	case "Update": $new = "Actualitzar"; break;
	case "Update Event": $new = "Actualitzar activitat"; break;
	case "Updating category": $new = "Actualizant categoria"; break ;
	case "Updating event": $new = "Actualizant activitat"; break;
	case "Updating user": $new = "Actualizant usuari"; break;
	case "Unapproved events": $new = "Activitats sense aprovar"; break ;
	case "User": $new = "Usuari"; break ;
	case "User Calendar": $new = "Calendari d'usuari"; break ;
	case "User description": $new = "Descripci�n d'usuari"; break ;	
	case "User Management": $new = "Administraci� d'usuari"; break;
	case "User group": $new = "User grup"; break ;
	case "userdelok": $new = "Est�s segur que vols esborrar aquest usuari?"; break;
	case "username": $new = "Nickname"; break;
	case "Username entered already exists. Please use another username.": $new = "Nom d'usuari ja existeix, si us plau, fes servir un altre nom."; break;
	case "users": $new = "usuaris"; break;

	case "View": $new = "Veure"; break;
	case "View categories in year": $new = "Veure categories en any"; break ;
	case "View details or edit": $new = "Veure detalls o editar"; break ;
	case "View event": $new = "Veure activitat"; break;
	case "View events under this category in year": $new = "Veure activitats sota aquesta categoria en any"; break ;
	case "View historical events before": $new = "Veure activitats hist�riques abans"; break ;
	case "View month": $new = "Veure m�s"; break;
	case "View week": $new = "Veure setmana"; break;

	case "Web Calendar Admin Login": $new = "Calendarix Login d'Administrador"; break ;
	case "Web Calendar User Login": $new = "Calendarix Login d'usuari"; break ;
	case "week number": $new = "setmana n�mero"; break;
	case "Week starts": $new = "Setmana comen�a"; break;
	case "wronglogin": $new = "Username o consigna incorrectes!"; break;

	case "Year": $new = "Any"; break;
	case "Yes, delete event !": $new = "S�, esborrar activitat!"; break;
	case "Yes, delete it!": $new = "S�, esborra'l!"; break;
	case "Yes, delete it!": $new = "S�, esborra'l!"; break;
	case "View events of user": $new = "Veure les activitats de l'usuari"; break;

	default: $new = "<b>".$msgin."</b> necessita ser tradu�t!";    break;

    }
    return $new;
}
?>