<?php
function translate($msgin){

    switch ($msgin) {
	case "About Calendarix": $new = "Om Calendarix"; break ;		
	case "Administrator": $new = "Administrat�r"; break;
	case "Add": $new = "L�gg till"; break ;
	case "Add Category": $new = "Ny kategori"; break;
	case "Add Event": $new = "Ny h�ndelse"; break;
	case "Add event": $new = "L�gg till" ; break;
	case "Add new user": $new = "L�gg till anv�ndare"; break;
	case "Adding category": $new = "Ny kategori"; break;
	case "Adding event": $new = "L�gger till" ; break ;
	case "Adding user": $new = "L�gger till anv�ndare"; break ;
	case "Administration": $new = "Admin"; break;
	case "All categories": $new = "Alla kategorier"; break ;
	case "Approval needed for posting of events.": $new = "Du m�ste vara inloggad f�r att l�gga till h�ndelser."; break;  
	case "Approvals": $new = "Godk�nnande"; break ;
	case "Approve": $new = "Godk�nn"; break;
	case "Approving event": $new = "Godk�nner h�ndelse"; break;
	case "Assign": $new = "L�gg till"; break;
	case "Assign Categories": $new = "L�gg till kategori"; break;
	case "Assign to all users": $new = "L�gg till f�r samtliga anv�ndare"; break;

	case "Back": $new = "Tillbaka"; break;
	case "Both passwords entered do not match": $new = "L�senorden var inte lika"; break;

	case "Calendar": $new = "G� till kalendern utan att logga in"; break;
	case "Cancel": $new = "Avbryt"; break ;
	case "Cannot delete current login user": $new = "Kan inte ta bort en inloggad anv�ndare"; break ;
	case "Cannot change current login user": $new = "Kan inte �ndra en inloggad anv�ndare"; break;
	case "Cannot have a category with blank name": $new = "Kategorin kan inte ha ett tomt namn"; break ;
	case "Categories": $new = "Kategorier"; break;
	case "Category": $new = "Kategori"; break;
	case "Category color": $new = "F�rg f�r kategori"; break;
	case "Change": $new = "�ndra"; break ;
	case "Change password": $new = "�ndra l�senord"; break;
	case "Change password/group": $new = "�ndra l�sen/grupp"; break;
	case "Choose Category": $new = "V�lj kategori"; break;
	case "Close": $new = "St�ng"; break;
	case "Color": $new = "F�rg"; break;
	case "Coming Events": $new = "Kommande h�ndelser"; break;
	case "Confirm delete?": $new = "Bekr�fta borttagning?" ; break ;
	case "Confirm delete all historical events before": $new = "Bekr�fta borttagning av h�ndelser f�re"; break ;
	case "confirmed events for today": $new = "bekr�ftade h�ndelser idag"; break ;
	case "Confirm password": $new = "Bekr�fta l�senord"; break;
	case "Copy Event": $new = "Kopiera h�ndelsen"; break ;
	case "Current Week": $new = "Denna vecka"; break;
	case "Current Month": $new = "Denna m�nad"; break;
	case "Current Year": $new = "Detta �r"; break;		

	case "Date": $new = "Datum"; break;
	case "Day": $new = "Dag"; break;
	case "Deactivate": $new = "Inaktivera"; break;
	case "Default": $new = "F�rval"; break;
	case "Delete": $new = "Ta bort"; break;
	case "Delete all historical events listed": $new = "Ta bort alla h�ndelser i listan"; break;
	case "Delete category": $new = "Ta bort kategori"; break;
	case "Delete event": $new = "Ta bort h�ndelse"; break;
	case "Delete user": $new = "Ta bort anv�ndare"; break;
	case "Deleting category": $new = "Tar bort kategori"; break;
	case "Deleting event": $new = "Tar bort h�ndelse"; break ;
	case "Deleting user": $new = "Tar bort anv�ndare"; break ;
	case "Description": $new = "Beskrivning"; break;
	case "Details": $new = "Detaljer"; break;
	case "disabled": $new = "Denna sektion �r borttagen"; break;
	case "Display Settings": $new = "Visa inst�llningar"; break;

	case "Edit": $new = "Redigera"; break;
	case "Edit category": $new = "�ndra kategori"; break;
	case "Edit event": $new = "�ndra h�ndelse"; break;
	case "Edit information": $new = "Redigera information"; break;
	case "Email": $new = "E-post"; break;
	case "End Time": $new = "Sluttid"; break ;
	case "Event": $new = "H�ndelser"; break ;
	case "Event Category": $new = "H�ndelsens kategori"; break;
	case "Event Description": $new = "H�ndelsens beskrivning"; break;
	case "event entry starts here": $new = "f�rsta h�ndelsen intr�ffar"; break;
	case "Event repeated": $new = "Repeterad h�ndelse"; break;
	case "Event Title": $new = "H�ndelsens titel"; break;
	case "events": $new = "h�ndelser"; break;
	case "Events added will be posted immediately.": $new = "H�ndelsen kommer att l�ggas till med en g�ng."; break ;
	case "events awaiting approval": $new = "h�ndelser som v�ntar p� godk�nnande"; break ;
	case "Events before": $new = "H�ndelser f�re"; break ;
	case "events for": $new = "h�ndelser f�r"; break;
	case "Events for day": $new = "H�ndelser f�r dag"; break;
	case "events for whole calendar": $new = "h�ndelser totalt"; break;
	case "events for year": $new = "st. h�ndelser f�r"; break;
	case "Events from ": $new = "H�ndelser fr�n"; break;
	case "Events in category": $new = "H�ndelser i kategorin"; break;
	case "every": $new = "varje"; break;
	case "Everyone": $new = "Samtliga"; break;
	case "Export": $new = "Spara"; break;

	case "Fee": $new = "Avgift"; break;
	case "From": $new = "Fr�n"; break ;
	case "Functions": $new = "Funktioner"; break;

	case "General Settings": $new = "Allm�nna inst�llningar"; break;
	case "Go to": $new = "G� till"; break;
	case "Go to day": $new = "G� till dag"; break;
	case "Go to week": $new = "G� till vecka"; break;
	case "Group": $new = "Grupp"; break;

	case "Historical Items": $new = "Gamla h�ndelser"; break;
	case "Holidays": $new = "Helger"; break;

	case "leave blank if default font color is used": $new = "om denna ruta l�mnas blank kommer f�rvald f�rg att anv�ndas"; break;
	case "Legend": $new = "Titel"; break;
	case "Location": $new = "Plats"; break;
	case "Login": $new = "Logga in"; break;
	case "Login session time out in seconds": $new = "Login-sessionens l�ngd i sekunder"; break;
	case "Login session timeout": $new = "Login-session timeout"; break ;
	case "Logout": $new = "Logga ut"; break;

	case "Menu": $new = "Meny"; break;
	case "Message": $new = "Meddelande"; break;
	case "Month": $new = "M�nad"; break;
	case "More info": $new = "Mer info"; break;

	case "Name": $new = "Typ"; break;
	case "New Year": $new = "Nytt �r"; break;
	case "Next": $new = "N�sta"; break;				
	case "Next day": $new = "N�sta dag"; break;
	case "Next week": $new = "N�sta vecka"; break;
	case "No": $new = "Nej"; break;
	case "No categories yet": $new = "Inga kategorier �nnu"; break;
	case "No events": $new = "Inga h�ndelser"; break;
	case "No fees": $new = "Ingen kostnad"; break;
	case "No Repeat": $new = "Ingen upprepning"; break;
	case "No results": $new = "Inget resultat"; break;
	case "No, go back!": $new = "Nej, tillbaka!"; break;
	case "No.": $new = "Nr"; break;
	case "noadminapprove": $new = "Godk�nnande av h�ndelser fr�n admin beh�vs ej "; break ;
	case "noapprove": $new = "Godk�nnande av h�ndelser fr�n anv�ndare beh�vs ej av admin"; break ;
	case "nocat": $new = "Du m�ste v�lja en kategori!"; break;
	case "noday": $new = "Du m�ste v�lja en dag!"; break;
	case "nodescription": $new = "Du m�ste ge h�ndelsen en beskrivning!"; break;
	case "nomonth": $new = "Du m�ste v�lja en m�nad!"; break;
	case "nonapproved": $new = "H�ndelser som m�ste godk�nnas: "; break;
	case "nononapproved": $new = "Inga h�ndelser beh�ver godk�nnas nu"; break;
	case "Notify": $new = "Meddela"; break;
	case "notitle": $new = "Du m�ste ge h�ndelsen en titel!"; break;
	case "noyear": $new = "Du m�ste v�lja ett �r!"; break;

	case "on": $new = "den"; break;
	case "Once on": $new = "Endast en g�ng den"; break;
	case "Optional": $new = "Frivilligt"; break;
	case "Options": $new = "Alternativ"; break;
	case "or month": $new = "eller m�nad"; break;
	case "or week": $new = "eller vecka"; break;

	case "password": $new = "l�senord"; break;
	case "Please choose the category you only want to view events for": $new = "V�lj den kategori som du vill se h�ndelser f�r "; break; 
	case "Please enter email address, separated by commas, for people to be notified of the event": $new = "Skriv in epostadresser, separerade med komman, f�r de du vill underr�tta"; break;
	case "Popup Month": $new = "Popup M�nad"; break ;
	case "Previous": $new = "F�reg�ende"; break;			
	case "Previous day": $new = "F�reg�ende dag"; break;
	case "Previous week": $new = "F�reg�ende vecka"; break;
	case "Print": $new = "Utskrift"; break;
	case "Print Preview": $new = "F�rhandsgranska utskrift"; break;
	case "Private": $new = "Enskild"; break;

	case "Read more": $new = "L�s mer"; break;
	case "reallydelcat": $new = "�r du s�ker att du vill ta bort denna kategori, alla h�ndelser i denna kategori kommer att f�rsvinna!"; break;
	case "Refresh": $new = "Uppdatera"; break;
	case "Repeat": $new = "Upprepa"; break;
	case "repeat every year on": $new = "upprepa varje nytt �r"; break;
	case "results": $new = "resultat"; break;
	case "Role": $new = "Roll"; break;

	case "Scope": $new = "R�r"; break;
	case "search": $new = "s�k"; break;
	case "Select All": $new = "Markera samtliga"; break;
	case "Select location": $new = "V�lj plats"; break;
	case "Select users": $new = "V�lj anv�ndare"; break;
	case "Settings": $new = "Inst�llningar"; break;
	case "Sort by": $new = "Sortera efter"; break ;
	case "Sort by date": $new = "Sortera efter datum"; break ;
	case "Sort by events": $new = "Sortera efter h�ndelser"; break ;
	case "Start Time": $new = "Starttid"; break ;
	case "Sum": $new = "R�kna ihop"; break;

	case "Text Settings": $new = "Textinst�llningar"; break;
	case "thankyou": $new = "Tack f�r ditt inl�gg, det kommer upp efter godk�nnande av admin."; break;
	case "thankyoupost": $new = "Tack f�r inl�gget, det kommer upp med en g�ng."; break;
	case "till": $new = "till"; break;
	case "Time added or updated": $new = "Tid �ndrad el. tillagd"; break ;
	case "timeout msg": $new = "�ndringar i sessionstiden anv�nds f�rst efter n�sta inloggning" ; break ;
	case "times every": $new = "ggr varje"; break;
	case "To": $new = "Till"; break ;
	case "To delete category": $new = "F�r att ta bort kategori"; break ;
	case "Today": $new = "Idag"; break;
	case "Total": $new = "Totalt"; break;
	case "Total number of events for the month": $new = "Antal h�ndelser f�r m�naden"; break ;
	case "Total number of events for user": $new = "Antal h�ndelser f�r anv�ndare"; break ;
	case "Total unapproved events for the month": $new = "Antal ej godk�nda h�ndelser denna m�nad" ; break;
	case "Two weeks": $new = "Tv� veckor" ; break;	

	case "under category": $new = "under kategori"; break;
	case "Update": $new = "Uppdatera"; break;
	case "Update Event": $new = "Uppdatera h�ndelse"; break;
	case "Updating category": $new = "Uppdaterar kategori"; break ;
	case "Updating event": $new = "Uppdaterar h�ndelser"; break;
	case "Updating user": $new = "Uppdaterar anv�ndare"; break;
	case "Unapproved events": $new = "Ej godk�nda h�ndelser"; break ;
	case "Unselect All": $new = "Avmarkera samtliga"; break;
	case "User": $new = "Anv�ndare"; break ;
	case "User Calendar": $new = "Anv�ndarkalender"; break ;
	case "User description": $new = "Anv�ndarbeskrivning"; break ;
	case "User group": $new = "Anv�ndargrupp"; break ;
	case "User Management": $new = "Hantering av anv�ndare"; break;
	case "userdelok": $new = "�r du s�ker p� att du vill ta bort denna anv�ndare?"; break;
	case "username": $new = "anv�ndarnamn"; break;
	case "Username entered already exists. Please use another username.": $new = "Anv�ndarnamnet finns redan, vg v�lj ett annat."; break;
	case "users": $new = "anv�ndare"; break;

	case "Value": $new = "V�rde"; break;
	case "Variable": $new = "Variabel"; break;
	case "View": $new = "Visa"; break;
	case "View categories in year": $new = "Visa nya kategorier detta �r"; break ;
	case "View details or edit": $new = "Visa eller �ndra detaljer"; break ;
	case "View event": $new = "Visa h�ndelse"; break;
	case "View events of user": $new = "Visa h�ndelser f�r anv�ndare"; break;
	case "View events under this category in year": $new = "Visa h�ndelser i kategorin f�r �r"; break ;
	case "View historical events before": $new = "Visa h�ndelser f�re"; break ;
	case "View month": $new = "Visa m�nad"; break;
	case "View week": $new = "Visa vecka"; break;

	case "Web Calendar Admin Login": $new = "Admin login"; break ;
	case "Web Calendar User Login": $new = "Anv�ndare login"; break ;
	case "Week": $new = "Vecka"; break;
	case "week number": $new = "Veckonummer"; break;
	case "Week starts": $new = "Veckan b�rjar med"; break;
	case "wronglogin": $new = "Felaktigt anv�ndarnamn eller l�senord"; break;

	case "Year": $new = "�r"; break;
	case "Yes": $new = "Ja"; break;
	case "Yes, delete event !": $new = "Ja, ta bort denna h�ndelse!"; break;
	case "Yes, delete it!": $new = "Ja, ta bort den!"; break;

	default: $new = "<b>".$msgin."</b> beh�ver �vers�ttas!";    break;

    }
    return $new;
}
?>