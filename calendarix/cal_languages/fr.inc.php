<?php
function translate($msgin){

    switch ($msgin) {
	case "About Calendarix": $new = "� propos Calendarix"; break ;        
	case "Add": $new = "Ajouter"; break ;
	case "Add Category": $new = "Ajouter une cat�gorie"; break;
	case "Add Event": $new = "Ajouter un �v�nement"; break;
	case "Add event": $new = "Ajouter un �v�nement" ; break;
	case "Add new user": $new = "Ajouter un nouvel utilisateur"; break;
	case "Adding category": $new = "Cat�gorie ajout�e"; break;
	case "Adding event": $new = "Ev�nement ajout�" ; break ;
	case "Adding user": $new = "Utilisateur ajout�"; break ;
	case "Administration": $new = "Administration"; break;
	case "Administrator": $new = "Administrateur"; break ;
	case "All categories": $new = "Toutes cat�gories"; break ;       
	case "Approval needed for posting of events.": $new = "L'approbation est n�cessaire pour poster un �v�nement."; break;  
	case "Approvals": $new = "Approbations"; break ;
	case "Approve": $new = "Approuv�"; break;
	case "Approving event": $new = "Ev�nement approuv�"; break;
	
	case "Back": $new = "Retour"; break;
	case "Both passwords entered do not match": $new = "Les mots de passe ne correspondent pas"; break;	

	case "Calendar": $new = "Calendrier"; break;
	case "Cancel": $new = "Annuler"; break ;
	case "Cannot delete current login user": $new = "L'utilisateur en cours ne peux �tre supprim�"; break ;   
	case "Cannot change current login user": $new = "L'utilisateur en cours ne peut �tre chang�"; break;	
	case "Cannot have a category with blank name": $new = "Une cat�gorie ne peut pas �tre nulle"; break ;
	case "Categories": $new = "Cat�gories"; break;
	case "Category": $new = "Cat�gorie"; break;
	case "Change": $new = "Changer"; break ;
	case "Change password/group": $new = "Changer de mot de passe/groupe"; break; 		
	case "Choose Category": $new = "Choisir une Cat�gorie"; break;
	case "Close": $new = "Fermer"; break;
	case "Confirm delete?": $new = "confirmez l'effacement" ; break ;           
	case "Confirm delete all historical events before": $new = "Confirmer la suppression de l'historique de tous les �v�nements"; break ;
	case "confirmed events for today": $new = "Ev�nements confirm�s pour aujourd'hui"; break ;
	case "Confirm password": $new = "Confirmez le mot de passe"; break; 		
	case "Copy Event": $new = "Copie de l'�v�nement"; break ;				
	case "Current Week": $new = "Semaine en cours"; break;
	case "Current Month": $new = "Mois en cours"; break;
	case "Current Year": $new = "Ann�e en cours"; break;		

	case "Date": $new = "Date"; break;
	case "Day": $new = "Jour"; break;
	case "Delete all historical events listed": $new = "Effacer tous les �v�nements list�s"; break;
	case "Delete category": $new = "Supprimer la cat�gorie"; break;
	case "Delete event": $new = "Supprimer l'�v�nement"; break;
	case "Delete user": $new = "Supprimer l'utilisateur"; break;
	case "Deleting category": $new = "La cat�gorie est supprim�e"; break;
	case "Deleting event": $new = "L'�v�nement est supprim�"; break ;
	case "Deleting user": $new = "L'utilisateur est supprim�"; break ;
	case "disabled": $new = "Cette section est inaccessible"; break;

	case "Edit category": $new = "Editer une cat�gorie"; break;
	case "Edit event": $new = "Editer l'�v�nement"; break;
	case "Email": $new = "Email"; break;
	case "End Time": $new = "Heure de fin"; break ;
	case "Event": $new = "Ev�n�ment"; break ;
	case "Event Category": $new = "Cat�gorie �venementielle"; break;
	case "Event Description": $new = "Description de l'�v�nement"; break;
	case "Event repeated": $new = "P�riodicit� de l'�v�nement"; break;  
	case "Event Title": $new = "Titre de l'�v�nement"; break;
	case "events": $new = "�v�nements"; break;
	case "Events added will be posted immediately.": $new = "Les �v�nements ajout�s seront int�gr�s imm�diatement."; break ;
	case "events awaiting approval": $new = "�v�nements attendent l'approbation"; break ;
	case "Events before": $new = "Ev�nements avant le"; break ;
	case "events for": $new = "�v�n�ments pour"; break;
	case "Events for day": $new = "Ev�nements pour la journ�e"; break;
	case "events for whole calendar": $new = "�v�nements du calendrier"; break;
	case "events for year": $new = "�v�nements pour l'ann�e"; break;
	case "Events from ": $new = "Ev�n�ments du "; break;
	case "Events in category": $new = "Ev�n�ments dans la cat�gorie"; break;

	case "From": $new = "de"; break ;

	case "Go to": $new = "Aller �"; break; //don't appear in admin mode
	case "Go to day": $new = "Aller au jour"; break;
	case "Go to week": $new = "Aller � la semaine"; break;
	
	case "Historical Items": $new = "Historique"; break;

	case "Login": $new = "Connexion"; break;
	case "Login session time out in seconds": $new = "Dur�e d'activit� de la connexion en secondes"; break;
	case "Login session timeout": $new = "Dur�e d'activit� de la session"; break ;
	case "Logout": $new = "D�connexion"; break;

	case "Menu": $new = "Menu"; break;
	case "Month": $new = "Mois"; break;
	case "More info": $new = "Plus d'infos"; break;

	case "Next": $new = "Suivante"; break;				
	case "Next day": $new = "Jour suivant"; break;
	case "Next week": $new = "Semaine suivante"; break;
	case "No categories yet": $new = "Pas encore de cat�gorie"; break;
	case "No events": $new = "Pas d'�v�nements"; break;
	case "No Repeat": $new = "Pas de p�riodicit�"; break;
	case "No results": $new = "Pas de r�sultats"; break;
	case "No, go back!": $new = "Non, Revenez en arri�re !"; break;
	case "noadminapprove": $new = "Approbation des �v�nements ajout�s par les administrateurs sans besoin d'un administrateur"; break ; // don't really understand the meaning
	case "noapprove": $new = "Approbation des �v�nements ajout�s par des utilisateurs sans besoin d'un administrateur"; break ; //idem
	case "nocat": $new = "Vous devez s�lectionner une cat�gorie !"; break;
	case "noday": $new = "Vous devez s�lectionner un jour !"; break;
	case "nodescription": $new = "Vous devez donner une description de l'�v�nement !"; break;
	case "nomonth": $new = "Vous devez s�lectionner un mois !"; break;
	case "nonapproved": $new = "Ev�nements qui requi�rent une approbation "; break;
	case "nononapproved": $new = "Il n'y a pas d'�v�nements � approuver pour l'instant"; break;
	case "notitle": $new = "Vous devez donner un titre � l'�v�nement !"; break;
	case "noyear": $new = "Vous devez s�lectionner une ann�e !"; break;

	case "on": $new = "on"; break;
	case "Optional": $new = "Option"; break;
	case "or month": $new = "ou mois"; break;
	case "or week": $new = "ou semaine"; break;

	case "password": $new = "Mot de passe"; break;
	case "Please choose the category you only want to view events for": $new = "choisissez une cat�gorie"; break;  
	case "Popup Month": $new = "Fen�tre Popup du mois"; break ;
	case "Previous": $new = "Pr�c�dent"; break;			
	case "Previous day": $new = "Jour pr�c�dent"; break;
	case "Previous week": $new = "Semaine pr�c�dente"; break;

	case "Read more": $new = "Lire plus"; break;
	case "reallydelcat": $new = "Etes vous s�r de vouloir enlever cette cat�gorie ? Tous les �v�nements associ�s � cette cat�gorie seront d�finitivement effac�s !"; break;
	case "Repeat": $new = "P�riodicit�"; break;
	case "results": $new = "r�sultats"; break;

	case "search": $new = "chercher"; break;
	case "Sort by": $new = "Trier par"; break ;
	case "Sort by date": $new = "Trier par date"; break ;
	case "Sort by events": $new = "Trier par �v�nements"; break ;
	case "Start Time": $new = "Heure de d�but"; break ;
	
	case "thankyou": $new = "Merci d'avoir ajout� un �v�nement, il appara�tra apr�s approbation."; break;
	case "thankyoupost": $new = "Merci d'avoir entr� un �v�nement, il a bien �t� envoy�."; break;
	case "till": $new = "jusqu'au"; break;
	case "Time added or updated": $new = "Heure ajout�e ou mise � jour"; break ;
	case "timeout msg": $new = "Les changements ne seront visibles qu'� la prochaine connexion" ; break ;
	case "times every": $new = "fois"; break;	
	case "To": $new = "A"; break ;
	case "To delete category": $new = "Pour supprimer une cat�gorie"; break ;
	case "Today": $new = "Aujourd'hui"; break;
	case "Total": $new = "Total"; break;
	case "Total number of events for the month": $new = "Nombre total d'�v�nements pour le mois"; break ;
	case "Total number of events for user": $new = "Nombre total d'�v�nements pour l'utilisateur"; break ;		
	case "Total unapproved events for the month": $new = "Total des �v�nements non approuv�s pour le mois" ; break;
	case "Two weeks": $new = "Deux semaines" ; break;    

	case "Update": $new = "Mise � jour"; break;
	case "Update Event": $new = "Mise � jour d'un �v�nement"; break;
	case "Updating category": $new = "Cat�gorie mise � jour"; break ;
	case "Updating event": $new = "L'�v�nement a �t� mis � jour"; break;
	case "Updating user": $new = "L'utilisateur � �t� mis � jour"; break;			
	case "Unapproved events": $new = "Ev�n�ments non approuv�s"; break ;
	case "User": $new = "Utilisateur"; break ;
	case "User Calendar": $new = "Utilisateur du calendrier"; break ;
	case "User description": $new = "Profile de l'utilisateur"; break ;        
	case "User Management": $new = "Gestion des utilisateurs"; break;
	case "User group": $new = "Group de l'utilisateur"; break ;
	case "userdelok": $new = "Etes-vous s�r de vouloir supprimer l'utilisateur ?"; break;
	case "username": $new = "Nom d'utilisateur"; break;
	case "Username entered already exists. Please use another username.": $new = "Le nom d'utilisateur choisi existe d�j�. Choisissez-en un autre"; break;
	case "users": $new = "utilisateurs"; break;

	case "View": $new = "Voir"; break;
	case "View categories in year": $new = "Voir les cat�gories de l'ann�e"; break ;
	case "View details or edit": $new = "Voir les d�tails ou les �diter"; break ;
	case "View event": $new = "Voir l'�v�nement"; break;
	case "View events of user": $new = "Voir les �v�nements de cet utilisateur"; break;
	case "View events under this category in year": $new = "Voir les �v�nements de cette cat�gorie dans l'ann�e"; break ;
	case "View historical events before": $new = "Voir l'historique des �v�nements"; break ;
	case "View month": $new = "Voir mois"; break;
	case "View week": $new = "Voir semaine"; break;

	case "Web Calendar Admin Login": $new = "Calendarix Connexion de l'administrateur"; break ;
	case "Web Calendar User Login": $new = "Calendarix Connexion de l'utilisateur"; break ;
	case "week number": $new = "Num�ros de la semaine"; break;
	case "Week starts": $new = "La semaine commence le "; break;
	case "wronglogin": $new = "Nom d'utilisateur ou mot de passe incorrects"; break;

	case "Year": $new = "Ann�e"; break;
	case "Yes, delete event !": $new = "Oui, suppression de l'�v�nement !"; break;
	case "Yes, delete it!": $new = "Oui, le supprimer!"; break;

	default: $new = "<b>".$msgin."</b> needs to be translated !";    break;

    }
    return $new;
}
?>