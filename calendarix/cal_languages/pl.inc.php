<?php
function translate($msgin){

    switch ($msgin) {
	case "About Calendarix": $new = "About Calendarix"; break ;		
	case "Add": $new = "Dodaj"; break ;
	case "Add Category": $new = "Dodaj Kategori�"; break;
	case "Add Event": $new = "Dodaj Zdarzenie"; break;
	case "Add event": $new = "Dodaj zdarzenie" ; break;
	case "Add new user": $new = "Dodaj noewgo u�ytkownika"; break;
	case "Adding category": $new = "Dodawanie Kategorii"; break;
	case "Adding event": $new = "Dodawanie zdarzenia" ; break ;
	case "Adding user": $new = "Dodawanie u�ytkownika"; break ;
	case "Address": $new = "Adres"; break ;			// master translate?
	case "Administration": $new = "Administracja"; break;
	case "Administrator": $new = "Administrator"; break ;
	case "All categories": $new = "Wszystkie kategorie"; break ;		
	case "Approval needed for posting of events.": $new = "Konieczne jest zezwolenie do wysy�ania zdarze�."; break;  
	case "Approvals": $new = "Zezwolenia"; break ;
	case "Approve": $new = "Zezw�l"; break;
	case "Approving event": $new = "Zgoda na zdarzenie"; break;
	
	case "Back": $new = "Wstecz"; break;
	case "Both passwords entered do not match": $new = "Wpisane has�a nie s� identyczne"; break;	

	case "Calendar": $new = "Kalendarz"; break;
	case "Cancel": $new = "Anuluj"; break ;
	case "Cannot delete current login user": $new = "Nie mo�na skasowa� zalogowanego u�ytkownika"; break ;   
	case "Cannot change current login user": $new = "Nie mo�na skasowa� zalogowanego u�ytkownika"; break;	
	case "Cannot have a category with blank name": $new = "Nie mo�e by� Kategorii z pust� nazw�"; break ;
	case "Categories": $new = "Kategorie"; break;
	case "Category": $new = "Kategoria"; break;
	case "Change": $new = "Zmie�"; break ;
	case "Change password": $new = "Zmie� has�o"; break; 		// master translate?
	case "Change password/group": $new = "Zmie� has�o/grup�"; break; 	// master obsolete?	
	case "Choose Category": $new = "Wybierz kategori�"; break;
	case "Close": $new = "Zamknij"; break;
	case "Confirm delete?": $new = "Potwierdz usuni�cie?" ; break ;			
	case "Confirm delete all historical events before": $new = "Potwierdz skasowanie wszystkich starych zdarze�"; break ;
	case "confirmed events for today": $new = "potwierdzone zdarzenia na dzisiaj"; break ;
	case "Confirm password": $new = "Potwierdz has�o"; break; 		
	case "Copy Event": $new = "Kopiuj Zdarzenie"; break ;				
	case "Current Week": $new = "Bie��cy Tydzie�"; break;
	case "Current Month": $new = "Bie��cy Miesi�c"; break;
	case "Current Year": $new = "Bie��cy Rok"; break;		

	case "Date": $new = "Data"; break;
	case "Day": $new = "Dzie�"; break;
	case "Delete all historical events listed": $new = "Kasuj wszystkie stare wy�wietlone zdarzenia"; break;
	case "Delete category": $new = "Kasuj Kategori�"; break;
	case "Delete event": $new = "Kasuj zdarzenie"; break;
	case "Delete user": $new = "Kasuj u�ytkownika"; break;
	case "Deleting category": $new = "Kasowanie kategorii"; break;
	case "Deleting event": $new = "Kasowanie zdarzenia"; break ;
	case "Deleting user": $new = "Kasowanie u�ytkownika"; break ;
	case "disabled": $new = "Ta sekcja jest wy��czona"; break;

	case "Edit category": $new = "Edytuj kategori�"; break;
	case "Edit event": $new = "Edytuj zdarzenie"; break;
	case "Edit information": $new = "Edytuj informacj�"; break;	// master translate?
	case "Email": $new = "Email"; break;
	case "End Time": $new = "Zako�czenie"; break ;
	case "Event": $new = "Zdarzenie"; break ;
	case "Event Category": $new = "Kategoria Zdarzenia"; break;
	case "Event Description": $new = "Opis Zdarzenia"; break;
	case "Event repeated": $new = "Powt�rzenie zdarzenia"; break;  
	case "Event Title": $new = "Nazwa Zdarzenia"; break;
	case "events": $new = "zdarzenia"; break;
	case "Events added will be posted immediately.": $new = "Dodane zdarzenia b�d� wy�wietlone natychmiast."; break ;
	case "events awaiting approval": $new = "zdarzenia oczekuj�ce na zatwierdzenie"; break ;
	case "Events before": $new = "Poprzednie zdarzenia"; break ;
	case "events for": $new = "zdarzenia dla"; break;
	case "Events for day": $new = "Zdarzenia na dzie�"; break;
	case "events for whole calendar": $new = "zdarzenia dla ca�ego kalendarza"; break;
	case "events for year": $new = "zdarzena dla roku"; break;
	case "Events from ": $new = "Zdarzenia od "; break;
	case "Events in category": $new = "Zdarzenia w kategorii"; break;

	case "From": $new = "Od"; break ;
	case "Functions": $new = "Funkcje"; break ;	// master translate?

	case "Go to": $new = "Id� do"; break;
	case "Go to day": $new = "Id� do dnia"; break;
	case "Go to week": $new = "Id� do tygodnia"; break;

	case "Historical Items": $new = "Historyczne zdarzenia"; break;

	case "Login": $new = "Zaloguj si�"; break;
	case "Login session time out in seconds": $new = "Zako�czenie sesji logowania w sekundach"; break;
	case "Login session timeout": $new = "Zako�czenie sesji logowania"; break ;
	case "Logout": $new = "Wyloguj si�"; break;

	case "Menu": $new = "Menu"; break;
	case "Month": $new = "Miesi�c"; break;
	case "More info": $new = "Wi�cej informacji"; break;

	case "Name": $new = "Imi�"; break;			// master translate?
	case "Next": $new = "Nast�pny"; break;				
	case "Next day": $new = "Nast�pny dzie�"; break;
	case "Next week": $new = "Nast�pny tydzie�"; break;
	case "No categories yet": $new = "Nie ma �adnych kategorii"; break;
	case "No events": $new = "Brak zdarze�"; break;
	case "No Repeat": $new = "Brak powt�rze�"; break;
	case "No results": $new = "Brak rezultat�w"; break;
	case "No, go back!": $new = "Nie, cofnij si�!"; break;
	case "No.": $new = "Nie."; break;			// master translate?
	case "noadminapprove": $new = "Zdarzenia dodane przez administrator�w nie wymagaj�ce zatwierdzenia"; break ;
	case "noapprove": $new = "Zdarzenia dodane przez u�ytkownik�w nie wymagaj�ce zatwierdzenia"; break ;
	case "nocat": $new = "Musisz wybra� kategori� !"; break;
	case "noday": $new = "Musisz wybra� dzie� !"; break;
	case "nodescription": $new = "Musisz doda� opis zdarzenia !"; break;
	case "nomonth": $new = "Musisz wybra� miesi�c !"; break;
	case "nonapproved": $new = "Zdarzenia oczekuj�ce na zatwierdzenie : "; break;
	case "nononapproved": $new = "Brak zdarze� oczekuj�cych na zatwierdzenie w tej chwili"; break;
	case "notitle": $new = "Musisz poda� nazw� zdarzenia !"; break;
	case "noyear": $new = "Musisz wybra� rok !"; break;

	case "on": $new = "w"; break;
	case "Optional": $new = "Opcjonalne"; break;
	case "or month": $new = "lub miesi�c"; break;
	case "or week": $new = "lub tydzie�"; break;

	case "password": $new = "has�o"; break;
	case "Please choose the category you only want to view events for": $new = "Prosz� wybra� kategori� w kt�rej chcesz zobaczy� zdarzenia"; break;  
	case "Popup Month": $new = "Poka� miesi�c"; break ;
	case "Previous": $new = "Poprzedni"; break;			
	case "Previous day": $new = "Poprzedni dzie�"; break;
	case "Previous week": $new = "Poprzedni tydzie�"; break;

	case "Read more": $new = "Zobacz szczeg�y"; break;
	case "reallydelcat": $new = "Czy na pewno chcesz skasowa� kategori�? Wszystkie zdarzenia zwi�zane z t� kategori� zostan� nieodwracalnie skasowane!"; break;
	case "Repeat": $new = "Powt�rz"; break;
	case "results": $new = "rezultaty"; break;
	case "Role": $new = "Rola"; break;			// master translate?

	case "search": $new = "szukaj"; break;
	case "Sort by": $new = "Sortuj"; break ;
	case "Sort by date": $new = "Sortuj wed�ug daty"; break ;
	case "Sort by events": $new = "Sortuj wed�ug zdarze�"; break ;
	case "Start Time": $new = "Czas rozpocz�cia"; break ;

	case "thankyou": $new = "Dzi�kujemy za dodanie zdarzenia. Pojawi si� ono po zatwierdzeniu"; break;
	case "thankyoupost": $new = "Dzi�kujemy za dodanie zdarzenia, zosta�o ono opublikowane."; break;
	case "till": $new = "till"; break;
	case "Time added or updated": $new = "Czas dodania lub aktualizacji"; break ;
	case "timeout msg": $new = "Zmiany w czasie zako�czenia sesji zostan� uwzgl�dnione przy nast�pnym logowaniu" ; break ;
	case "times every": $new = "razy, co"; break;	
	case "To": $new = "Do"; break ;
	case "To delete category": $new = "Aby skasowa� kategori�"; break ;
	case "Today": $new = "Dzisiaj"; break;
	case "Total": $new = "Razem"; break;
	case "Total number of events for the month": $new = "Ca�kowita liczba zdarze� w tym miesi�cu"; break ;
	case "Total number of events for user": $new = "Ca�kowita liczba zdarze� dla u�ytkownika"; break ;		
	case "Total unapproved events for the month": $new = "Ca�kowita liczba niezatwierdzonych zdarze� w tym miesi�cu" ; break;
	case "Two weeks": $new = "Dwa tygodnie" ; break;	

	case "Update": $new = "Aktualizuj"; break;
	case "Update Event": $new = "Aktualizuj Zdarzenie"; break;
	case "Updating category": $new = "Aktualizacja Kategorii"; break ;
	case "Updating event": $new = "Aktualizacja zdarzenia"; break;
	case "Updating user": $new = "Aktualizacja u�ytkownika"; break;			
	case "Unapproved events": $new = "Niezatwierdzone zdarzenia"; break ;
	case "User": $new = "U�ytkownik"; break ;
	case "User Calendar": $new = "Kalendarz U�ytkownika"; break ;
	case "User description": $new = "Opis U�ytkownika"; break ;		
	case "User group": $new = "Grupa U�ytkownika"; break ;				
	case "User Management": $new = "Zarz�dzanie U�ytkownikami"; break;
	case "userdelok": $new = "Czy na pewno chcesz skasowa� tego U�ytkownika ?"; break;
	case "username": $new = "Nazwa u�ytkownika"; break;
	case "Username and passwords must be alpha-numeric and without spaces.": $new = "Nazwa U�ytkownika i has�o musz� by� alfanumeryczne i bez spacji."; break; 	// version 0.4.20030731
	case "Username entered already exists. Please use another username.": $new = "Wprowadzona nazwa U�ytkowanika ju� istnieje. Prosz� wybra� inn� nazw�."; break;
	case "users": $new = "u�ytkownicy"; break;

	case "View": $new = "Widok"; break;
	case "View categories in year": $new = "Zobacz kategorie w roku"; break ;
	case "View details or edit": $new = "Zobacz lub edytuj szczeg�y"; break ;
	case "View event": $new = "Zobacz zdarzenie"; break;
	case "View events of user": $new = "Zobacz zdarzenia u�ytkownika"; break;
	case "View events under this category in year": $new = "Zobacz zdarzenia w tej kategorii w ci�gu roku"; break ;
	case "View historical events before": $new = "Zobacz stare zdarzenia przed"; break ;
	case "View month": $new = "Zobacz miesi�c"; break;
	case "View week": $new = "Zobacz tydzie�"; break;

	case "Web Calendar Admin Login": $new = "Logowanie administracyjne Calendarix"; break ;
	case "Web Calendar User Login": $new = "Logowanie U�ytkownika Calendarix"; break ;
	case "week number": $new = "numer tygodnia"; break;
	case "Week starts": $new = "Pocz�tek tygodnia"; break;
	case "wronglogin": $new = "Nieprawid�owa nazwa u�ytkownika lub has�o"; break;

	case "Year": $new = "Rok"; break;
	case "Yes": $new = "Tak"; break;		// version 0.4.20030731
	case "Yes, delete event !": $new = "Tak, skasyj to zdarzenie !"; break;
	case "Yes, delete it!": $new = "Tak, skasuj to!"; break;

	default: $new = "<b>".$msgin."</b> musi by� pzet�umaczone !";    break;

    }
    return $new;
}
?>