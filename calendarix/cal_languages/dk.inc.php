<?php
    // Danish translation function for Calendarix
    // source: Vincent @ 7. september 2003      -    revised by Erik Thomsen @  8. september
function translate($msgin){

  switch ($msgin) {
	case "1st": $new = "F�rste"; break ;		
	case "2nd": $new = "Andet"; break ;	
	case "3rd": $new = "Tredje"; break ;	
	case "4th": $new = "Fjerde"; break ;	

	case "About Calendarix": $new = "About Calendarix"; break ;		
      case "Account": $new = "Din Konto" ; break;	
	case "Add": $new = "Tilf�j"; break ;
	case "Add Category": $new = "Tilf�j kategori"; break;
	case "Add Event": $new = "Tilf�j Arrangement"; break;
	case "Add event": $new = "Tilf�j arrangement" ; break;
	case "Add new user": $new = "Tilf�j ny bruger"; break;
	case "Adding category": $new = "Tilf�jer kategori"; break;
	case "Adding event": $new = "Tilf�jer arrangement" ; break ;
      case "Address": $new = "Adresse"; break ;
	case "Adding user": $new = "Tilf�jer bruger"; break ;
	case "Administration": $new = "Administration"; break;
	case "Administrator": $new = "Administrator"; break ;
	case "All categories": $new = "Alle kategorier"; break ;		
	case "Approval needed for posting of events.": $new = "Godkendelse er n�dvendig for at oprette arrangementer."; break; 
	case "Approvals": $new = "Godkendelser"; break ;
	case "Approve": $new = "Godkend"; break;
	case "Approving event": $new = "Godkender arrangement"; break;
      case "Allowed search in User Calendar": $new = "Godkendte s�gninger i bruger Kalender"; break ; 
	case "Allowed Views in User Calendar": $new = "Godkendte visninger i bruger kalender"; break ;	
	case "and": $new = "og"; break ;	

	case "Back": $new = "Tilbage"; break;
	case "Both passwords entered do not match": $new = "De to passwords er ikke ens"; break;

	case "Calendar": $new = "Kalender"; break;
      case "Calendar Access": $new = "Kalender adgang"; break;		
	case "Calendar Name": $new = "Kalender navn"; break;		
	case "Cancel": $new = "Fortryd"; break ;
	case "Cannot delete current login user": $new = "Kan ikke slette den bruger der er logget p�"; break ;
	case "Cannot change current login user": $new = "Kan ikke rette den bruger der er logget p�"; break;
	case "Cannot have a category with blank name": $new = "Kan ikke have en kategori uden navn"; break ;
	case "Categories": $new = "Kategorier"; break;
	case "Category": $new = "Kategori"; break;
	case "Change": $new = "Ret"; break ;
      case "Click to select the color": $new = "Klik for at v�lge farve" ; break ;	
	case "Color Picker": $new = "Farve valg" ; break ;	
	case "Coming Events": $new = "Kommende Arrangementer"; break;			// Preben wetke 21feb2007
	case "Company Name": $new = "Firma navn" ; break ;
	case "Change password/group": $new = "Ret password/gruppe"; break;
	case "Choose Category": $new = "V�lg kategori"; break;
	case "Close": $new = "Luk"; break;
	case "Confirm delete?": $new = "Bekr�ft sletning ?" ; break ;			
	case "Confirm delete all historical events before": $new = "Vil du VIRKELIG slette alle gamle arrangementer"; break ;
	case "confirmed events for today": $new = "Godkendte arrangementer i dag"; break ;
	case "Confirm password": $new = "Gentag password"; break;
	case "Copy Event": $new = "Kopier arrangement"; break ;
	case "Current Week": $new = "Denne uge"; break;
	case "Current Month": $new = "Denne m�ned"; break;
	case "Current Year": $new = "Dette �r"; break;
      case "Change password": $new = "�ndre password"; break; 		
      case "Currency": $new = "Valuta" ; break ;			
	case "Current Color": $new = "Nuv�rende Farve" ; break ;				

	case "Date": $new = "Dato"; break;
      case "Date/Time Configuration": $new = "Dato/tid konfiguration"; break;		
	case "Day": $new = "Dag"; break;
	case "Delete all historical events listed": $new = "Slet alle de listede gamle arrangementer"; break;
	case "Delete category": $new = "Slet kategori"; break;
	case "Delete event": $new = "Slet arrangement"; break;
	case "Delete user": $new = "Slet bruger"; break;
      case "Delete": $new = "Slette"; break;
      case "Day/Week/Listing View": $new = "Dag/Uge/Visninger"; break;		
	case "Deleting category": $new = "Sletter kategori"; break;
	case "Deleting event": $new = "Sletter arrangement"; break ;
	case "Deleting user": $new = "Sletter bruger"; break ;
	case "disabled": $new = "Denne sektion er sl�et fra"; break;
      case "Description": $new = "Beskrivelse"; break;
      case "Details": $new = "Detaljer"; break;
      case "Display Areas": $new = "Display omr�der"; break;			
	case "Display Settings": $new = "Setup af display"; break;			

      case "Edit": $new = "Ret"; break;		
	case "Edit category": $new = "Ret kategori"; break;
	case "Edit event": $new = "Ret arrangement"; break;
	case "Email": $new = "e-mail"; break;
	case "End Time": $new = "Slut tid"; break ;
      case "event entry starts here": $new = "Starter p� denne dato!"; break;	
	case "Event": $new = "Arrangement"; break ;
      case "Event Display": $new = "Visning af arrangementer"; break;
	case "Event Category": $new = "Arrangement kategori"; break;
	case "Event Description": $new = "Arrangement forklaring"; break;
	case "Event repeated": $new = "Gentag arrangement"; break;
	case "Event Title": $new = "Arrangement titel"; break;
	case "events": $new = "Arrangementer"; break;
	case "Events added will be posted immediately.": $new = "Arrangementer vil blive vis med det samme."; break ;
	case "events awaiting approval": $new = "Arrangementer der venter p� godkendelse"; break ;
	case "Events before": $new = "arrangementer f�r"; break ;
	case "events for": $new = "arrangementer for"; break;
	case "Events for day": $new = "Arrangementer for dagen"; break;
	case "events for whole calendar": $new = "Arrangementer for hele kalenderen"; break;
	case "events for year": $new = "arrangementer for �r"; break;
	case "Events from ": $new = "Arrangementer fra "; break;
	case "Events in category": $new = "Arrangementer i kategori"; break;
      case "Edit information": $new = "�ndre informationer"; break;	
      case "every": $new = "hver"; break ;		
	case "Every year": $new = "Hvert �r"; break ;		
    
      case "Fee": $new = "Gebyr"; break;			
	case "From": $new = "Fra"; break ;
      case "Functions": $new = "Funktioner"; break ;	
      case "Fee is not enabled": $new = "Gebyr er ikke sl�et til."; break;	
	case "Footer Text": $new = "Tekst i Bunden (Footer)"; break;		
	case "from": $new = "fra"; break ;		
	case "Functions": $new = "Funktioner"; break ;	
	case "Go to": $new = "G� til"; break;
	case "Go to day": $new = "G� til dag"; break;
	case "Go to week": $new = "G� til uge"; break;
      case "General Settings": $new = "Generelle indstillinger"; break ;

	case "Historical Items": $new = "Historik"; break;
	case "Holidays": $new = "Fridage"; break;		
      case "Highlight Colors": $new = "Fremh�ve farver"; break;  

	case "last": $new = "sidste"; break ;
      case "Login": $new = "Login"; break;
	case "Login session time out in seconds": $new = "Login udl�ber om"; break;
	case "Login session timeout": $new = "Login er udl�bet"; break ;
	case "Logout": $new = "Logout"; break;

	case "Mail Configuration": $new = "Mail konfiguration"; break;
      case "Menu": $new = "Menu"; break;
      case "Menus and Titles": $new = "Menuer og titler"; break;
	case "Month": $new = "M�ned"; break;
	case "More info": $new = "Mere information"; break;
      case "Month View": $new = "Vis m�ned"; break ;		
	case "Month View Text": $new = "Vis m�neds tekst"; break;	

      case "Name": $new = "Navn"; break;			
	case "Next": $new = "N�ste"; break;				
	case "Next day": $new = "N�ste dag"; break;
	case "Next week": $new = "N�ste uge"; break;
	case "No categories yet": $new = "Ingen kategorier endnu"; break;
	case "No events": $new = "Ingen arrangementer"; break;
	case "No Repeat": $new = "Ingen gentagelser"; break;
	case "No results": $new = "Ingen resultater"; break;
	case "No, go back!": $new = "Nej, g� tilbage!"; break;
      case "Notify": $new = "Send mail til"; break;	
	case "noadminapprove": $new = "Godkendelse af arrangementer, som er oprettet af administrator - skal ikke godkendes af administratoren."; break ;
	case "noapprove": $new = "Godkendelse af arrangementer, oprettet af brugere - skal ikke godkendes af administratoren"; break ;
	case "nocat": $new = "Du skal v�lge en kategori !"; break;
	case "noday": $new = "Du skal v�lge en dag !"; break;
	case "nodescription": $new = "Du skal give et arrangement en beskrivelse !"; break;
	case "nomonth": $new = "Du skal v�lge en m�ned !"; break;
	case "nonapproved": $new = "Arrangementer skal godkendes : "; break;
	case "nononapproved": $new = "Der er ingen arrangementer der skal godkendes nu"; break;
	case "notitle": $new = "Du skal give et arrangement en titel !"; break;
	case "noyear": $new = "Du skal v�lge et �r !"; break;
      case "No.": $new = "Nr."; break;
	case "No": $new = "Nej"; break;
      case "No fees": $new = "Ingen gebyrer"; break;		

	case "on": $new = "p�"; break;
      case "Once on": $new = "Kun p� denne dato:"; break;		
      case "Options": $new = "Valgmuligheder"; break;			
	case "Optional": $new = "Ikke n�dvendig"; break;
	case "or month": $new = "eller m�ned"; break;
	case "or week": $new = "eller uge"; break;
      case "Other Text": $new = "Andet tekst setup"; break;			

	case "password": $new = "password"; break;
      case "Page Body": $new = "Side setup (Body)"; break ; 	
	case "Please choose the category you only want to view events for": $new = "Venligst v�lg den kategori som du vil vise arrangementer for"; break;  
	case "Popup Month": $new = "Popup m�ned"; break ;
	case "Previous": $new = "Forrige"; break;			
	case "Previous day": $new = "Forrige dag"; break;
	case "Previous week": $new = "Forrige uge"; break;
      case "Popup Settings": $new = "Popup indstillinger"; break ; 	
	case "Popup Window Text": $new = "Popup vindue tekst"; break ; 	

	case "Read more": $new = "L�s mere"; break;
	case "reallydelcat": $new = "Er du sikker p� at du vil slette denne kategori? Du sletter samtidig alle arrangementer i denne kategori permenent!"; break;
	case "Repeat": $new = "Gentag"; break;
	case "results": $new = "resultater"; break;
      case "Role": $new = "Rettigheder"; break;
      case "Row Listings": $new = "Linie visninger"; break;
      case "Refresh": $new = "Opdater sk�rm"; break;

	case "search": $new = "s�g"; break;
	case "Sort by": $new = "Sorter efter"; break ;
	case "Sort by date": $new = "Sorter efter dato"; break ;
	case "Sort by events": $new = "Sorter efter arrangement"; break ;
	case "Start Time": $new = "Start tid"; break ;
      case "Sum": $new = "Bel�b"; break ;		
      case "Select users": $new = "V�lg brugere"; break;
	case "style sheets will override these settings": $new = "Bare v�lg!" ; break ; 
      case "Search Page Text": $new = "S�ge side tekst"; break;		
	case "Select": $new = "V�lg"; break;			
	case "Select All": $new = "V�lg alt"; break;			
	case "Select users": $new = "V�lg brugere"; break;			

	case "Text Settings": $new = "Setup af tekst!"; break;	
      case "thankyou": $new = "Tak for det oprettede arrangement - det vil kunne ses i kalenderen n�r det er godkendt."; break;
	case "thankyoupost": $new = "Tak for det oprettede arrangement."; break;
	case "till": $new = "indtil"; break;
	case "Time added or updated": $new = "Tid tilf�jet eller �ndret"; break ;
	case "timeout msg": $new = "�ndringer i session timeout, vil f�rst virke ved n�ste logon" ; break ;
	case "times every": $new = "gange, hver"; break;
	case "To": $new = "Til"; break ;
	case "To delete category": $new = "For at slette kategori"; break ;
	case "Today": $new = "I dag"; break;
	case "Total": $new = "Total"; break;
	case "Total number of events for the month": $new = "Det totale antal arrangementer i denne m�ned"; break ;
	case "Total number of events for user": $new = "Det totale antal arrangementer for denne bruger"; break ;
	case "Total unapproved events for the month": $new = "Det totale antal, ikke godkendte arrangementer i denne m�ned" ; break;
	case "Two weeks": $new = "To uger" ; break;
      case "times": $new = "gange"; break;	
	case "Title": $new = "Titel"; break;	

	case "Update": $new = "Opdater"; break;
	case "Update Event": $new = "Opdater arrangement"; break;
	case "Updating category": $new = "Opdaterer kategori"; break ;
	case "Updating event": $new = "Opdaterer arrangement"; break;
	case "Updating user": $new = "Opdaterer bruger"; break;
	case "Unapproved events": $new = "Ikke godkendte arrangementer"; break ;
	case "User": $new = "Bruger"; break ;
	case "User Calendar": $new = "Bruger kalender"; break ;
      case "User description": $new = "Bruger beskrivelse"; break ;
	case "User description": $new = "User description"; break ;		
	case "User group": $new = "Bruger gruppe"; break ;
	case "User Management": $new = "Bruger administration"; break;
	case "userdelok": $new = "Er du sikker p� at du vil slette denne bruger ?"; break;
	case "username": $new = "brugernavn"; break;
	case "Username entered already exists. Please use another username.": $new = "Brugernavn eksisterer allerede. V�lg venligst et andet."; break;
	case "users": $new = "brugere"; break;
      case "Using Stylesheet": $new = "Brug af Stylesheet"; break;

	case "View": $new = "Vis"; break;
	case "View categories in year": $new = "Vis p� kategorier i �r"; break ;
	case "View details or edit": $new = "Vis detalier eller ret"; break ;
	case "View event": $new = "Vis arrangement"; break;
	case "View events of user": $new = "Vis arrangementer for bruger"; break;
	case "View events under this category in year": $new = "Vis arrangementer under denne kategori i �r"; break ;
	case "View historical events before": $new = "Vis historiske arrangementer f�r"; break ;
	case "View month": $new = "Vis m�ned"; break;
	case "View week": $new = "Vis uge"; break;
      case "Value": $new = "V�rdi"; break ;				
	case "Variable": $new = "Variabeler"; break ;				

	case "Web Calendar Admin Login": $new = "Administrator login"; break ;
      case "Website": $new = "Webside URL"; break ;
	case "Web Calendar User Login": $new = "Bruger login"; break ;
	case "week number": $new = "uge nummer"; break;
	case "Week starts": $new = "Ugen starter"; break;
	case "wronglogin": $new = "Forkert brugernavn eller password"; break;
        
	case "Year": $new = "�r"; break;
      case "Yes": $new = "Ja"; break;	
	case "Yes, delete event !": $new = "Ja, slet dette arrangement !"; break;
	case "Yes, delete it!": $new = "Ja, slet den!"; break;

	default: $new = "<b>".$msgin."</b> mangler at blive oversat !";    break;
    }
    return $new;
}
?>
