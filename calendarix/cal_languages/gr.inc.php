<?php
function translate($msgin){
    switch ($msgin) {
	case "About Calendarix": $new = " ������� �� �� Calendarix"; break ;		
	case "Add": $new = " ��������� "; break ;
	case "Add Category": $new = " ��������� ��������� "; break;
	case "Add Event": $new = " ��������� ������� "; break;
	case "Add event": $new = " ��������� ������� " ; break;
	case "Add new user": $new = " ��������� v�� ������ "; break;
	case "Adding category": $new = " �������� ���������� "; break;
	case "Adding event": $new = " �������� ��������� " ; break ;
	case "Adding user": $new = " �������� ������ "; break ;
	case "Address": $new = " ��������� "; break ;			// master translate?
	case "Administration": $new = " �������� "; break;
	case "Administrator": $new = "Administrator"; break ;
	case "All categories": $new = " ���� �� ���������� "; break ;		
	case "Approval needed for posting of events.": $new = " ���������� ������� ��� ��� �������� ��� ���������."; break;  
	case "Approvals": $new = " ��������� "; break ;
	case "Approve": $new = " ��������� "; break;
	case "Approving event": $new = " ������� ��������� "; break;
	
	case "Back": $new = "����"; break;
	case "Both passwords entered do not match": $new = " �� ������� ��� ���������������� ��� ���������� "; break;	

	case "Calendar": $new = " ���������� "; break;
	case "Cancel": $new = " ����� "; break ;
	case "Cannot delete current login user": $new = " ��� �������� �� ���������� ��� �������� ������ ��� ����� ������������ "; break ;   
	case "Cannot change current login user": $new = " ��� �������� �� �������� ��� �������� ������ ��� ����� ������������ "; break;	
	case "Cannot have a category with blank name": $new = " ��� �������� �� ����� ��� ��������� �� ���� ����� "; break ;
	case "Categories": $new = " ���������� "; break;
	case "Category": $new = " ��������� "; break;
	case "Change": $new = " ������ "; break ;
	case "Change password": $new = " ������ ������� ��������� "; break; 		// master translate?
	case "Change password/group": $new = " ������ ������� ���������/������ "; break; 	// master obsolete?	
	case "Choose Category": $new = " �������� ��������� "; break;
	case "Close": $new = " ������� "; break;
	case "Confirm delete?": $new = " ������������ �� ��������?" ; break ;			
	case "Confirm delete all historical events before": $new = " ������������ �� �������� ��� ��� �� �������� �������� ���� ��� "; break ;
	case "confirmed events for today": $new = " ������������� �������� ��� ������ "; break ;
	case "Confirm password": $new = " ������������ ��� ������ ��������� "; break; 		
	case "Copy Event": $new = " ���������� �� ������� "; break ;				
	case "Current Week": $new = " �������� �������� "; break;
	case "Current Month": $new = " ������ ����� "; break;
	case "Current Year": $new = " ������ ���� "; break;		

	case "Date": $new = " ���������� "; break;
	case "Day": $new = " ����� "; break;
	case "Delete all historical events listed": $new = " ��������� ��� �� �������� �������� ��� ������������� "; break;
	case "Delete category": $new = " ��������� ��� ��������� "; break;
	case "Delete event": $new = " ��������� �� ������� "; break;
	case "Delete user": $new = " ��������� �� ������ "; break;
	case "Deleting category": $new = " �������� ��� ���������� "; break;
	case "Deleting event": $new = " �������� ��� ��������� "; break ;
	case "Deleting user": $new = " �������� ��� ������ "; break ;
	case "disabled": $new = " ���� �� ����� ���� ����� ����� ����������� "; break;

	case "Edit category": $new = " ������ ��� ���������� "; break;
	case "Edit event": $new = " ������ ��� ��������� "; break;
	case "Edit information": $new = " ������ ��� ����������� "; break;	// master translate?
	case "Email": $new = "Email"; break;
	case "End Time": $new = " ������ ������ "; break ;
	case "Event": $new = " ������� "; break ;
	case "Event Category": $new = " ��������� ��������� "; break;
	case "Event Description": $new = " ��������� ��������� "; break;
	case "Event repeated": $new = " ���������������� ������� "; break;  
	case "Event Title": $new = " ������ ��������� "; break;
	case "events": $new = " �������� "; break;
	case "Events added will be posted immediately.": $new = " �� �������� ��� ����������� �� ������������� ������."; break ;
	case "events awaiting approval": $new = " �������� ��� ��������� ������� "; break ;
	case "Events before": $new = " �������� ���� ���"; break ;
	case "events for": $new = " �������� ��� "; break;
	case "Events for day": $new = " �������� ��� ��� ����� "; break;
	case "events for whole calendar": $new = " �������� ��� �������� �� ���������� "; break;
	case "events for year": $new = " �������� ��� �� ���� "; break;
	case "Events from ": $new = " �������� ��� "; break;
	case "Events in category": $new = " �������� ���� ��������� "; break;

	case "From": $new = " ��� "; break ;
	case "Functions": $new = " ����������� "; break ;	// master translate?

	case "Go to": $new = " ��������� "; break;
	case "Go to day": $new = " ��������� ���� ����� "; break;
	case "Go to week": $new = " ��������� ���� �������� "; break;

	case "Historical Items": $new = " �������� �������� "; break;

	case "Login": $new = " ������� "; break;
	case "Login session time out in seconds": $new = "Login session time out in seconds"; break;
	case "Login session timeout": $new = " ��������� ������� �������� "; break ;
	case "Logout": $new = " ���������� "; break;

	case "Menu": $new = " ����� "; break;
	case "Month": $new = " ����� "; break;
	case "More info": $new = " ������������ ����������� "; break;

	case "Name": $new = " ����� "; break;			// master translate?
	case "Next": $new = " ������ "; break;				
	case "Next day": $new = " ������� ����� "; break;
	case "Next week": $new = " ������� �������� "; break;
	case "No categories yet": $new = " ����� ��������� ����� "; break;
	case "No events": $new = " ������ ������� "; break;
	case "No Repeat": $new = " ����� ��������� "; break;
	case "No results": $new = " ������ ���������� "; break;
	case "No, go back!": $new = "���, ����������!"; break;
	case "No.": $new = " ���."; break;			// master translate?
	case "noadminapprove": $new = " ������� ��� ��������� ��� ������������ ��� ���� ��������� ��� ����������� ��� ��� �� �������� "; break ;
	case "noapprove": $new = " ������� ��� ��������� ��� ������������ ��� ���� ������� ��� ����������� ��� ��� �� �������� "; break ;
	case "nocat": $new = " ������ �� ��������� ��� ���������!"; break;
	case "noday": $new = " ������ �� ��������� ��� �����!"; break;
	case "nodescription": $new = " ������ �� ������ ��� ��������� ���������!"; break;
	case "nomonth": $new = " ������ �� ��������� ���� ����!"; break;
	case "nonapproved": $new = " �������� ��� �������� ��� �������: "; break;
	case "nononapproved": $new = " ��� ������� ������ ������� ��� ���������� ��� ������� ���� �� ������ "; break;
	case "notitle": $new = " ������ �� ������ ���� ����� ���������!"; break;
	case "noyear": $new = " ������ �� ��������� ��� ����!"; break;

	case "on": $new = "on"; break;
	case "Optional": $new = " ������������ "; break;
	case "or month": $new = " � ����� "; break;
	case "or week": $new = " � �������� "; break;

	case "password": $new = " ������� ��������� "; break;
	case "Please choose the category you only want to view events for": $new = " �������� �������� ��� ��������� ��� ������ ���� �� ����� �� �������� ��� "; break;  
	case "Popup Month": $new = " ����������������� ����� "; break ;
	case "Previous": $new = " ������������ "; break;			
	case "Previous day": $new = " ����������� ����� "; break;
	case "Previous week": $new = " ����������� �������� "; break;

	case "Read more": $new = " �������� ������������ "; break;
	case "reallydelcat": $new = " ����� ������� �� ��� ������ ��������� ����� ��� ���������; ��� �� �������� ��� ���������� �� ����� ��� ��������� �� ���������� ������! "; break;
	case "Repeat": $new = " ����������� "; break;
	case "results": $new = " ������������ "; break;
	case "Role": $new = " ����� "; break;			// master translate?

	case "search": $new = " ��������� "; break;
	case "Sort by": $new = " ���������� ����"; break ;
	case "Sort by date": $new = " ���������� ���� ���������� "; break ;
	case "Sort by events": $new = " ���������� ���� �������� "; break ;
	case "Start Time": $new = " ������ ������� "; break ;

	case "thankyou": $new = " ��� ��������� ��� ��� ������ ��� ���������, �� ���������� ���� ��� ��� �������."; break;
	case "thankyoupost": $new = " ��� ��������� ��� ��� ������ ���� ���������, ���� ������������."; break;
	case "till": $new = " ����� "; break;
	case "Time added or updated": $new = " ������ ��������� � ���������� "; break ;
	case "timeout msg": $new = " �� ������� ��� ��������� ������� �� ����� ���� ��������������� ���� ������� ������� " ; break ;
	case "times every": $new = " ����� ���� "; break;	
	case "To": $new = "����"; break ;
	case "To delete category": $new = " ��� �� ��������� ��� ��������� "; break ;
	case "Today": $new = " ������ "; break;
	case "Total": $new = " ������ "; break;
	case "Total number of events for the month": $new = " ��������� ������� ��������� ��� �� ���� "; break ;
	case "Total number of events for user": $new = " ��������� ������� ��������� ��� �� ������ "; break ;		
	case "Total unapproved events for the month": $new = " �������� �������� ��� ������� ��� �� ���� " ; break;
	case "Two weeks": $new = " ��� ��������� " ; break;	

	case "Update": $new = " ������������� "; break;
	case "Update Event": $new = "�������� ��������� "; break;
	case "Updating category": $new = " �������� ���������� "; break ;
	case "Updating event": $new = " �������� ��������� "; break;
	case "Updating user": $new = " �������� ������ "; break;			
	case "Unapproved events": $new = " �������� ���� ������� "; break ;
	case "User": $new = " ������� "; break ;
	case "User Calendar": $new = " ���������� ������� "; break ;
	case "User description": $new = " ��������� ������� "; break ;		
	case "User group": $new = " ����� ������� "; break ;				
	case "User Management": $new = " ���������� ������� "; break;
	case "userdelok": $new = " ����� ������� �� ���������� ����� ��� ������?"; break;
	case "username": $new = " ����� ������ "; break;
	case "Username and passwords must be alpha-numeric and without spaces.": $new = " �� ����� ������ ��� �� ������� ��������� ������ �� ����� �������������� ��� ����� ����������."; break; 	// version 0.4.20030731
	case "Username entered already exists. Please use another username.": $new = " �� ����� ������ ��� ������� ������� ���. �������� �������������� ��� ���� ����� ������."; break;
	case "users": $new = " ������� "; break;

	case "View": $new = "�������"; break;
	case "View categories in year": $new = " ������� ���������� ��� ���� "; break ;
	case "View details or edit": $new = " ������� ������������ � ������ "; break ;
	case "View event": $new = " ������� ���������"; break;
	case "View events of user": $new = " ������� ��������� ��� ������ "; break;
	case "View events under this category in year": $new = " ������� ��������� ���� ��� ����� ��� ��������� ��� ���� "; break ;
	case "View historical events before": $new = " ������� ��������� ��������� ���� "; break ;
	case "View month": $new = " ������� ���� "; break;
	case "View week": $new = " ������� ��������� "; break;

	case "Web Calendar Admin Login": $new = "Calendarix ������� Admin "; break ;
	case "Web Calendar User Login": $new = "Calendarix ������� ������� "; break ;
	case "week number": $new = " ������� ��������� "; break;
	case "Week starts": $new = " �������� ��������� "; break;
	case "wronglogin": $new = " ���������� ����� ������ � ������� ��������� "; break;

	case "Year": $new = " ���� "; break;
	case "Yes": $new = " ��� "; break;		// version 0.4.20030731
	case "Yes, delete event !": $new = " ���, ��������� �� �������!"; break;
	case "Yes, delete it!": $new = " ���, �� �� ����������!"; break;

	default: $new = "<b>".$msgin."</b> ������ �� �����������!";    break;
    }
    return $new;
}
?>
