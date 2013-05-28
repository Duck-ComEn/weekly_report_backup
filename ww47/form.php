<?php
session_start();
Class form{
	function registerForm(){
		echo "<br>";
		echo '<form action="'.'" method=post >';
		echo "Username : <input type=text name = user >";
		echo "<br>";
		echo "<input type =submit value=Register><br>";
		echo '<a href = "http://duckza.webege.com/Random_Restaurant/">Home</a>';
		echo "</form>";
	}
	function loginForm(){
		echo "<br><h1><font color = blue>Input your name.</font></h1>";
		echo "<br>	<br>";
		echo '<form action="'.'" method=post >';
		echo "<input type=input name=name>";
		echo "<input type =submit value=Submit>";
		echo "<br><br>";
		echo '<a href ="?register=1" style="text-">Register</a>';
		echo "</form>";
	}
	function randomFirstPageForm(){
		echo"<br>";
		echo"<a href=http://duckza.webege.com/Random_Restaurant/?edit=1>Edit Your Restaurant</a>";
		echo"<br><br>";
		echo"<form action=href=?random=1 method=post>";
		echo'<input type=summit value="Random Click Hear">';
		echo"</form>";
		
		
	}
	
}
?>