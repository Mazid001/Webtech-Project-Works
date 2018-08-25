<?php
	if($_SESSION["type"]!="t")
		header("Location:../login.php");
?>
<head>
    <style>
    a:link {
    color: green;
    background-color: transparent;
    text-decoration: none;
   }
   </style>
</head>

<td width="190" valign="top">
			<b>&nbsp;Teacher Panel</b><hr/>
            <ul>
                <li><a href="Teacher_panel.php" target="iFrame">Dashboard</a></li>
                <li><a href="Teacher_sr.php" target="iFrame">Subjects & Results</a></li>
                <li><a href="upload_note.php" target="iFrame">Upload Note</a></li>
				<li><a href="send_notice.php" target="iFrame">Send Notice</a></li>
                <li><a href="notification.php" target="iFrame">Notification</a></li>
            </ul> 
            <b>&nbsp;Personal</b><hr/>
            <ul>
                <li><a href="profile.php" target="iFrame">View Profile</a></li>
                <li><a href="edit_profile.php" target="iFrame">Edit Profile</a></li>
                <li><a href="change_password.php" target="iFrame">Change Password</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>  
        </td>
        <td valign="top">