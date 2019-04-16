<?php
session_start();
if($_SESSION["user"]=="user")
{
	unset($_SESSION["lid"]);
		unset($_SESSION["user"]);
		header ("location:userhome.php");
}
if($_SESSION["user"]=="admin")
{
	unset($_SESSION["lid"]);
		unset($_SESSION["user"]);
		header ("location:userhome.php");
}
if($_SESSION["user"]=="depot")
{
	unset($_SESSION["lid"]);
	unset($_SESSION["did"]);
		unset($_SESSION["user"]);
		header ("location:depot.php");
}
?>