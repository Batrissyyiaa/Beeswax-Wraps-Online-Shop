<?php 
	include '../../config/dbconn.php';
	session_start();
	## verify if the session user is admin
	if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator"){
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
	<title>Hive4</title>
	<head>
		<style>
			body{
				background-color:#E6DAD1;
				margin: 0;
				padding: 0;
			}
			#acc{
				margin-left: auto;
				margin-right: auto;
				background-color:#8AB49C;
				border-radius:10px;	
				padding-top:40px;
                padding-bottom:40px;
                padding-left: 20px;
                padding-right: 20px;
				font-size:20px;
			}
			table{
				font-family:calibri, sans-serif;
				color: #E6DAD1;
			}
            input[type="text"] {
                width: 100%;
                padding: 5px;
                border: 1px solid #C7D8CF;
                background-color: #C7D8CF;
                border-radius: 5px;
                box-sizing: border-box;
                margin-bottom: 5px;
            }
			#header{
				width:100%;
				background-image: url('header bg pattern.png');
				background-repeat: repeat;
				background-size: contain;
				background-color: #846228;
				padding-left:10px;	
				font-size:30px;	
				color:#E6DAD1;
			}
			a{
				text-align: center;
				color: #E6DAD1;
				text-decoration: none;
			}
			a:hover{
				color: #DE8E04;
			}
			.user:hover {
				opacity: 0.8;
			}

			.user:hover + p {
				display: block;
			}
		</style>
	</head>
	<table id=header  border="0">
		<tr>
			<th style="padding-left: 20px;">
				<a href="admin users list.php">
					USERS
				</a>
			</th>
			<th>
				<a href="admin product list.php">
					PRODUCTS
				</a>
			</th>
			<th>
				<a href="admin orders.php">
				ORDERS
				</a>
			</th>
			<td colspan=2><img src="design 1.png"  style="width:60px; height:60px;"></td>
			<th style="padding-left:60px;">
				<a href="admin dashboard.php">
					DASHBOARD
				</a>
			</th>
			<td>
				<a href="admin view account.php">
					<img src="user.png" style="width:71px; height:40px;" class="user">
				</a>
			</td>
		</tr>
	</table>
	<br><br>
	<form id="editForm" action="update account process.php" method="post">
		<table id=acc border="0">
			<tr>
				<th colspan=3 style="font-size:40px">ACCOUNT DETAILS</th>
			</tr>
			<tr>
				<td rowspan=3 style="text-align:center"><img src="hee.png" style="width:150px;height:150px;"></td>
				<td style="padding:10px;">Full Name</td>
				<td><input type="text" id="fullname" name="fullname"></td>
			</tr>
			<tr>
				<td style="padding:10px;">Email</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
                <td style="padding:10px;">Password</td>
				<td><input type="text" id="pw" name="pw"></td>
			</tr>
			<tr>
                <td style="text-align:center; font-size:30px">ethanlee</td>
				<td style="padding:10px;">Confirm Password</td>
				<td><input type="text" id="pw" name="pw"></td>
			</tr>
			<tr>
                <td style="text-align:center">132654</td>
			</tr>
			<tr>
				<td colspan="3" style="padding-top:10px; text-align:center;">
					<!-- <a href="admin view account.php">
						<img src="save details.png" >
					</a> -->
					<input type="image" src="save details.png" alt="Submit" value="update">
							
				</td>
			</tr>
		</table>
	</form>
	<script>
		// Function to handle form submission
		function submitForm() {
		// Get form data
		const fullname = document.getElementById('fullname').value;
		const email = document.getElementById('email').value;
		const pw = document.getElementById('pw').value;

		// Create a new FormData object
		const formData = new FormData();
		formData.append('fullname', fullname);
		formData.append('email', email);
		formData.append('pw', pw);

		// Send the form data to the server
		fetch('admin view account.php', {
			method: 'POST',
			body: formData
		})
		.then(response => {
			if (response.ok) {
			// Handle success response
			console.log('Form data submitted successfully');
			} else {
			// Handle error response
			console.log('Error submitting form data');
			}
		})
		.catch(error => {
			// Handle network error
			console.log('Network error:', error);
		});
		}
	</script>
</html>

<?php
} 
Else
{	## if the session username is no admin, redirect the page to the login page 
header("Location: admin login.php");
}
?>