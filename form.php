<?php
	if(isset($_GET['refer'])){ //Checks for refer code
?>
<input type="hidden" value="<?php echo $_GET['refer'];?>" name="refer">
<?php
	}
?>
<form action="save.php" method="POST">
	Email address: <input type="text" name="email"><br />
	<input type="submit" value="Sign Up">
</form>