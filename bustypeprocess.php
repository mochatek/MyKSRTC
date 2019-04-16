<?php
$btype=$_POST["bustype"];
include ("query.php");
$ob=new query();
$res=$ob->insertbustype($btype);
if ($res>0)
{
	header ("location:adminhome.php");
}
?>