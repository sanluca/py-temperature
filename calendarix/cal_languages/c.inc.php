<?php
function translate($msgin){

    switch ($msgin) {
	case "About Calendarix": $new = "����Calendarix About Calendarix"; break ;		
	case "Add": $new = "��� Add"; break ;
	case "Add Category": $new = "������ Add Category"; break;
	case "Add Event": $new = "��ӻ Add Event"; break;
	case "Add event": $new = "��ӻ Add event" ; break;
	case "Add new user": $new = "������û� Add new user"; break;
	case "Adding category": $new = "���������� Adding category"; break;
	case "Adding event": $new = "������ӻ Adding event" ; break ;
	case "Adding user": $new = "��������û� Adding user"; break ;
	case "Address": $new = "�ص� Address"; break ;			// master translate?
	case "Administration": $new = "���� Administration"; break;
	case "Administrator": $new = "����Ա Administrator"; break ;
	case "All categories": $new = "������� All categories"; break ;		
	case "Approval needed for posting of events.": $new = "��ӻ��Ҫ��ˡ� Approval needed for posting of events."; break;  
	case "Approvals": $new = "��� Approvals"; break ;
	case "Approve": $new = "��� Approve"; break;
	case "Approving event": $new = "������˻ Approving event"; break;
	
	case "Back": $new = "�˻� Back"; break;
	case "Both passwords entered do not match": $new = "������������벻ƥ�� Both passwords entered do not match"; break;	

	case "Calendar": $new = "�ճ̱� Calendar"; break;
	case "Cancel": $new = "ȡ�� Cancel"; break ;
	case "Cannot delete current login user": $new = "�޷�ɾ����ǰ�ѵ����û� Cannot delete current login user"; break ;   
	case "Cannot change current login user": $new = "�޷��޸ĵ�ǰ�ѵ����û� Cannot change current login user"; break;	
	case "Cannot have a category with blank name": $new = "���������Ϊ�� Cannot have a category with blank name"; break ;
	case "Categories": $new = "��� Categories"; break;
	case "Category": $new = "��� Category"; break;
	case "Change": $new = "�޸� Change"; break ;
	case "Change password": $new = "�޸����� Change password"; break; 		// master translate?
	case "Change password/group": $new = "�޸�����/�� Change password/group"; break; 	// master obsolete?	
	case "Choose Category": $new = "ѡ����� Choose Category"; break;
	case "Close": $new = "�ر� Close"; break;
	case "Confirm delete?": $new = "ȷʵҪɾ���� Confirm delete?" ; break ;			
	case "Confirm delete all historical events before": $new = "ȷ������ǰ�Ļȫ��ɾ�� Confirm delete all historical events before"; break ;
	case "confirmed events for today": $new = "����Ļ��֤ʵ confirmed events for today"; break ;
	case "Confirm password": $new = "ȷ�Ͽ��� Confirm password"; break; 		
	case "Copy Event": $new = "���ƻ Copy Event"; break ;				
	case "Current Week": $new = "���� Current Week"; break;
	case "Current Month": $new = "���� Current Month"; break;
	case "Current Year": $new = "���� Current Year"; break;		

	case "Date": $new = "���� Date"; break;
	case "Day": $new = "�� Day"; break;
	case "Delete all historical events listed": $new = "���������������Ļɾ�� Delete all historical events listed"; break;
	case "Delete category": $new = "ɾ����� Delete category"; break;
	case "Delete event": $new = "ɾ��� Delete event"; break;
	case "Delete user": $new = "ɾ���û� Delete user"; break;
	case "Deleting category": $new = "����ɾ����� Deleting category"; break;
	case "Deleting event": $new = "����ɾ��� Deleting event"; break ;
	case "Deleting user": $new = "����ɾ���û� Deleting user"; break ;
	case "disabled": $new = "�˹��ܲ����� This section has been disabled"; break;

	case "Edit category": $new = "�༭��� Edit category"; break;
	case "Edit event": $new = "�༭� Edit event"; break;
	case "Edit information": $new = "�༭��Ϣ Edit information"; break;	// master translate?
	case "Email": $new = "���� Email"; break;
	case "End Time": $new = "����ʱ�� End Time"; break ;
	case "Event": $new = "� Event"; break ;
	case "Event Category": $new = "���� Event Category"; break;
	case "Event Description": $new = "����� Event Description"; break;
	case "Event repeated": $new = "�ظ��Ļ Event repeated"; break;  
	case "Event Title": $new = "����� Event Title"; break;
	case "events": $new = "� events"; break;
	case "Events added will be posted immediately.": $new = "�¼ӻ��������Ч�� Events added will be posted immediately."; break ;
	case "events awaiting approval": $new = "��ȴ������ events awaiting approval"; break ;
	case "Events before": $new = "��ǰ�Ļ Events before"; break ;
	case "events for": $new = "events for"; break;
	case "Events for day": $new = "Events for day"; break;
	case "events for whole calendar": $new = "events for whole calendar"; break;
	case "events for year": $new = "events for year"; break;
	case "Events from ": $new = "Events from "; break;
	case "Events in category": $new = "Events in category"; break;

	case "From": $new = "�Դ� From"; break ;
	case "Functions": $new = "���� Functions"; break ;	// master translate?

	case "Go to": $new = "Go to"; break;
	case "Go to day": $new = "Go to day"; break;
	case "Go to week": $new = "Go to week"; break;

	case "Historical Items": $new = "��ʷ��¼ Historical Items"; break;

	case "Login": $new = "��¼ Login"; break;
	case "Login session time out in seconds": $new = "��¼����������ʱ Login session time out in seconds"; break;
	case "Login session timeout": $new = "��½������ʱ Login session timeout"; break ;
	case "Logout": $new = "ע��Logout"; break;

	case "Menu": $new = "�˵� Menu"; break;
	case "Month": $new = "�� Month"; break;
	case "More info": $new = "������Ϣ More info"; break;

	case "Name": $new = "���� Name"; break;			// master translate?
	case "Next": $new = "��һ�� Next"; break;				
	case "Next day": $new = "���� Next day"; break;
	case "Next week": $new = "������ Next week"; break;
	case "No categories yet": $new = "��û����� No categories yet"; break;
	case "No events": $new = "û�л No events"; break;
	case "No Repeat": $new = "���ظ� No Repeat"; break;
	case "No results": $new = "û�н�� No results"; break;
	case "No, go back!": $new = "û�У���أ� No, go back!"; break;
	case "No.": $new = "���� No."; break;			// master translate?
	case "noadminapprove": $new = "����Ա��ӵĻ�����ɹ���Ա��� Approval of events added by administrators not needed by administrator"; break ;
	case "noapprove": $new = "�û���ӵĻ�������Ա��� Approval of events added by users not needed by administrator"; break ;
	case "nocat": $new = "�����ָ��ĳ����� You must select a category !"; break;
	case "noday": $new = "�����ָ��ĳ�գ� You must select a day !"; break;
	case "nodescription": $new = "�����Ի���������� You must give an event description !"; break;
	case "nomonth": $new = "�����ָ��ĳ�£� You must select a month !"; break;
	case "nonapproved": $new = "���Ҫ��ˣ� Events requiring approval : "; break;
	case "nononapproved": $new = "��ǰû�л��Ҫ��� There are no events needing approval at this time"; break;
	case "notitle": $new = "��������������⣡ You must give an event title !"; break;
	case "noyear": $new = "�����ָ��ĳ�꣡ You must select a year !"; break;

	case "on": $new = "�� on"; break;
	case "Optional": $new = "���� Optional"; break;
	case "or month": $new = "������ or month"; break;
	case "or week": $new = "�������� or week"; break;

	case "password": $new = "���� password"; break;
	case "Please choose the category you only want to view events for": $new = "��ѡ������鿴�Ļ��� Please choose the category you only want to view events for"; break;  
	case "Popup Month": $new = "�������� Popup Month"; break ;
	case "Previous": $new = "ǰһ�� Previous"; break;			
	case "Previous day": $new = "ǰһ�� Previous day"; break;
	case "Previous week": $new = "�¸����� Previous week"; break;

	case "Read more": $new = "��ϸ�Ķ� Read more"; break;
	case "reallydelcat": $new = "��ȷʵҪɾ�������𣿴�����µ����л����ɾ���� Are you sure to you want remove this category? All events associated with this category will be permanently deleted!"; break;
	case "Repeat": $new = "�ظ� Repeat"; break;
	case "results": $new = "��� results"; break;
	case "Role": $new = "��ɫ Role"; break;			// master translate?

	case "search": $new = "���� search"; break;
	case "Sort by": $new = "������˳��Sort by"; break ;
	case "Sort by date": $new = "���������� Sort by date"; break ;
	case "Sort by events": $new = "��������� Sort by events"; break ;
	case "Start Time": $new = "��ʼʱ�� Start Time"; break ;

	case "thankyou": $new = "��л������˻����������˺���Ч�� Thank you for entering an event, it will appear after approval."; break;
	case "thankyoupost": $new = "��л������˻��������Ч�� Thank you for entering an event, it has been posted."; break;
	case "till": $new = "ֱ�� till"; break;
	case "Time added or updated": $new = "���ӻ����ʱ�� Time added or updated"; break ;
	case "timeout msg": $new = "��ʱ���޸Ĳ��������´ε�¼ʱ��Ч Changes in session timeout will only be effective on next login" ; break ;
	case "times every": $new = "ÿ�� times every"; break;	
	case "To": $new = "ȥ To"; break ;
	case "To delete category": $new = "ɾ����� To delete category"; break ;
	case "Today": $new = "���� Today"; break;
	case "Total": $new = "�ܹ� Total"; break;
	case "Total number of events for the month": $new = "���»������ Total number of events for the month"; break ;
	case "Total number of events for user": $new = "���û��Ļ���� Total number of events for user"; break ;		
	case "Total unapproved events for the month": $new = "����δ��˵Ļ���� Total unapproved events for the month" ; break;
	case "Two weeks": $new = "�������� Two weeks" ; break;	

	case "Update": $new = "���� Update"; break;
	case "Update Event": $new = "���» Update Event"; break;
	case "Updating category": $new = "���ڸ������ Updating category"; break ;
	case "Updating event": $new = "���ڸ��» Updating event"; break;
	case "Updating user": $new = "���ڸ����û� Updating user"; break;			
	case "Unapproved events": $new = "δ��˵Ļ Unapproved events"; break ;
	case "User": $new = "�û� User"; break ;
	case "User Calendar": $new = "�û��ճ̱� User Calendar"; break ;
	case "User description": $new = "�û����� User description"; break ;		
	case "User group": $new = "�û��� User group"; break ;				
	case "User Management": $new = "�û����� User Management"; break;
	case "userdelok": $new = "ȷʵҪɾ�����û� Are you sure to delete this user ?"; break;
	case "username": $new = "�û��� username"; break;
	case "Username and passwords must be alpha-numeric and without spaces.": $new = "�û����������������ĸ�������Ҳ������ա� Username and passwords must be alpha-numeric and without spaces."; break; 	// version 0.4.20030731
	case "Username entered already exists. Please use another username.": $new = "�û����Ѵ��ڡ�������һ���û����� Username entered already exists. Please use another username."; break;
	case "users": $new = "�û� users"; break;

	case "View": $new = "�鿴 View"; break;
	case "View categories in year": $new = "����鿴��� View categories in year"; break ;
	case "View details or edit": $new = "�鿴��ϸ���ݻ�༭ View details or edit"; break ;
	case "View event": $new = "�鿴� View event"; break;
	case "View events of user": $new = "�鿴�û��Ļ View events of user"; break;
	case "View events under this category in year": $new = "����Ĳ鿴������µĻ View events under this category in year"; break ;
	case "View historical events before": $new = "�鿴�����Ļ View historical events before"; break ;
	case "View month": $new = "�²鿴 View month"; break;
	case "View week": $new = "�ܲ鿴 View week"; break;

	case "Web Calendar Admin Login": $new = "�ճ̱�����¼ Calendarix Admin Login"; break ;
	case "Web Calendar User Login": $new = "�ճ̱��û���¼ Calendarix User Login"; break ;
	case "week number": $new = "���� week number"; break;
	case "Week starts": $new = "�ܿ�ʼ Week starts"; break;
	case "wronglogin": $new = "�û��������벻�� Incorrect username or password"; break;

	case "Year": $new = "�� Year"; break;
	case "Yes": $new = "�� Yes"; break;		// version 0.4.20030731
	case "Yes, delete event !": $new = "�ǣ�ɾ����� Yes, delete event !"; break;
	case "Yes, delete it!": $new = "�ǣ�ɾ������ Yes, delete it!"; break;

	default: $new = "<b>".$msgin."</b> needs to be translated !";    break;

    }
    return $new;
}
?>