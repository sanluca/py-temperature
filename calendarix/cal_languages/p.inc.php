<?php
function translate($msgin){
    switch ($msgin) {
	case "About Calendarix": $new = "Sobre Calendarix"; break ;		// translate? OK by Luciano
	case "Add": $new = "Adicionar"; break ;
	case "Add Category": $new = "Adicionar Categoria"; break;
	case "Add Event": $new = "Adicionar Evento"; break;
	case "Add event": $new = "Adicionar evento" ; break;
	case "Add new user": $new = "Adicionar novo usu�rio"; break;
	case "Adding category": $new = "Adicionando categoria"; break;
	case "Adding event": $new = "Adicionando evento" ; break ;
	case "Adding user": $new = "Adicionando usu�rio"; break ;
	case "Administration": $new = "Administra��o"; break;
	case "Administrator": $new = "Administrador"; break ;
	case "All categories": $new = "Todas as categorias"; break ;	
	case "Approval needed for posting of events.": $new = "Aprova��o requerida para publica��o de eventos."; break ;
	case "Approvals": $new = "Aprova��es"; break ;
	case "Approve": $new = "Aprovar"; break;
	case "Approving event": $new = "Aprovando evento"; break;
	
	case "Back": $new = "Voltar"; break;
	case "Both passwords entered do not match": $new = "Ambas as senhas digitadas s�o inv�lidas"; break;	

	case "Calendar": $new = "Calend�rio"; break;
	case "Cancel": $new = "Cancelar"; break ;
	case "Cannot delete current login user": $new = "N�o � poss�vel deletar usu�rio em sess�o"; break ;   
	case "Cannot change current login user": $new = "N�o poss�vel alterar usu�rio em sess�o"; break;	
	case "Cannot have a category with blank name": $new = "N�o existe categoria com nome em branco"; break ;
	case "Categories": $new = "Categorias"; break;
	case "Category": $new = "Categoria"; break;
	case "Change": $new = "Alterar"; break ;
	case "Change password/group": $new = "Alterar senha/grupo"; break; 		
	case "Choose Category": $new = "Escolha uma categoria"; break;
	case "Close": $new = "Fechar"; break;
	case "Coming Events": $new = "Pr�ximos eventos"; break;			// 0.6.20050830 OK by Luciano
	case "Confirm delete?": $new = "Confirma exclus�o?" ; break ;	
	case "Confirm delete all historical events before": $new = "Confirma deleta��o de itens hist�ricos anteriores"; break ;
	case "confirmed events for today": $new = "eventos confirmados para hoje"; break ;
	case "Confirm password": $new = "Confirme a senha"; break; 
	case "Copy Event": $new = "Copiar evento"; break ;
	case "Current Week": $new = "Semana vigente"; break;
	case "Current Month": $new = "M�s vigente"; break;
        case "Current Year": $new = "Ano vigente"; break;

	case "Date": $new = "Data"; break;
	case "Day": $new = "Dia"; break;
	case "Delete all historical events listed": $new = "Deletar todos os eventos hist�ricos listados"; break;
	case "Delete category": $new = "Deletar categoria"; break;
	case "Delete event": $new = "Deletar evento"; break;
	case "Delete user": $new = "Deletar usu�rio"; break;
	case "Deleting category": $new = "Deletando categoria"; break;
	case "Deleting event": $new = "Deletando evento"; break ;
	case "Deleting user": $new = "Deletando usu�rio"; break ;
	case "disabled": $new = "Esta se��o est� desabilitada"; break;

	case "Edit category": $new = "Editar categoria"; break;
	case "Edit event": $new = "Editar evento"; break;
	case "Edit information": $new = "Editar informa��o"; break;	// master translate? Ok by Luciano
	case "Email": $new = "Email"; break;
	case "End Time": $new = "Fim"; break ;
	case "Event": $new = "Evento"; break ;
	case "Event Category": $new = "Categoria do evento"; break;
	case "Event Description": $new = "Descri��o do evento"; break;
	case "Event repeated": $new = "Evento repetido"; break;  //Ok by Luciano
	case "Event Title": $new = "T�tulo do Evento"; break;
	case "events": $new = "eventos"; break;
	case "Events added will be posted immediately.": $new = "Os eventos adicionados ser�o postados imediatamente."; break ;
	case "events awaiting approval": $new = "eventos aguardando aprova��o"; break ;
	case "Events before": $new = "Eventos anteriores"; break ;
	case "events for": $new = "Eventos para"; break;
	case "Events for day": $new = "Eventos para o dia"; break;
	case "events for whole calendar": $new = "eventos para o calend�rio inteiro"; break;
	case "events for year": $new = "eventos para o ano"; break;
	case "Events from ": $new = "Eventos de "; break;
	case "Events in category": $new = "Eventos na categoria"; break;

	case "From": $new = "De"; break ;
	case "Functions": $new = "Fun��es"; break ;	// master translate? Ok by Luciano

	case "Go to": $new = "Ir para"; break;
	case "Go to day": $new = "Ir para dia"; break;
	case "Go to week": $new = "Ir para semana"; break;

	case "Historical Items": $new = "Artigos hist�ricos"; break;

	case "Login": $new = "Login"; break;
	case "Login session time out in seconds": $new = "Tempo de expira��o de uma sess�o em segundos"; break;
	case "Login session timeout": $new = "Sess�o Expirada"; break ;
	case "Logout": $new = "Sair"; break;

	case "Menu": $new = "Menu"; break;
	case "Month": $new = "M�s"; break;
	case "More info": $new = "Mais informa��es"; break;

	case "Name": $new = "Nome"; break;			// master translate? Ok by Luciano
	case "Next": $new = "Pr�xima"; break;				
	case "Next day": $new = "Pr�ximo dia"; break;
	case "Next week": $new = "Pr�xima semana"; break;
	case "No categories yet": $new = "Sem categorias dispon�veis"; break;
	case "No events": $new = "Sem eventos"; break;
	case "No Repeat": $new = "N�o repetir"; break;
	case "No results": $new = "Sem resultados"; break;
	case "No, go back!": $new = "N�o, volte!"; break;
	case "No.": $new = "N�o."; break;			// master translate? Ok by Luciano
	case "noadminapprove": $new = "Aprova��o de eventos adicionada por administradores n�o � necess�ria"; break ;
	case "noapprove": $new = "Aprova��o de eventos adicionados por usu�rios n�o necessita de administrador"; break ;
	case "nocat": $new = "Voc� precisa selecionar uma categoria !"; break;
	case "noday": $new = "Voc� precisa selecionar um dia !"; break;
	case "nodescription": $new = "Voc� precisa descrever o evento !"; break;
	case "nomonth": $new = "Voc� precisa selecionar um m�s !"; break;
	case "nonapproved": $new = "Eventos necessitando de aprova��o : "; break;
	case "nononapproved": $new = "Sem eventos a serem aprovados nesse momento"; break;
	case "notitle": $new = "Voc� precisa dar um t�tulo !"; break;
	case "noyear": $new = "Voc� precisa selecionar um ano !"; break;

	case "on": $new = "em"; break;
	case "Optional": $new = "Opcional"; break;
	case "or month": $new = "ou m�s"; break;
	case "or week": $new = "ou semana"; break;

	case "password": $new = "senha"; break;
	case "Please choose the category you only want to view events for": $new = "Por favor escolha a categoria que voc� deseja ver os eventos somente"; break; 
	case "Popup Month": $new = "Abrir m�s em janela separada"; break ;
	case "Previous": $new = "Anterior"; break;			
	case "Previous day": $new = "Dia anterior"; break;
	case "Previous week": $new = "Semana anterior"; break;

	case "Read more": $new = "Ler mais"; break;
	case "reallydelcat": $new = "Voc� tem certeza que deseja remover esta categoria? Todos os eventos relacionados com esta categoria ser�o permanentemente deletados!"; break;

	case "Repeat": $new = "Repetir"; break;
	case "results": $new = "resultado(s)"; break;
	case "Role": $new = "Papel"; break;		// master translate? OK??? by Luciano i don't know if this is the right tradution

	case "search": $new = "procurar"; break;
	case "Sort by": $new = "Ordener por"; break ;
	case "Sort by date": $new = "Ordenar por data"; break ;
	case "Sort by events": $new = "Ordenar por evento"; break ;
	case "Start Time": $new = "Hora In�cio"; break ;

	case "thankyou": $new = "Obrigado por adicionar um evento, ele aguardar� por aprova��o."; break;
	case "thankyoupost": $new = "Obrigado por adicionar um evento, ele ser� postado nesse momento."; break;
	case "till": $new = "at�"; break;
	case "Time added or updated": $new = "Hora adicionada ou atualizada"; break ;
	case "timeout msg": $new = "Mudan�as realizadas em sess�es expiradas ser�o efetivadas somente na pr�xima sess�o" ; break ;
	case "times every": $new = "vez(es) todo(a)"; break;
	case "To": $new = "At� �s"; break ;
	case "To delete category": $new = "Para deletar categoria"; break ;
	case "Today": $new = "Hoje"; break;
	case "Total": $new = "Total"; break;
	case "Total number of events for the month": $new = "Total de eventos deste m�s"; break ;
        case "Total number of events for user": $new = "Total de eventos deste usu�rio"; break ;
	case "Total unapproved events for the month": $new = "Total de eventos n�o aprovados neste m�s" ; break;
        case "Two weeks": $new = "Duas semanas" ; break;

	case "Update": $new = "Atualizar"; break;
	case "Update Event": $new = "Atualizar evento"; break;
	case "Updating category": $new = "Atualizando categoria"; break ;
	case "Updating event": $new = "Atualizando evento"; break;
	case "Updating user": $new = "Atualizando usu�rio"; break;			
	case "Unapproved events": $new = "Eventos n�o aprovados"; break ;
	case "User": $new = "Usu�rio"; break ;
	case "User Calendar": $new = "Calend�rio dos usu�rios"; break ;
	case "User description": $new = "Descri��o do usu�rio"; break ;	
	case "User group": $new = "Grupo do Usu�rio"; break ;				//Ok by Luciano
	case "User Management": $new = "Gerenciamento de usu�rios"; break;
	case "userdelok": $new = "Voc� tem certeza que deseja deletar este usu�rio ?"; break;
	case "username": $new = "Nome de usu�rio"; break;
	case "Username and passwords must be alpha-numeric and without spaces.": $new = "Usu�rio e senha devem ser caracteres alfanum�ricos e sem espa�os."; break; 	// version 0.4.20030731 Ok by Luciano
	case "Username entered already exists. Please use another username.": $new = "Nome de usu�rio j� existente. Por favor use outro nome de usu�rio."; break;
	case "users": $new = "usu�rios"; break;

	case "View": $new = "Ver"; break;
	case "View categories in year": $new = "Ver categorias no ano"; break ;
	case "View details or edit": $new = "Ver detalhes ou editar"; break ;
	case "View event": $new = "Ver evento"; break;
	case "View events of user": $new = "Ver eventos do usu�rio"; break;
	case "View events under this category in year": $new = "Ver eventos desta categoria"; break ;
	case "View historical events before": $new = "Ver eventos hist�ricos anteriores"; break ;
	case "View month": $new = "Ver m�s"; break;
	case "View week": $new = "Ver semana"; break;

	case "Web Calendar Admin Login": $new = "Calendarix - Valida��o de administrador"; break ;
	case "Web Calendar User Login": $new = "Calendarix - Valida��o de Usu�rio"; break ;
	case "week number": $new = "n�mero da semana"; break;
	case "Week starts": $new = "In�cio da semana"; break;
	case "wronglogin": $new = "Nome de usu�rio ou senha inv�lida"; break;

	case "Year": $new = "Ano"; break;
	case "Yes": $new = "Sim"; break;		// version 0.4.20030731 Ok by Luciano
	case "Yes, delete event !": $new = "Sim, deleta o evento !"; break;
	case "Yes, delete it!": $new = "Sim, deleta isso!"; break;

	default: $new = "<b>".$msgin."</b> precisa ser traduzido !";    break;

    }
    return $new;
}
?>
