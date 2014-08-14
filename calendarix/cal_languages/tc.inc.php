<?php
function translate($msgin){

    switch ($msgin) {
	case "About Calendarix": $new = "����Calendarix��ƾ�"; break ;		
	case "Add": $new = "�s�W"; break ;
	case "Add Category": $new = "�s�W����"; break;
	case "Add Event": $new = "�s�W�ƥ�"; break;
	case "Add event": $new = "�s�W�ƥ�" ; break;
	case "Add new user": $new = "�s�W�Τ�"; break;
	case "Adding category": $new = "�s�W���ؤ�"; break;
	case "Adding event": $new = "�s�W�ƥ�" ; break ;
	case "Adding user": $new = "�s�W�Τᤤ"; break ;
	case "Address": $new = "�a�}"; break ;			// master translate?
	case "Administration": $new = "�޲z"; break;
	case "Administrator": $new = "�޲z��"; break ;
	case "All categories": $new = "�Ҧ�����"; break ;		
	case "Approval needed for posting of events.": $new = "�f�ַs�W�ƥ�C"; break;  
	case "Approvals": $new = "�f��"; break ;
	case "Approve": $new = "�f��"; break;
	case "Approving event": $new = "�f�֨ƥ�"; break;
	
	case "Back": $new = "��^"; break;
	case "Both passwords entered do not match": $new = "��J�⦸�K�X���~"; break;	

	case "Calendar": $new = "��ƾ�"; break;
	case "Cancel": $new = "����"; break ;
	case "Cannot delete current login user": $new = "�L�k�R���{�b�n�J���Τ�"; break ;   
	case "Cannot change current login user": $new = "�L�k�ק�{�b�n�J���Τ�"; break;	
	case "Cannot have a category with blank name": $new = "���ئW�٤���ť�"; break ;
	case "Categories": $new = "����"; break;
	case "Category": $new = "����"; break;
	case "Change": $new = "�ק�"; break ;
	case "Change password": $new = "�ק�K�X"; break; 		// master translate?
	case "Change password/group": $new = "�ק�K�X/��"; break; 	// master obsolete?	
	case "Choose Category": $new = "��ܶ���"; break;
	case "Close": $new = "����"; break;
	case "Confirm delete?": $new = "�T�w�n�R���H" ; break ;			
	case "Confirm delete all historical events before": $new = "�T�w�n�R���H�e�Ҧ����ƥ�H"; break ;
	case "confirmed events for today": $new = "�T�{���Ѫ��ƥ�"; break ;
	case "Confirm password": $new = "�T�{�K�X"; break; 		
	case "Copy Event": $new = "�ƻs�ƥ�"; break ;				
	case "Current Week": $new = "���g"; break;
	case "Current Month": $new = "����"; break;
	case "Current Year": $new = "���~"; break;		

	case "Date": $new = "���"; break;
	case "Day": $new = "��"; break;
	case "Delete all historical events listed": $new = "�R���C�X���H�e�Ҧ��ƥ�"; break;
	case "Delete category": $new = "�R������"; break;
	case "Delete event": $new = "�R���ƥ�"; break;
	case "Delete user": $new = "�R���Τ�"; break;
	case "Deleting category": $new = "�R�����ؤ�"; break;
	case "Deleting event": $new = "�R���ƥ�"; break ;
	case "Deleting user": $new = "�R���Τᤤ"; break ;
	case "disabled": $new = "���\��L��"; break;

	case "Edit category": $new = "�s�趵��"; break;
	case "Edit event": $new = "�s��ƥ�"; break;
	case "Edit information": $new = "�s���T"; break;	// master translate?
	case "Email": $new = "�q�l�l��"; break;
	case "End Time": $new = "�����ɶ�"; break ;
	case "Event": $new = "�ƥ�"; break ;
	case "Event Category": $new = "�ƥ󶵥�"; break;
	case "Event Description": $new = "�ƥ�y�z"; break;
	case "Event repeated": $new = "���ƨƥ�"; break;  
	case "Event Title": $new = "�ƥ���D"; break;
	case "events": $new = "�ƥ�"; break;
	case "Events added will be posted immediately.": $new = "�s�W�ƥ�ߨ�ͮġC"; break ;
	case "events awaiting approval": $new = "�ݼf�֨ƥ�"; break ;
	case "Events before": $new = "�H�e���ƥ�"; break ;
	case "events for": $new = "�ƥ�̾�"; break;
	case "Events for day": $new = "�C��ƥ�"; break;
	case "events for whole calendar": $new = "�Ҧ���ƾ�ƥ�"; break;
	case "events for year": $new = "���~�ƥ�"; break;
	case "Events from ": $new = "�ƥ�Ӧ�"; break;
	case "Events in category": $new = "���ؤ����ƥ�"; break;

	case "From": $new = "�q"; break ;
	case "Functions": $new = "�\��"; break ;	// master translate?

	case "Go to": $new = "Go to"; break;
	case "Go to day": $new = "Go to day"; break;
	case "Go to week": $new = "Go to week"; break;

	case "Historical Items": $new = "���v����"; break;

	case "Login": $new = "�n�J"; break;
	case "Login session time out in seconds": $new = "�n�J�ɶW�L�ɶ�"; break;
	case "Login session timeout": $new = "�n�J�Ȱ�"; break ;
	case "Logout": $new = "�n�X"; break;

	case "Menu": $new = "�C��"; break;
	case "Month": $new = "��"; break;
	case "More info": $new = "��h��T"; break;

	case "Name": $new = "�m�W"; break;			// master translate?
	case "Next": $new = "�U�@��"; break;				
	case "Next day": $new = "����"; break;
	case "Next week": $new = "�U�P��"; break;
	case "No categories yet": $new = "�٨S������"; break;
	case "No events": $new = "�S���ƥ�"; break;
	case "No Repeat": $new = "������"; break;
	case "No results": $new = "�S�����G"; break;
	case "No, go back!": $new = "�S���A�Ц^�I"; break;
	case "No.": $new = "���C"; break;			// master translate?
	case "noadminapprove": $new = "�޲z���s�W���ƥ󤣻ݭn�޲z���f��"; break ;
	case "noapprove": $new = "�Τ�s�W���ƥ󤣻ݭn�޲z���f��"; break ;
	case "nocat": $new = "�A������ܤ@�Ӷ��ءI"; break;
	case "noday": $new = "�A������ܤ@�Ӥ���I"; break;
	case "nodescription": $new = "�A�����y�z�ƥ�I"; break;
	case "nomonth": $new = "�A������ܤ@�Ӥ���I"; break;
	case "nonapproved": $new = "�ƥ�ݭn�f�� : "; break;
	case "nononapproved": $new = "�ثe�S���ƥ�ݭn�f��"; break;
	case "notitle": $new = "�A�����Щ��ƥ󪺥D�D�I"; break;
	case "noyear": $new = "�A������ܦ~���I"; break;

	case "on": $new = "�b"; break;
	case "Optional": $new = "���"; break;
	case "or month": $new = "�Ϊ̤�"; break;
	case "or week": $new = "�Ϊ̬P��"; break;

	case "password": $new = "�K�X"; break;
	case "Please choose the category you only want to view events for": $new = "�п�ܧA�Q�d�ݪ�����"; break;  
	case "Popup Month": $new = "�t�}������"; break ;
	case "Previous": $new = "�e�@��"; break;			
	case "Previous day": $new = "�e�@��"; break;
	case "Previous week": $new = "�W�P��"; break;

	case "Read more": $new = "�ԲӾ\Ū"; break;
	case "reallydelcat": $new = "�A�T�w�n�����o�Ӷ��ءH�o�Ӷ��ت��Ҧ��ƥ�N�Q�R���I"; break;
	case "Repeat": $new = "����"; break;
	case "results": $new = "���G"; break;
	case "Role": $new = "����"; break;			// master translate?

	case "search": $new = "�j�M"; break;
	case "Sort by": $new = "�̶���"; break ;
	case "Sort by date": $new = "�̤���ƦC "; break ;
	case "Sort by events": $new = "�̨ƥ�ƦC"; break ;
	case "Start Time": $new = "�}�l�ɶ�"; break ;

	case "thankyou": $new = "�P�±z�s�W�ƥ�A�N�b�f�֫�ͮġC"; break;
	case "thankyoupost": $new = "�P�±z�s�W�ƥ�A�w�g�s�W�ͮġC"; break;
	case "till": $new = "����"; break;
	case "Time added or updated": $new = "�s�W�Χ��ɶ�"; break ;
	case "timeout msg": $new = "���w�W�L�ɶ��N��U���n�J�ɥͮ�" ; break ;
	case "times every": $new = "�C��"; break;	
	case "To": $new = "��"; break ;
	case "To delete category": $new = "�R������"; break ;
	case "Today": $new = "����"; break;
	case "Total": $new = "�`�p"; break;
	case "Total number of events for the month": $new = "�`�p����ƥ�"; break ;
	case "Total number of events for user": $new = "�`�p�Τ�ƥ�"; break ;		
	case "Total unapproved events for the month": $new = "�`�p���를�f�֨ƥ�" ; break;
	case "Two weeks": $new = "��ӬP��" ; break;	

	case "Update": $new = "��s"; break;
	case "Update Event": $new = "��s�ƥ�"; break;
	case "Updating category": $new = "��s���ؤ�"; break ;
	case "Updating event": $new = "��s�ƥ�"; break;
	case "Updating user": $new = "��s�Τᤤ"; break;			
	case "Unapproved events": $new = "���f�֨ƥ�"; break ;
	case "User": $new = "�Τ�"; break ;
	case "User Calendar": $new = "�Τ��ƾ�"; break ;
	case "User description": $new = "�Τ�y�z"; break ;		
	case "User group": $new = "�Τ�s��"; break ;				
	case "User Management": $new = "�Τ�޲z"; break;
	case "userdelok": $new = "�A�T�w�n�R���o�ӥΤ�H"; break;
	case "username": $new = "�Τ�W��"; break;
	case "Username and passwords must be alpha-numeric and without spaces.": $new = "�Τ�W�٩M�K�X�����O�^��r���μƦr�ӥB����ťաC"; break; 	// version 0.4.20030731
	case "Username entered already exists. Please use another username.": $new = "�Τ�W�٤w�s�b�A�ШϥΥt�@�ӦW�١C"; break;
	case "users": $new = "�Τ�"; break;

	case "View": $new = "�d��"; break;
	case "View categories in year": $new = "�H�~�d�ݶ���"; break ;
	case "View details or edit": $new = "�d�ݲӸ`�νs��"; break ;
	case "View event": $new = "�d�ݨƥ�"; break;
	case "View events of user": $new = "�d�ݥΤ�ƥ�"; break;
	case "View events under this category in year": $new = "�H�~�d�ݳo�Ӷ��ت��ƥ�"; break ;
	case "View historical events before": $new = "�d�ݥH�e���ƥ�"; break ;
	case "View month": $new = "��d��"; break;
	case "View week": $new = "�g�d��"; break;

	case "Web Calendar Admin Login": $new = "��ƾ�޲z�n�J"; break ;
	case "Web Calendar User Login": $new = "��ƾ�Τ�n�J"; break ;
	case "week number": $new = "�g�ƥ�"; break;
	case "Week starts": $new = "�g�}�l"; break;
	case "wronglogin": $new = "�Τ�W�٤αK�X���~"; break;

	case "Year": $new = "�~"; break;
	case "Yes": $new = "�O"; break;		// version 0.4.20030731
	case "Yes, delete event !": $new = "�O�A�R���ƥ�I"; break;
	case "Yes, delete it!": $new = "�O�A�R�����I"; break;

	default: $new = "<b>".$msgin."</b> needs to be translated !";    break;

    }
    return $new;
}
?>