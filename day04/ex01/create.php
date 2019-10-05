<?php
if ($_POST[login] != NULL && $_POST[passwd] != NULL && $_POST["submit"] == "OK"){
	if (!file_exists("../private")){
		mkdir("../private");
	}
	$l = 0;
	if (file_exists("../private/passwd")){
		$main = unserialize(file_get_contents("../private/passwd"));
		foreach ($main as $user){
			$l++;
			if ($user["login"] == $_POST["login"]){
				echo "ERROR\n";
				return ;
			}
		}
	}
	$user["login"] = $_POST["login"];
	$user["passwd"] = hash(whirlpool, $_POST["passwd"]);
	$main[$i] = $user;
	file_put_contents("../private/passwd", serialize($main));
	echo ("0K\n");
}
else{
	echo("ERROR\n");
}
?>
