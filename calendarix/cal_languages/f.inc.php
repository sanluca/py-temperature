<?php
function translate($msgin){

    switch ($msgin) {
	case "About Calendarix": $new = "About Calendarix"; break ;		
	case "Add": $new = "Uusi"; break ;
	case "Add Category": $new = "Lis�� kategoria"; break;
	case "Add Event": $new = "Lis�� tapahtuma"; break;
	case "Add event": $new = "Lis�� tapahtuma" ; break;
	case "Add new user": $new = "Lis�� k�ytt�j�"; break;
	case "Adding category": $new = "Lis�t��n kategoria"; break;
	case "Adding event": $new = "Lis�t��n tapahtuma" ; break ;
	case "Adding user": $new = "Lis�t��n k�ytt�j�"; break ;
	case "Administration": $new = "Hallinnointi"; break;
	case "Administrator": $new = "Valvoja"; break ;
	case "All categories": $new = "Kaikki kategoriat"; break ;
	case "Approval needed for posting of events.": $new = "Tapahtumien lis��miseen tarvitaan hyv�ksynt�"; break;  
	case "Approvals": $new = "Hyv�ksynn�t"; break ;
	case "Approve": $new = "Hyv�ksy"; break;
	case "Approving event": $new = "Hyv�ksyt��n tapahtuma"; break;

	case "Back": $new = "Takaisin"; break;
	case "Both passwords entered do not match": $new = "Kummatkaan salasanat eiv�t t�sm�nneet"; break;

	case "Calendar": $new = "Kalenteri"; break;
	case "Cancel": $new = "Keskeyt�"; break ;
	case "Cannot delete current login user": $new = "Kirjautunutta k�ytt�j�� ei voi poistaa"; break ;
	case "Cannot change current login user": $new = "Kirjautunutta k�ytt�j�� ei voi muuttaa"; break;
	case "Cannot have a category with blank name": $new = "Kategoria ei voi olla tyhj�"; break ;
	case "Categories": $new = "Kategoriat"; break;
	case "Category": $new = "Kategoria"; break;
	case "Change": $new = "Muuta"; break ;
	case "Change password/group": $new = "Muuta salasana/ryhm�"; break;
	case "Choose Category": $new = "Valitse kategoria"; break;
	case "Close": $new = "Sulje"; break;
	case "Confirm delete?": $new = "Vahvista poistaminen" ; break ;
	case "Confirm delete all historical events before": $new = "Vahvista ensin poista tapahtumahistoria"; break ;
	case "confirmed events for today": $new = "vahvistetut tapahtumat t�n��n"; break ;
	case "Confirm password": $new = "Vahvista salasana"; break;
	case "Copy Event": $new = "Kopioi tapahtuma"; break ;
	case "Current Week": $new = "Kuluva viikko"; break;
	case "Current Month": $new = "Kuluva kuukausi"; break;
	case "Current Year": $new = "Kuluva vuosi"; break;		

	case "Date": $new = "P�iv�ys"; break;
	case "Day": $new = "P�iv�"; break;
	case "Delete all historical events listed": $new = "Poista tapahtumien historiatiedot"; break;
	case "Delete category": $new = "Poista kategoria"; break;
	case "Delete event": $new = "Poista tapahtuma"; break;
	case "Delete user": $new = "Poista k�ytt�j�"; break;
	case "Deleting category": $new = "Kategoria poistetaan"; break;
	case "Deleting event": $new = "Tapahtuma poistetaan"; break ;
	case "Deleting user": $new = "K�ytt�j� poistetaan"; break ;
	case "disabled": $new = "poistettu k�yt�st�"; break;

	case "Edit category": $new = "Muuta kategoriaa"; break;
	case "Edit event": $new = "Muuta tapahtumaa"; break;
	case "Email": $new = "S�hk�posti"; break;
	case "End Time": $new = "Loppuaika"; break ;
	case "Event": $new = "Tapahtuma"; break ;
	case "Event Category": $new = "Tapahtumakategoria"; break;
	case "Event Description": $new = "Tapahtuman kuvaus"; break;
	case "Event repeated": $new = "Tapahtuma toistettu"; break;
	case "Event Title": $new = "Tapahtuman otsikko"; break;
	case "events": $new = "tapahtumaa"; break;
	case "Events added will be posted immediately.": $new = "Lis�tyt tapahtumat l�hetet��n v�litt�m�sti"; break ;
	case "events awaiting approval": $new = "tapahtumat odottavat hyv�ksynt��"; break ;
	case "Events before": $new = "Tapahtumaa ennen"; break ;
	case "events for": $new = "tapahtumaa"; break;
	case "Events for day": $new = "Tapahtumaa p�iv�lle"; break;
	case "events for whole calendar": $new = "tapahtumaa kalenterissa"; break;
	case "events for year": $new = "tapahtumaa vuodessa"; break;
	case "Events from ": $new = "Tapahtumaa l�htien"; break;
	case "Events in category": $new = "Tapahtumaa kategoriassa"; break;

	case "From": $new = "Mist�"; break ;

	case "Go to": $new = "Mene"; break;
	case "Go to day": $new = "Mene p�iv��n"; break;
	case "Go to week": $new = "Mene viikkoon"; break;

	case "Historical Items": $new = "Tapahtumahistoria"; break;

	case "Login": $new = "Kirjaudu sis��n"; break;
	case "Login session time out in seconds": $new = "Kirjautuminen lopetetaan"; break;
	case "Login session timeout": $new = "Kirjautuminen lopetettu"; break ;
	case "Logout": $new = "Kirjaudu ulos"; break;

	case "Menu": $new = "Menu"; break;
	case "Month": $new = "Kuukausi"; break;
	case "More info": $new = "Lis�tietoja"; break;

	case "Next": $new = "Seuraava"; break;				
	case "Next day": $new = "Seuraava p�iv�"; break;
	case "Next week": $new = "Seuraava viikko"; break;
	case "No categories yet": $new = "Ei viel� kategorioita"; break;
	case "No events": $new = "Ei tapahtumia"; break;
	case "No Repeat": $new = "Ei toistoa"; break;
	case "No results": $new = "Ei tuloksia"; break;
	case "No, go back!": $new = "Ei, takaisin!"; break;
	case "noadminapprove": $new = "ei valvojan hyv�ksynt��"; break ;
	case "noapprove": $new = "ei hyv�ksynt��"; break ;
	case "nocat": $new = "ei kategoriaa"; break;
	case "noday": $new = "ei p�iv��"; break;
	case "nodescription": $new = "ei kuvausta"; break;
	case "nomonth": $new = "Ei kuukautta"; break;
	case "nonapproved": $new = "Ei yht��n hyv�ksytty"; break;
	case "nononapproved": $new = "Ei yht��n hyv�ksytty"; break;
	case "notitle": $new = "ei otsikkoa"; break;
	case "noyear": $new = "ei vuotta"; break;

	case "on": $new = "p�iv�ys"; break;
	case "Optional": $new = "Vapaaehtoinen"; break;
	case "or month": $new = "tai kuukausi"; break;
	case "or week": $new = "tai viikko"; break;

	case "password": $new = "salasana"; break;
	case "Please choose the category you only want to view events for": $new = "Valitse kategoria, jonka tapahtumat haluat n�hd� ainoastaan"; break; 
	case "Popup Month": $new = "Popup Kuukausi"; break ;
	case "Previous": $new = "Edellinen"; break;			
	case "Previous day": $new = "Edellinen p�iv�"; break;
	case "Previous week": $new = "Edellinen viikko"; break;

	case "Read more": $new = "Lis�tietoja"; break;
	case "reallydelcat": $new = "Poistatko todella kategorian?"; break;
	case "Repeat": $new = "Toista"; break;
	case "results": $new = "tulokset"; break;

	case "search": $new = "etsi"; break;
	case "Sort by": $new = "Lajittele"; break ;
	case "Sort by date": $new = "Lajittele p�iv�m��r�ll�"; break ;
	case "Sort by events": $new = "Lajittele tapahtumalla"; break ;
	case "Start Time": $new = "Aloitusaika"; break ;

	case "thankyou": $new = "Kiitos"; break;
	case "thankyoupost": $new = "Kiitos tallennuksesta"; break;
	case "till": $new = "asti"; break;
	case "Time added or updated": $new = "Aika lis�tty tai muutettu"; break ;
	case "timeout msg": $new = "timeout ilmoitus" ; break ;
	case "times every": $new = "kertaa joka"; break;
	case "To": $new = "Saakka"; break ;
	case "To delete category": $new = "Kategorian poistamiseen"; break ;
	case "Today": $new = "T�n��n"; break;
	case "Total": $new = "Yhteens�"; break;
	case "Total number of events for the month": $new = "Kuukauden tapahtumam��r�"; break ;
	case "Total number of events for user": $new = "K�ytt�j�n tapahtumam��r�"; break ;
	case "Total unapproved events for the month": $new = "Hyv�ksym�tt�mien tapahtumien m��r� kuukaudelle" ; break;
	case "Two weeks": $new = "Kaksi viikkoa" ; break;	

	case "Update": $new = "P�ivit�"; break;
	case "Update Event": $new = "P�ivit� tapahtuma"; break;
	case "Updating category": $new = "Kategoria p�ivitet��n"; break ;
	case "Updating event": $new = "Tapahtuma p�ivitet��n"; break;
	case "Updating user": $new = "K�ytt�j� p�ivitet��n"; break;
	case "Unapproved events": $new = "Hyv�ksym�tt�m�t tapahtumat"; break ;
	case "User": $new = "K�ytt�j�"; break ;
	case "User Calendar": $new = "K�ytt�j�kalenteri"; break ;
	case "User description": $new = "K�ytt�j�n kuvaus"; break ;
	case "User group": $new = "K�ytt�j�ryhm�"; break ;
	case "User Management": $new = "K�ytt�j�hallinta"; break;
	case "userdelok": $new = "haluatko poistaa k�ytt�j�n?"; break;
	case "username": $new = "k�ytt�j�nimi"; break;
	case "Username entered already exists. Please use another username.": $new = "K�ytt�j� on jo olemassa, anna uusi nimi"; break;
	case "users": $new = "k�ytt�j�t"; break;

	case "View": $new = "N�yt�"; break;
	case "View categories in year": $new = "N�yt� kategoriat vuodessa"; break ;
	case "View details or edit": $new = "N�yt� tai muuta yksityiskohdat"; break ;
	case "View event": $new = "N�yt� tapahtuma"; break;
	case "View events of user": $new = "N�yt� k�ytt�j�n tapahtumat"; break;
	case "View events under this category in year": $new = "N�yt� t�m�n kategorian tapahtumat vuodessa"; break ;
	case "View historical events before": $new = "N�yt� tapahtumahistoria ennen"; break ;
	case "View month": $new = "N�yt� kuukausi"; break;
	case "View week": $new = "N�yt� viikko"; break;

	case "Web Calendar Admin Login": $new = "Calendarix valvoja sis��nkirjautuminen"; break ;
	case "Web Calendar User Login": $new = "Calendarix k�ytt�j� sis��nkirjautuminen"; break ;
	case "week number": $new = "viikkonumero"; break;
	case "Week starts": $new = "viikko alkaa"; break;
	case "wronglogin": $new = "Virheellinen k�ytt�j� tai salasana"; break;

	case "Year": $new = "Vuosi"; break;
	case "Yes, delete event !": $new = "Kyll�, poista tapahtuma!"; break;
	case "Yes, delete it!": $new = "Kyll�, poista se!"; break;

	default: $new = "<b>".$zin."</b> beh�ver �vers�ttas!";    break;

    }
    return $new;
}
?>