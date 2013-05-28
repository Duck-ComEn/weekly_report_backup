<?php @session_start();?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<?php

require_once("config.php");
require_once("form.php");
require_once("Restaurant.php");

?>

	<title>Random Restaurant </title>
	<link rel="shortcut icon" type="image/x-icon" href="images/icon_titlebar.jpg" />
	
	</head>
	<body background="images/bg.jpg"  style="background-position:fixed" >
	<center>
	<br>	<br>	<br>	<br>	
	<table >
	<tr><td align=center width = 400>
	<?php
		$display=new form();
		$username=$_POST['user'];
		$name=$_POST['name'];
		
		if ($_GET['register'] == 1) {
			if (empty($username)){
				$display->registerForm();	
			}else{
				$command= "select * from user where username like '".$username."'";
				$result=mysql_query($command);
				$numrow=mysql_num_rows($result);
				//____________________________________________________________________
				if ($numrow ==0){
				?>
				<script type="text/javascript">
					window.alert("You can use a user name  : <?php echo $username;?>");					
					</script>
				<?php 
				$command="insert into user(username) values('".$username."')";
				mysql_query($command);
				echo "<meta http-equiv=refresh content=1;url=http://duckza.webege.com/Random_Restaurant/>";
				}else{
				?>
					<script type="text/javascript">
					window.alert("<?php echo $username;?>a duplicate user name");					
					</script>
				<?php
				$display->registerForm();	
				}
				//___________________________________________________________________
			}	
		}else{
			if(empty($name)){
				$display->loginForm();
			}else{
				$cmd= "select * from user where username like '".$name."'";
				$result1=mysql_query($cmd);
				$num=mysql_num_rows($result1);
				if ($num==0){
				?>
					<script type="text/javascript">
					window.alert("Invalid user  ! ! ! . Please try again");					
					</script>
				<?php 
				$display->loginForm();
				}else{
				?>
					<script type="text/javascript">
					window.alert("Success !");					
					</script>
				<?php 						
					
				}
			}
			
		}
		else if(){}
		else if(){}
		?>		
		</td></tr></table>
	</center>
	</body>
</html>