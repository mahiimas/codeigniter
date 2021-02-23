<!DOCTYPE html>
<html>
<head>
	<title>Registration</title> 
</head>
<style>
	fieldset
{
	background-color: rgba(0,0,0,0.5);
	margin-top: 50px;
	margin-left: 550px;
	height:350px;
	width:400px; 
	text-align: center;


}
</style>
<body>

<form method="post" action="<?php echo base_url()?>main/insert">
	<fieldset>
		<div><h2 style="color: red">Registration form</h2></div>
			<br>

    firstname
	<input type="text" name="firstname"></br></br>
	
	last name
	<input type="text" name="lastname"></br></br>
	username
	<input type="text" name="username"></br></br>
	phone
	<input type="text" name="phone"></br></br>
	email
	<input type="email" name="email"></br></br>
	password
	<input type="password" name="password"></br></br>
	<input type="submit" value="register" name="submit">

</body>
</html>
