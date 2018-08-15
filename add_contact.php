<!DOCTYPE html>
<html>
<head>
	<title>Add contact</title>
	<link rel="stylesheet" type="text/css" href="style14.css">
    <?php include "add.php"; ?> 
    
</head>
<body>
    <ul>
		<li><a href="view_contacts.html">Home</a></li>
		<li><a href="add_contact.php">Add</a></li>
		<li><a href="#">About</a></li>
	</ul>
	<div class="box">
		<img src="avatar.png" class="avatar">
		<h1>Add Details Below</h1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<p>Name</p>
			<input type="text" name="name" placeholder="enter name" value="<?php echo $name; ?>">
            <p1><span class="error"><?php echo $nameErr;?></span><br></p1>
			<p class="cn">Contact Number</p>
			<input type="text" name="tp" placeholder="enter number" value="<?php echo $tp; ?>">
            <p1><span class="error"><?php echo $tpErr;?></span><br></p1>
			<input type="submit" name="submit" value="ADD">
			<a href="#">for more details</a>
		</form>
	</div>
	<div class="footer">
		<a href="#">home</a>
	</div>

</body>
</html>