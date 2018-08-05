<?php
	if($_SESSION["type"]!="a")
		header("Location:../login.php");
?>

<td width="190" valign="top">
			<b>&nbsp;Admin Panel</b><hr/>
            <ul>
                <li><a href="Admin_panel.php" target="iFrame">Dashboard</a></li>
                <li><a href="students.php" target="iFrame">Students Info</a></li>
                <li><a href="teachers.php" target="iFrame">Teachers Info</a></li>
				<li><a href="searchuser.php" target="iFrame">Search User</a></li>
                <li><a href="subject.php" target="iFrame">Add New Subject</a></li>
				<li><a href="assignteacher.php" target="iFrame">Assign Teacher To Subject</a></li>
				<li><a href="sendnotice.php" target="iFrame">Send Notice</a></li>
				<li><a href="teacherattendance.php" target="iFrame">Teacher Attendance</a></li>
				<li><a href="addadmin.php" target="iFrame">Add Admin</a></li>
				<li><a href="teacherreport.php" target="iFrame">Generate Teacher Report</a></li>
				<li><a href="studentreport.php" target="iFrame">Generate Student Report</a></li>
            </ul> 
			<b>&nbsp;Personal</b><hr/>
            <ul>
			
		    <li><a href="change_password.php" target="iFrame">Change Password</a></li>
            </ul>
        </td>
        <td valign="top">
