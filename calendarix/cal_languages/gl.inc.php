<?php
function translate($msgin){

    switch ($msgin) {
	case "About Calendarix": $new = "Verbo de Calendarix"; break ;		// translate?
	case "Add": $new = "Engadir"; break ;
	case "Add Category": $new = "Engadir Categor�a"; break;
	case "Add Event": $new = "Engadir Evento"; break;
	case "Add event": $new = "Engadir Evento" ; break;
	case "Add new user": $new = "Engadir novo usuario"; break;
	case "Adding category": $new = "Engadindo unha categor�a"; break;
	case "Adding event": $new = "Engadindo evento" ; break ;
	case "Adding user": $new = "Engadindo usuario"; break ;
	case "Administration": $new = "Administraci�n"; break;
	case "Administrator": $new = "Administrador"; break ;
	case "All categories": $new = "Todas as categor�as"; break ;
	case "Approval needed for posting of events.": $new = "Neces�tase aprobaci�n para engadir eventos."; break ;
	case "Approvals": $new = "Aprobaci�ns"; break ;
	case "Approve": $new = "Aprobarse"; break;
	case "Approving event": $new = "Aprobando evento"; break;

	case "Back": $new = "Atr�s"; break;
	case "Both passwords entered do not match": $new = "As chaves introducidas non concordan"; break;

	case "Calendar": $new = "Calendario"; break;
	case "Cancel": $new = "Cancelar"; break ;
	case "Cannot delete current login user": $new = "Non se pode borrar este usuario"; break ;
	case "Cannot change current login user": $new = "Non se pode modificar este usuario"; break;
	case "Cannot have a category with blank name": $new = "Non se pode ter unha categor�a sen nome"; break ;
	case "Categories": $new = "Categor�as"; break;
	case "Category": $new = "Categor�a"; break;
	case "Change": $new = "Modificar"; break ;
	case "Change password/group": $new = "Cambiar chave/grupo"; break;
	case "Choose Category": $new = "Elixe Categor�a"; break;
	case "Close": $new = "Cerrar"; break;
	case "Confirm delete?": $new = "Confirmar borrar?" ; break ;
	case "Confirm delete all historical events before": $new = "Confirmar antes de borrar todos os eventos hist�ricos"; break ;
	case "confirmed events for today": $new = "eventos confirmados para hoxe"; break ;
	case "Confirm password": $new = "Confirmar chave"; break;
	case "Copy Event": $new = "Copiar Evento"; break ;
	case "Current Week": $new = "Esta Semana"; break;
	case "Current Month": $new = "Este Mes"; break;
	case "Current Year": $new = "Este ano"; break;

	case "Date": $new = "Data"; break;
	case "Day": $new = "D�a"; break;
	case "Delete all historical events listed": $new = "Borrar todos os eventos hist�ricos listados"; break;
	case "Delete category": $new = "Borrar categor�a"; break;
	case "Delete event": $new = "Borrar evento"; break;
	case "Delete user": $new = "Borrar usuario"; break;
	case "Deleting category": $new = "Borrando categor�a"; break;
	case "Deleting event": $new = "Borrando evento"; break ;
	case "Deleting user": $new = "Borrando usuario"; break ;
	case "disabled": $new = "Esta secci�n foi desactivada"; break;

	case "Edit category": $new = "Editar categor�a"; break;
	case "Edit event": $new = "Editar evento"; break;
	case "Email": $new = "Email"; break;
	case "End Time": $new = "Hora fin"; break ;
	case "Event": $new = "Evento"; break ;
	case "Event Category": $new = "Categor�a do evento"; break;
	case "Event Description": $new = "Descrici�n do evento"; break;
	case "Event Title": $new = "T�tulo do evento"; break;
	case "events": $new = "eventos"; break;
	case "Events added will be posted immediately.": $new = "Os eventos engadidos ser�n postos inmediatamente."; break ;
	case "events awaiting approval": $new = "eventos esperando aprobaci�n"; break ;
	case "Events before": $new = "Eventos anteriores"; break ;
	case "events for": $new = "eventos para"; break;
	case "Events for day": $new = "Eventos por d�a"; break;
	case "events for whole calendar": $new = "Eventos para calendario entero"; break;
	case "events for year": $new = "Eventos por ano"; break;
	case "Events from ": $new = "Eventos de "; break;
	case "Events in category": $new = "Eventos en categor�a"; break;

	case "From": $new = "De"; break ;

	case "Go to": $new = "Ir a"; break;
	case "Go to day": $new = "Ir a d�a"; break;
	case "Go to week": $new = "Ir a semana"; break;

	case "Historical Items": $new = "Artigos hist�ricos"; break;

	case "Login": $new = "Login"; break;
	case "Login session time out in seconds": $new = "Tempo de caducidade da sesi�n de login en segundos"; break;
	case "Login session timeout": $new = "Sesi�n login f�ra de tempo"; break ;
	case "Logout": $new = "Logout"; break;

	case "Menu": $new = "Menu"; break;
	case "Month": $new = "Mes"; break;
	case "More info": $new = "M�is informaci�n"; break;

	case "Next": $new = "Seguinte"; break;
	case "Next day": $new = "D�a seguinte"; break;
	case "Next week": $new = "Semana siguiente"; break;
	case "No categories yet": $new = "Sen categor�as a�nda"; break;
	case "No events": $new = "Sen Eventos"; break;
	case "No Repeat": $new = "Non Repetir"; break;
	case "No results": $new = "Sen resultados"; break;
	case "No, go back!": $new = "Non, volver atr�s!"; break;
	case "noadminapprove": $new = "Aprobaci�n dos eventos engadidos por administradores non � necesaria"; break ;
	case "noapprove": $new = "A aprobaci�n dos administradores dos eventos engadidos por usuarios non � necesaria"; break ;
	case "nocat": $new = "Debes seleccionar unha categor�a!"; break;
	case "noday": $new = "Debes seleccionar un d�a!"; break;
	case "nodescription": $new = "Debes dar una descrici�n do evento!"; break;
	case "nomonth": $new = "Debes seleccionar un mes!"; break;
	case "nonapproved": $new = "Eventos que requiren aprobaci�n : "; break;
	case "nononapproved": $new = "No hai eventos que necesiten aprobaci�n"; break;
	case "notitle": $new = "Debes darlle un t�tulo ao evento!"; break;
	case "noyear": $new = "Debes seleccionar un ano!"; break;

	case "on": $new = "o"; break;
	case "Optional": $new = "Opcional"; break;
	case "or month": $new = "ou mes"; break;
	case "or week": $new = "ou semana"; break;

	case "password": $new = "chave"; break;
	case "Please choose the category you only want to view events for": $new = "Elixe unha categor�a de eventos que queres ver"; break;
	case "Popup Month": $new = "Abrir mes nunha vent� peque�a"; break ;
	case "Previous": $new = "Anterior"; break;
	case "Previous day": $new = "D�a anterior"; break;
	case "Previous week": $new = "Semana anterior"; break;

	case "Read more": $new = "Leer m�is"; break;
	case "reallydelcat": $new = "Est�s certo de que quieres borrar esta categor�a? Todos os eventos asociados con esta categor�a ser�n borrados permanentemente!"; break;

	case "Repeat": $new = "Repetir"; break;
	case "results": $new = "resultados"; break;

	case "search": $new = "procurar"; break;
	case "Sort by": $new = "Ordenar por"; break ;
	case "Sort by date": $new = "Ordenar por data"; break ;
	case "Sort by events": $new = "Ordenar por evento"; break ;
	case "Start Time": $new = "Hora de inicio"; break ;

	case "thankyou": $new = "Grazas por engadir o evento, aparecer� despois da s�a aprobaci�n."; break;
	case "thankyoupost": $new = "Grazas por introducir un evento, foi engadido."; break;
	case "till": $new = "ata"; break;
	case "Time added or updated": $new = "Hora engadida ou actualizada"; break ;
	case "timeout msg": $new = "Os cambios nunha sesi�n caducada s� ter�n efecto no vindeiro login" ; break ;
	case "times every": $new = "veces cada"; break;
	case "To": $new = "A"; break ;
	case "To delete category": $new = "Para borrar categor�a"; break ;
	case "Today": $new = "Hoxe"; break;
	case "Total": $new = "Total"; break;
	case "Total number of events for the month": $new = "N�mero total de eventos no mes"; break ;
	case "Total unapproved events for the month": $new = "Eventos sen aprobar do mes" ; break;
	case "Two weeks": $new = "D�as semanas" ; break;

	case "Update": $new = "Actualizar"; break;
	case "Update Event": $new = "Actualizar evento"; break;
	case "Updating category": $new = "Actualizando categor�a"; break ;
	case "Updating event": $new = "Actualizando evento"; break;
	case "Updating user": $new = "Actualizando usuario"; break;
	case "Unapproved events": $new = "Eventos sen aprobar"; break ;
	case "User": $new = "Usuario"; break ;
	case "User Calendar": $new = "Calendario de Usuario"; break ;
	case "User description": $new = "Descrici�n de usuario"; break ;
	case "User Management": $new = "Administraci�n de Usuario"; break;
	case "User group": $new = "Grupo de Usuario"; break ;
	case "userdelok": $new = "Est�s certo de que queres borrar este usuario?"; break;
	case "username": $new = "Alcume"; break;
	case "Username entered already exists. Please use another username.": $new = "O nome de usuario xa existe, por favor use outro nome."; break;
	case "users": $new = "usuarios"; break;

	case "View": $new = "Ver"; break;
	case "View categories in year": $new = "Ver categor�as en ano"; break ;
	case "View details or edit": $new = "Ver detalles ou editar"; break ;
	case "View event": $new = "Ver evento"; break;
	case "View events under this category in year": $new = "Ver eventos baixo esta categor�a en ano"; break ;
	case "View historical events before": $new = "Ver eventos hist�ricos antes"; break ;
	case "View month": $new = "Ver mes"; break;
	case "View week": $new = "Ver semana"; break;

	case "Web Calendar Admin Login": $new = "Calendarix Login de Administrador"; break ;
	case "Web Calendar User Login": $new = "Calendarix Login de Usuario"; break ;
	case "week number": $new = "semana n�mero"; break;
	case "Week starts": $new = "Semana empeza"; break;
	case "wronglogin": $new = "Username ou chave incorrectos!"; break;

	case "Year": $new = "Ano"; break;
	case "Yes, delete event !": $new = "S�, borrar evento!"; break;
	case "Yes, delete it!": $new = "S�, b�rrao!"; break;

	default: $new = "<b>".$msgin."</b> necesita ser traducido!";    break;

    }
    return $new;
}
?>