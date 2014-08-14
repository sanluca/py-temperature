<?php
function translate($msgin){
    switch ($msgin) {
	case "About Calendarix": $new = "Calendarixr�l"; break ;		
	case "Add": $new = "Hozz�ad"; break ;
	case "Add Category": $new = "KAteg�ri�t hozz�ad"; break;
	case "Add Event": $new = "Esem�nyt hozz�ad"; break;
	case "Add event": $new = "Esem�nyt hozz�ad" ; break;
	case "Add new user": $new = "�j felhaszn�l�t hozz�ad"; break;
	case "Adding category": $new = "Kateg�ria hozz�ad�s"; break;
	case "Adding event": $new = "Esem�ny hozz�ad�s" ; break ;
	case "Adding user": $new = "Felhaszn�l� hozz�ad�s"; break ;
	case "Administration": $new = "Adminisztr�ci�"; break;
	case "Administrator": $new = "Rendszergazda"; break ;
	case "All categories": $new = "�sszes kateg�ria"; break ;		
	case "Approval needed for posting of events.": $new = "Enged�lyez�s sz�s�ges az esem�nyek r�gz�t�s�hez"; break;  
	case "Approvals": $new = "Enged�lyek"; break ;
	case "Approve": $new = "Enged�lyez"; break;
	case "Approving event": $new = "Esem�ny enged�lyez�s"; break;
	
	case "Back": $new = "Vissza"; break;
	case "Both passwords entered do not match": $new = "Jelszavak nem egyeznek"; break;	

	case "Calendar": $new = "Hat�rid�napl�"; break;
	case "Cancel": $new = "M�gse"; break ;
	case "Cannot delete current login user": $new = "A bejelentkezett felhaszn�l� nem t�r�lhet�"; break ;   
	case "Cannot change current login user": $new = "A bejelentkezett felhaszn�l� nem v�lthat�"; break;	
	case "Cannot have a category with blank name": $new = "Kateg�ria neve nem lehet �res"; break ;
	case "Categories": $new = "Kateg�ri�k"; break;
	case "Category": $new = "Kateg�ria"; break;
	case "Change": $new = "V�ltoztat"; break ;
	case "Change password/group": $new = "Jelsz�/csoport v�ltoztat�s"; break; 	// master obsolete?	
	case "Choose Category": $new = "V�lasszon Kategoria"; break;
	case "Close": $new = "Bez�r"; break;
	case "Coming Events": $new = "H�tral�v� esem�nyek"; break;			// 0.6.20050830
	case "Confirm delete?": $new = "Biztosan t�rli?" ; break ;			
	case "Confirm delete all historical events before": $new = "Biztosan t�rli a r�gi esem�nyeket"; break ;
	case "confirmed events for today": $new = "Mai napon l�tott esem�nyek"; break ;
	case "Confirm password": $new = "Jelsz� meger�s�t�se"; break; 		
	case "Copy Event": $new = "Esem�my m�sol�sa"; break ;				
	case "Current Week": $new = "Foly� H�t"; break;
	case "Current Month": $new = "Foly� H�"; break;
	case "Current Year": $new = "Foly� �v"; break;		

	case "Date": $new = "D�tum"; break;
	case "Day": $new = "nap"; break;
	case "Delete all historical events listed": $new = "A kilist�zott esem�nyek t�rl�se"; break;
	case "Delete category": $new = "Kateg�ria t�rl�se"; break;
	case "Delete event": $new = "Esem�ny t�rl�se"; break;
	case "Delete user": $new = "Felhaszn�l� t�rl�se"; break;
	case "Deleting category": $new = "Kateg�ria t�rl�s"; break;
	case "Deleting event": $new = "Esem�ny t�rl�s"; break ;
	case "Deleting user": $new = "Felhaszn�l� t�rl�s"; break ;
	case "disabled": $new = "Ez a r�sz nincs aktiv�lva"; break;

	case "Edit category": $new = "Kategoria m�dos�t�s"; break;
	case "Edit event": $new = "Esem�ny m�d�s�t�s"; break;
	case "Edit information": $new = "INform�ci� m�dos�t�s"; break;	// master translate?
	case "Email": $new = "Email"; break;
	case "End Time": $new = "V�ge"; break ;
	case "Event": $new = "Esem�ny"; break ;
	case "Event Category": $new = "Esem�ny kateg�ria"; break;
	case "Event Description": $new = "Esem�ny le�r�s"; break;
	case "Event repeated": $new = "Esem�ny megism�telve"; break;  
	case "Event Title": $new = "Esem�ny neve"; break;
	case "events": $new = "esem�ny"; break;
	case "Events added will be posted immediately.": $new = "Hozz�adott esem�ny azonnal r�gz�t�sre ker�l"; break ;
	case "events awaiting approval": $new = "esem�ny elfogad�sra v�r"; break ;
	case "Events before": $new = "Esem�ny el�tt"; break ;
	case "events for": $new = "Esem�ny"; break;
	case "Events for day": $new = "Esem�ny m�ra"; break;
	case "events for whole calendar": $new = "Hat�rid�napl� �sszes esem�nye"; break;
	case "events for year": $new = "esem�nyek erre az �vre"; break;
	case "Events from ": $new = "Esem�nyek:   "; break;
	case "Events in category": $new = "Events in category"; break;

	case "From": $new = "id�pontt�l"; break ;
	case "Functions": $new = "Funkci�k"; break ;	// master translate?

	case "Go to": $new = "Ugr�s"; break;
	case "Go to day": $new = "Adott napra v�lt�s"; break;
	case "Go to week": $new = "H�tre ugr�s"; break;

	case "Historical Items": $new = "R�gi esem�nyek"; break;

	case "Login": $new = "Bejelentkez�s"; break;
	case "Login session time out in seconds": $new = "Bejelentkez�s m�sodperceken bel�l el�v�l"; break;
	case "Login session timeout": $new = "�jra be kell jelentkezni"; break ;
	case "Logout": $new = "Kijelentkez�s"; break;

	case "Menu": $new = "Men�"; break;
	case "Month": $new = "H�nap"; break;
	case "More info": $new = "R�szletesen"; break;

	case "Name": $new = "N�v"; break;			// master translate?
	case "Next": $new = "K�vetkez�"; break;				
	case "Next day": $new = "K�v. nap"; break;
	case "Next week": $new = "K�v. h�t"; break;
	case "No categories yet": $new = "M�g nincs kateg�ria"; break;
	case "No events": $new = "Nincs esem�ny"; break;
	case "No Repeat": $new = "Nincs ism�tl�s"; break;
	case "No results": $new = "Nincs tal�lat"; break;
	case "No, go back!": $new = "Nem, l�pj vissza!"; break;
	case "No.": $new = "Nem."; break;			// master translate?
	case "noadminapprove": $new = "Rendszergazda �ltal hozz�adott esem�nyek aut�matikusan r�gz�t�sre ker�lnek"; break ;
	case "noapprove": $new = "Felhaszn�l� �ltal hozz�adott esem�nyek aut�matikusan r�gz�t�sre ker�lnek"; break ;
	case "nocat": $new = "V�lasszon kateg�ri�t !"; break;
	case "noday": $new = "V�lasszon napot !"; break;
	case "nodescription": $new = "Esem�ny leir�st ki kell t�lteni !"; break;
	case "nomonth": $new = "V�lasszon h�napot !"; break;
	case "nonapproved": $new = "Elfogad�sra v�r� esem�nyek : "; break;
	case "nononapproved": $new = "Nincs elfogad�sra v�r� esem�ny"; break;
	case "notitle": $new = "Esem�ny nev�t meg kell adja !"; break;
	case "noyear": $new = "V�lasszon �vet !"; break;

	case "on": $new = "on"; break;
	case "Optional": $new = "nem k�telez�"; break;
	case "or month": $new = "vagy h�napra"; break;
	case "or week": $new = "vagy h�tre"; break;

	case "password": $new = "jelsz�"; break;
	case "Please choose the category you only want to view events for": $new = "V�lasszon kateg�ri�t az ahhoz tartoz� esem�nyek megtekint�s�hez"; break;  
	case "Popup Month": $new = "H�nap Popup"; break ;
	case "Previous": $new = "El�z�"; break;			
	case "Previous day": $new = "El�z� nap"; break;
	case "Previous week": $new = "El�z� h�t"; break;

	case "Read more": $new = "R�szletesebben"; break;
	case "reallydelcat": $new = "A kateg�rai t�rl�s�vel az ahhoz tartoz� �sszes esem�nyt is t�rli !"; break;
	case "Repeat": $new = "Ism�tl�s"; break;
	case "results": $new = "Tal�lat"; break;
	case "Role": $new = "Szerep"; break;			// master translate?

	case "search": $new = "Keres"; break;
	case "Select": $new = "V�laszt"; break;		// 0.7.20060401
	case "Sort by": $new = "Oszt�lyozas"; break ;
	case "Sort by date": $new = "Oszt�lyoz�s d�tum alapj�n"; break ;
	case "Sort by events": $new = "Oszt�lyoz�s Esem�ny alapj�n"; break ;
	case "Start Time": $new = "Kezd�dik"; break ;

	case "thankyou": $new = "K�sz�nj�k az esem�ny bevitel�t, enged�lyez�s ut�n r�gz�t�sre ker�l."; break;
	case "thankyoupost": $new = "K�sz�nj�k az esem�ny bevitel�t, azonnal r�gz�t�sre ker�lt"; break;
	case "till": $new = " - "; break;
	case "Time added or updated": $new = "Id� hozz�adva vagy friss�tve"; break ;
	case "timeout msg": $new = "A kijelentkeztet�si id� csak �jboli bejelentkez�skor m�dosul" ; break ;
	case "times every": $new = "szor"; break;	
	case "To": $new = "To"; break ;
	case "To delete category": $new = "Kateg�ria t�rl�se"; break ;
	case "Today": $new = "Ma"; break;
	case "Total": $new = "�sszes"; break;
	case "Total number of events for the month": $new = "Esem�nyek sz�ma ebben a h�napban"; break ;
	case "Total number of events for user": $new = "Felhaszn�l� �sszes esem�nye"; break ;		
	case "Total unapproved events for the month": $new = "Elfogad�sra v�r� esem�ny ebben a h�napban" ; break;
	case "Two weeks": $new = "K�t h�t" ; break;	

	case "Update": $new = "Friss�t"; break;
	case "Update Event": $new = "Esem�nyt friss�t"; break;
	case "Updating category": $new = "Kateg�ri�t friss�t"; break ;
	case "Updating event": $new = "Esem�ny friss�t�s"; break;
	case "Updating user": $new = "Felhaszn�l� friss�t�s"; break;			
	case "Unapproved events": $new = "elfogad�sra v�r� esem�nyek"; break ;
	case "User": $new = "Felhaszn�l�"; break ;
	case "User Calendar": $new = "Felhaszn�l�i Hat�rid�napl�"; break ;
	case "User description": $new = "Felhaszn�l� le�r�sa"; break ;		
	case "User group": $new = "Felhaszn�l� csoport"; break ;				
	case "User Management": $new = "Felhaszn�l�k Hozz�ad�sa, m�dos�t�sa"; break;
	case "userdelok": $new = "Biztosan t�rli a felhaszn�l�t ?"; break;
	case "username": $new = "felhaszn�l�i n�v"; break;
	case "Username and passwords must be alpha-numeric and without spaces.": $new = "N�v �s jelsz� csak sz�mokb�l �s bet�kb�l �llhatnak."; break; 	// version 0.4.20030731
	case "Username entered already exists. Please use another username.": $new = "Felhaszn�l�i n�v m�r l�tezik, V�lasszon m�sikat."; break;
	case "users": $new = "Felhaszn�l�k"; break;

	case "View": $new = "N�zet"; break;
	case "View categories in year": $new = "Kateg�ri�k megtekint�se"; break ;
	case "View details or edit": $new = "R�szletek megtekint�se �s v�ltoztat�sa"; break ;
	case "View event": $new = "Esem�nyek megtekint�se"; break;
	case "View events of user": $new = "Felhaszn�l� esem�nyeinek megtekint�se"; break;
	case "View events under this category in year": $new = "A kateg�ria �sszes esem�nye ebben az �vben"; break ;
	case "View historical events before": $new = "R�gi esem�nyek megn�z�se d�tum el�tt"; break ;
	case "View month": $new = "H�nap megtekint�se"; break;
	case "View week": $new = "H�t megtekint�se"; break;

	case "Web Calendar Admin Login": $new = "Calendarix Admin Login"; break ;
	case "Web Calendar User Login": $new = "Calendarix felhaszn�l�i bel�p�s"; break ;
	case "week number": $new = "hanyadik h�t"; break;
	case "Week starts": $new = "h�t kezd�dik"; break;
	case "wronglogin": $new = "Hib�s n�v vagy jelsz�"; break;

	case "Year": $new = "�v"; break;
	case "Yes": $new = "Igen"; break;		// version 0.4.20030731
	case "Yes, delete event !": $new = "Esem�nyt t�nyleg t�r�lni akarom !"; break;
	case "Yes, delete it!": $new = "Igen, t�r�ld!"; break;

	default: $new = "<b>".$msgin."</b>M�g le kell for�tani !";    break;
    }
    return $new;
}
?>