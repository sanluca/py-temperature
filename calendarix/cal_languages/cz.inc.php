<?php
function translate($msgin){
    switch ($msgin) {
	case "About Calendarix": $new = "O Calendarix"; break ;		
	case "Add": $new = "P�idat"; break ;
	case "Add Category": $new = "P�idat kategorii"; break;
	case "Add Event": $new = "P�idat Ud�lost"; break;
	case "Add event": $new = "P�idat ud�lost" ; break;
	case "Add new user": $new = "P�idat u�ivatele"; break;
	case "Adding category": $new = "P�id�v�m kategorii"; break;
	case "Adding event": $new = "P�id�v�m ud�lost" ; break ;
	case "Adding user": $new = "P�id�v�m u�ivatele"; break ;
	case "Administration": $new = "Administrace"; break;
	case "Administrator": $new = "Administrator"; break ;
	case "All categories": $new = "V�echny kategorie"; break ;		
	case "Approval needed for posting of events.": $new = "Pro zaps�n� ud�losti je nutn� schv�len�."; break;  
	case "Approvals": $new = "Approvals"; break ;
	case "Approve": $new = "Schv�lit"; break;
	case "Approving event": $new = "Schvaluji ud�lost"; break;
	
	case "Back": $new = "Zp�t"; break;
	case "Both passwords entered do not match": $new = "Obe zadan� hesla nesouhlas�"; break;	

	case "Calendar": $new = "Kalend��"; break;
	case "Cancel": $new = "Zru�it"; break ;
	case "Cannot delete current login user": $new = "Nelze smazat u�ivatele"; break ;   
	case "Cannot change current login user": $new = "Nelze zm�nit u�ivatele"; break;	
	case "Cannot have a category with blank name": $new = "Nelze vytvo�it kategorii bez jm�na"; break ;
	case "Categories": $new = "Kategorie"; break;
	case "Category": $new = "Kategorie"; break;
	case "Change": $new = "Zm�nit"; break ;
	case "Change password/group": $new = "Zm�nit heslo/skupinu"; break; 	// master obsolete?	
	case "Choose Category": $new = "Zvolte kategorii"; break;
	case "Close": $new = "Zav��t"; break;
	case "Coming Events": $new = "Nadch�zej�c� ud�losti"; break;			// 0.6.20050830
	case "Confirm delete?": $new = "Potvrdit smaz�n�?" ; break ;			
	case "Confirm delete all historical events before": $new = "Potvr�te smaz�n� v�ech p�ede�l�ch ud�lost�"; break ;
	case "confirmed events for today": $new = "dne�n� ud�losti"; break ;
	case "Confirm password": $new = "Potvr�te heslo"; break; 		
	case "Copy Event": $new = "Kop�rovat ud�lost"; break ;				
	case "Current Week": $new = "Tento t�den"; break;
	case "Current Month": $new = "Tento m�s�c"; break;
	case "Current Year": $new = "Tento rok"; break;		

	case "Date": $new = "Datum"; break;
	case "Day": $new = "Den"; break;
	case "Delete all historical events listed": $new = "Smazat v�echny star� ud�losti"; break;
	case "Delete category": $new = "Smazat kategorii"; break;
	case "Delete event": $new = "Smazat ud�lost"; break;
	case "Delete user": $new = "Smazat u�ivatele"; break;
	case "Deleting category": $new = "Ma�u kategorii"; break;
	case "Deleting event": $new = "Ma�u ud�lost"; break ;
	case "Deleting user": $new = "Ma�u u�ivatele"; break ;
	case "disabled": $new = "Tato sekce nen� p��stupn�"; break;

	case "Edit category": $new = "Upravit kategorii"; break;
	case "Edit event": $new = "Upravit ud�lost"; break;
	case "Edit information": $new = "Upravit informace"; break;	// master translate?
	case "Email": $new = "Email"; break;
	case "End Time": $new = "�as ukoncen�"; break ;
	case "Event": $new = "Ud�lost"; break ;
	case "Event Category": $new = "Kategorie ud�losti"; break;
	case "Event Description": $new = "Popis ud�losti"; break;
	case "Event repeated": $new = "Opakovan� ud�lost"; break;  
	case "Event Title": $new = "N�zev ud�losti"; break;
	case "events": $new = "ud�losti"; break;
	case "Events added will be posted immediately.": $new = "P�idan� ud�losti budou ulo�eny."; break ;
	case "events awaiting approval": $new = "ud�losti �ekaj�c� na schv�len�"; break ;
	case "Events before": $new = "P�edchoz� ud�losti"; break ;
	case "events for": $new = "ud�losti na"; break;
	case "Events for day": $new = "Ud�losti na den"; break;
	case "events for whole calendar": $new = "ud�losti na cel� kalend��"; break;
	case "events for year": $new = "ud�losti na rok"; break;
	case "Events from ": $new = "Ud�losti od "; break;
	case "Events in category": $new = "Ud�losti v kategorii"; break;

	case "From": $new = "Od"; break ;
	case "Functions": $new = "Funkce"; break ;	// master translate?

	case "Go to": $new = "P�ej�t na"; break;
	case "Go to day": $new = "P�ej�t na den"; break;
	case "Go to week": $new = "P�ej�t na t�den"; break;

	case "Historical Items": $new = "Star� polo�ky"; break;

	case "Login": $new = "Login"; break;
	case "Login session time out in seconds": $new = "Login session time out in seconds"; break;
	case "Login session timeout": $new = "Login session timeout"; break ;
	case "Logout": $new = "Odhl�sit se"; break;

	case "Menu": $new = "Menu"; break;
	case "Month": $new = "M�s�c"; break;
	case "More info": $new = "Dal�� info"; break;

	case "Name": $new = "Jm�no"; break;			// master translate?
	case "Next": $new = "Dal��"; break;				
	case "Next day": $new = "Dal�� den"; break;
	case "Next week": $new = "Dal�� t�den"; break;
	case "No categories yet": $new = "Zat�m ��dn� kategorie"; break;
	case "No events": $new = "��dn� ud�losti"; break;
	case "No Repeat": $new = "��dn� opakov�n�"; break;
	case "No results": $new = "��dn� v�sledky"; break;
	case "No, go back!": $new = "Ne, vra� se zp�t!"; break;
	case "No.": $new = "Ne."; break;			// master translate?
	case "noadminapprove": $new = "Approval of events added by administrators not needed by administrator"; break ;
	case "noapprove": $new = "Approval of events added by users not needed by administrator"; break ;
	case "nocat": $new = "Mus�te zvolit kategorii !"; break;
	case "noday": $new = "Mus�te zvolit den !"; break;
	case "nodescription": $new = "Chyb� popis ud�losti !"; break;
	case "nomonth": $new = "Mus�te zvolit m�s�c !"; break;
	case "nonapproved": $new = "Events requiring approval : "; break;
	case "nononapproved": $new = "��dn� ud�losti ne�ekaj� na schv�len�"; break;
	case "notitle": $new = "Chyb� n�zev ud�losti !"; break;
	case "noyear": $new = "Mus�te zvolit rok !"; break;

	case "on": $new = "na"; break;
	case "Optional": $new = "Voliteln�"; break;
	case "or month": $new = "nebo m�s�c"; break;
	case "or week": $new = "nebo t�den"; break;

	case "password": $new = "heslo"; break;
	case "Please choose the category you only want to view events for": $new = "Pros�m zvolte kategorii prohl�en�ch ud�lost�"; break;  
	case "Please choose the RSS channel you want to view": $new = "Pros�m zvolte RSS po�adovan� kan�l"; break;
	case "Popup Month": $new = "Rychl� m�s��n� n�hled"; break ;
	case "Previous": $new = "P�edchoz�"; break;			
	case "Previous day": $new = "P�edchoz� den"; break;
	case "Previous week": $new = "P�edchoz� t�den"; break;

	case "Read more": $new = "Read more"; break;
	case "reallydelcat": $new = "Chcete opravdu odstranit tuto kategorii? V�echny ud�losti v t�to kategorii budou smaz�ny!"; break;
	case "Repeat": $new = "Opakovat"; break;
	case "results": $new = "v�sledky"; break;
	case "Role": $new = "Role"; break;			// master translate?

	case "search": $new = "vyhledat"; break;
	case "Select": $new = "Vybrat"; break;		// 0.7.20060401
	case "Sort by": $new = "T��dit dle"; break ;
	case "Sort by date": $new = "T��dit dle data"; break ;
	case "Sort by events": $new = "T��dit dle ud�losti"; break ;
	case "Start Time": $new = "Za��tek"; break ;

	case "thankyou": $new = "D�kujeme za vlo�en� ud�losti. Bude zobrazena po schv�len�."; break;
	case "thankyoupost": $new = "D�kujeme za vlo�en� ud�losti."; break;
	case "till": $new = "do"; break;
	case "Time added or updated": $new = "�as p�id�n nebo upraven"; break ;
	case "timeout msg": $new = "Zm�ny se projev� a� po dal��m p�ihl�en�" ; break ;
	case "times every": $new = "kr�t ka�d�"; break;	
	case "To": $new = "To"; break ;
	case "To delete category": $new = "Smazat kategorii"; break ;
	case "Today": $new = "Dnes"; break;
	case "Total": $new = "Celkem"; break;
	case "Total number of events for the month": $new = "Celkov� po�et ud�lost� za m�s�c"; break ;
	case "Total number of events for user": $new = "Celkov� po�et ud�lost� od u�ivatele"; break ;		
	case "Total unapproved events for the month": $new = "Celkov� po�et neschv�len�ch ud�lost� za m�s�c" ; break;
	case "Two weeks": $new = "Dva t�dny" ; break;	

	case "Update": $new = "Upravit"; break;
	case "Update Event": $new = "Upravit ud�lost"; break;
	case "Updating category": $new = "Upravuji kategorii"; break ;
	case "Updating event": $new = "Upravuji ud�lost"; break;
	case "Updating user": $new = "Upravuji u�ivatele"; break;			
	case "Unapproved events": $new = "Neschv�len� ud�losti"; break ;
	case "User": $new = "U�ivatel"; break ;
	case "User Calendar": $new = "Kalend�� u�ivatele"; break ;
	case "User description": $new = "Popis u�ivatele"; break ;		
	case "User group": $new = "Skupina u�ivatel�"; break ;				
	case "User Management": $new = "User Management"; break;
	case "userdelok": $new = "Chcete opravdu smazat tohoto u�ivatele ?"; break;
	case "username": $new = "u�ivatelsk� jm�no"; break;
	case "Username and passwords must be alpha-numeric and without spaces.": $new = "U�ivatelsk� jm�no a heslo mus� b�t alpha-numerick� a bez mezer."; break; 	// version 0.4.20030731
	case "Username entered already exists. Please use another username.": $new = "U�ivatelsk� jm�no ji� existuje. Pros�m zvolte jin�."; break;
	case "users": $new = "u�ivatel�"; break;

	case "View": $new = "Zobrazit"; break;
	case "View categories in year": $new = "Zobrazit kategorie v roce"; break ;
	case "View details or edit": $new = "Zobrazit detaily nebo upravit"; break ;
	case "View event": $new = "Zobrazit ud�lost"; break;
	case "View events of user": $new = "Zobrazit ud�losti u�ivatele"; break;
	case "View events under this category in year": $new = "Zobrazit ud�losti v t�to kategorii v roce"; break ;
	case "View historical events before": $new = "N�hled star�ch ud�lost� p�ed"; break ;
	case "View month": $new = "Zobrazit m�s�c"; break;
	case "View week": $new = "Zobrazit t�den"; break;

	case "Web Calendar Admin Login": $new = "Admin Login"; break ;
	case "Web Calendar User Login": $new = "P�ihl�en� u�ivatele"; break ;
	case "week number": $new = "��slo t�dne"; break;
	case "Week starts": $new = "t�den za��n�"; break;
	case "wronglogin": $new = "Nespr�vn� jm�no nebo heslo"; break;

	case "Year": $new = "Rok"; break;
	case "Yes": $new = "Ano"; break;		// version 0.4.20030731
	case "Yes, delete event !": $new = "Ano, smazat ud�lost !"; break;
	case "Yes, delete it!": $new = "Ano, smazat!"; break;

	default: $new = "<b>".$msgin."</b> needs to be translated !";    break;
    }
    return $new;
}
?>