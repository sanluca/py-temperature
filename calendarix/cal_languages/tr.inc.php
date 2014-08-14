<?php
function translate($msgin){

    switch ($msgin) {
	case "About Calendarix": $new = "About Calendarix"; break ;		// translate?
	case "Add": $new = "Ekle"; break ;
	case "Add Category": $new = "Kategori Ekle"; break;
	case "Add Event": $new = "Konu Ekle"; break;
	case "Add event": $new = "Konu ekle" ; break;
	case "Add new user": $new = "Yeni Kullan�c� Ekle"; break;
	case "Adding category": $new = "Kategori ekleme"; break;
	case "Adding event": $new = "Konu ekleme" ; break ;
	case "Adding user": $new = "Kullan�c� ekleme"; break ;
	case "Administration": $new = "Y�netim"; break;
	case "Administrator": $new = "Y�netici"; break ;
	case "All categories": $new = "All categories"; break ;		// translate?
	case "Approval needed for posting of events.": $new = "Postalanan Konular�n onaylanmas� gerekli."; break;  
	case "Approvals": $new = "Onaylar"; break ;
	case "Approve": $new = "Onay"; break;
	case "Approving event": $new = "Onaylanan Konu"; break;
	
	case "Back": $new = "Geri"; break;
	case "Both passwords entered do not match": $new = "Girilen parolalar uyumsuz"; break;	

	case "Calendar": $new = "Takvim"; break;
	case "Cancel": $new = "�ptal"; break ;
	case "Cannot delete current login user": $new = "�u an aktif olan kullan�c� silinemez"; break ;   
	case "Cannot change current login user": $new = "�u an aktif olan kullan�c� de�i�tirilemez"; break;	
	case "Cannot have a category with blank name": $new = "Kategori ismi bo� olamaz"; break ;
	case "Categories": $new = "Kategoriler"; break;
	case "Category": $new = "Kategori"; break;
	case "Change": $new = "De�i�tir"; break ;
	case "Change password/group": $new = "Parola/Grup de�i�tir"; break; 		
	case "Choose Category": $new = "Kategori se�in..."; break;
	case "Close": $new = "Kapat"; break;
	case "Confirm delete?": $new = "Confirm delete?" ; break ;			// translate?
	case "Confirm delete all historical events before": $new = "Bu tarihten �nceki konular�n silinmesini onaylay�n�z"; break ;
	case "confirmed events for today": $new = "Bug�n i�in teyit edilmi� Konular"; break ;
	case "Confirm password": $new = "Parola teyidi"; break; 		
	case "Copy Event": $new = "Konu Kopyala"; break ;				
	case "Current Week": $new = "Bu Hafta"; break;
	case "Current Month": $new = "Bu Ay"; break;
	case "Current Year": $new = "Bu Sene"; break;		

	case "Date": $new = "Tarih"; break;
	case "Day": $new = "G�n"; break;
	case "Delete all historical events listed": $new = "Listelenen b�t�n ge�mi� konular� sil"; break;
	case "Delete category": $new = "Kategori Sil"; break;
	case "Delete event": $new = "Konu silinsin mi"; break;
	case "Delete user": $new = "Kullan�c� Sil"; break;
	case "Deleting category": $new = "Kategori Silme"; break;
	case "Deleting event": $new = "Konu Silme"; break ;
	case "Deleting user": $new = "Kullan�c� Silme"; break ;
	case "disabled": $new = "Bu b�l�m devre d���"; break;

	case "Edit category": $new = "Kategori D�zenle"; break;
	case "Edit event": $new = "Konu D�zenle"; break;
	case "Email": $new = "Email"; break;
	case "End Time": $new = "Biti� Zaman�"; break ;
	case "Event": $new = "Konu"; break ;
	case "Event Category": $new = "Konu Kategorisi"; break;
	case "Event Description": $new = "Konu Tan�m�"; break;
	case "Event repeated": $new = "Tekrarlanan Konular"; break;  
	case "Event Title": $new = "Konu Ba�l���"; break;
	case "events": $new = "Konu"; break;
	case "Events added will be posted immediately.": $new = "Eklenen konular hemen postalanacakt�r"; break ;
	case "events awaiting approval": $new = "Onay bekleyen konular"; break ;
	case "Events before": $new = "Bu tarihten �nceki konular"; break ;
	case "events for": $new = "konu"; break;
	case "Events for day": $new = "Bug�nk� konular"; break;
	case "events for whole calendar": $new = "konu b�t�n takvim i�in"; break;
	case "events for year": $new = "konu y�l"; break;
	case "Events from ": $new = "Konular "; break;
	case "Events in category": $new = "Kategori i�indeki konular"; break;

	case "From": $new = "Ba�lang��"; break ;

	case "Go to": $new = "Git"; break;
	case "Go to day": $new = "G�ne"; break;
	case "Go to week": $new = "Haftaya"; break;

	case "Historical Items": $new = "Ge�mi� ��eler"; break;

	case "Login": $new = "Giri�"; break;
	case "Login session time out in seconds": $new = "Saniye olarak oturum sona erme s�resi"; break;
	case "Login session timeout": $new = "Oturum sona erme s�resi"; break ;
	case "Logout": $new = "��k��"; break;

	case "Menu": $new = "Menu"; break;
	case "Month": $new = "Ay"; break;
	case "More info": $new = "Daha Fazla Bilgi:"; break;

	case "Next": $new = "Sonraki"; break;				
	case "Next day": $new = "Sonraki G�n"; break;
	case "Next week": $new = "Sonraki Hafta"; break;
	case "No categories yet": $new = "Kategori yok"; break;
	case "No events": $new = "Konu yok"; break;
	case "No Repeat": $new = "Tekrar yok"; break;
	case "No results": $new = "Sonu� yok"; break;
	case "No, go back!": $new = "Hay�r, vazge�tim!"; break;
	case "noadminapprove": $new = "Y�neticiler taraf�ndan eklenen konular�n y�netici taraf�ndan onaylanmas� gerekli de�ildir"; break ;
	case "noapprove": $new = "Kullan�c� taraf�ndan eklenen konular�n y�netici taraf�ndan onaylanmas� gerekli de�ildir"; break ;
	case "nocat": $new = "Bir kategori se�melisiniz !"; break;
	case "noday": $new = "Bir g�n se�melisiniz !"; break;
	case "nodescription": $new = "Konuyu tan�mlamal�s�n�z !"; break;
	case "nomonth": $new = "Bir ay se�melisiniz !"; break;
	case "nonapproved": $new = "Onay gerektiren konular : "; break;
	case "nononapproved": $new = "Onaylanmas� gereken herhangi bir konu bulunmamaktad�r"; break;
	case "notitle": $new = "Bir konu ba�l��� girmelisiniz !"; break;
	case "noyear": $new = "Bir y�l se�melisiniz !"; break;

	case "on": $new = ""; break;
	case "Optional": $new = "Opsiyonel"; break;
	case "or month": $new = "yada aya git"; break;
	case "or week": $new = "veya haftaya git"; break;

	case "password": $new = "parola"; break;
	case "Please choose the category you only want to view events for": $new = "Please choose the category you only want to view events for"; break;  // translate?
	case "Popup Month": $new = "Ay"; break ;
	case "Previous": $new = "�nceki"; break;			
	case "Previous day": $new = "�nceki G�n"; break;
	case "Previous week": $new = "�nceki Hafta"; break;

	case "Read more": $new = "Detay..."; break;
	case "reallydelcat": $new = "Bu kategoriyi kald�rmak istedi�inizden emin misiniz? Bu kategoriye ba�l� b�t�n konular geri d�n��� olmaks�z�n silinecekler!"; break;
	case "Repeat": $new = "Tekrar et"; break;
	case "results": $new = "sonu�lar"; break;

	case "search": $new = "ara"; break;
	case "Sort by": $new = "S�rala"; break ;
	case "Sort by date": $new = "Tarihe g�re s�rala"; break ;
	case "Sort by events": $new = "Konuya g�re s�rala"; break ;
	case "Start Time": $new = "Ba�lang�� Zaman�"; break ;

	case "thankyou": $new = "Konu giri�i yapt���n�z i�in te�ekk�r ederiz, onaydan sonra listelenecektir."; break;
	case "thankyoupost": $new = "Konu giri�i yapt���n�z i�in te�ekk�r ederiz, postaland�."; break;
	case "till": $new = "-"; break;
	case "Time added or updated": $new = "Eklenme veya de�i�tirilme zaman�"; break ;
	case "timeout msg": $new = "Oturum s�resindeki de�i�iklikler bir sonraki giri�inizde etkili olacakt�r" ; break ;
	case "times every": $new = "kez her"; break;	
	case "To": $new = "Biti�"; break ;
	case "To delete category": $new = "Silinecek kategori"; break ;
	case "Today": $new = "Bug�n"; break;
	case "Total": $new = "Toplam"; break;
	case "Total number of events for the month": $new = "Bu ayki toplam konu"; break ;
	case "Total number of events for user": $new = "Kullan�c�n�n toplam konular�"; break ;		
	case "Total unapproved events for the month": $new = "Bu ayki toplam onaylanmam�� konular" ; break;
	case "Two weeks": $new = "Onbe� G�n" ; break;	// translate?

	case "Update": $new = "G�ncelle"; break;
	case "Update Event": $new = "Konuyu g�ncelle"; break;
	case "Updating category": $new = "Kategori g�ncelleme"; break ;
	case "Updating event": $new = "Konu g�ncelleme"; break;
	case "Updating user": $new = "Kullan�c� g�ncelleme"; break;			
	case "Unapproved events": $new = "Onaylanmam�� konular"; break ;
	case "User": $new = "Kullan�c�"; break ;
	case "User Calendar": $new = "Kullan�c� Takvimi"; break ;
	case "User description": $new = "User description"; break ;		// translate?
	case "User group": $new = "Kullan�c� grubu"; break ;				
	case "User Management": $new = "Kullan�c� Y�netimi"; break;
	case "userdelok": $new = "Bu kullan�c�y� silmek istedi�inize emin misiniz ?"; break;
	case "username": $new = "kullan�c� ad�"; break;
	case "Username entered already exists. Please use another username.": $new = "Kullan�c� ad� daha �nceden girilmi�. L�tfen ba�ka bir kullan�c� ad� girin."; break;
	case "users": $new = "kullan�c�lar"; break;

	case "View": $new = "G�ster"; break;
	case "View categories in year": $new = "Y�la ait kategorileri g�ster"; break ;
	case "View details or edit": $new = "Detaylar� g�r veya d�zenle"; break ;
	case "View event": $new = "Konuyu g�ster"; break;
	case "View events of user": $new = "Bu kullan�c�n�n konular�n� g�ster"; break;
	case "View events under this category in year": $new = "Bu kategorideki ve y�la ait konular� g�ster"; break ;
	case "View historical events before": $new = "Bu tarihten �nceki ge�mi� konular� g�ster"; break ;
	case "View month": $new = "Ay� g�r"; break;
	case "View week": $new = "Haftay� g�r"; break;

	case "Web Calendar Admin Login": $new = "Ajanda y�netici giri�i"; break ;
	case "Web Calendar User Login": $new = "Ajanda kullan�c� giri�i"; break ;
	case "week number": $new = "hafta say�s�"; break;
	case "Week starts": $new = "Hafta ba�lang�c�"; break;
	case "wronglogin": $new = "Yanl�� kullan�c� ad� veya parola"; break;

	case "Year": $new = "Y�l"; break;
	case "Yes, delete event !": $new = "Evet, konuyu sil !"; break;
	case "Yes, delete it!": $new = "Evet, sil!"; break;

	default: $new = "<b>".$msgin."</b> terc�me edilmeli !";    break;

    }
    return $new;
}
?>