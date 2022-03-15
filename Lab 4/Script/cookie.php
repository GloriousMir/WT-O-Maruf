<?php


if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("pass",$_POST["pass"],time()+ 3600);
	echo "";
} else {
	setcookie("username","");
	setcookie("pass","");
	echo "";
}

?>