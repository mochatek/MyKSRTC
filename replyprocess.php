<?php
include("query.php");
$ob=new query();
$lid=$_POST["huid"];
$msg=$_POST["reply"];
session_start();
$did=$_SESSION["did"];
$dt=date("d/m/y");
$sub="REPLY";
$rs=$ob->sentmail($dt,$msg,$sub,$lid,$did);
  if($rs>0)
  {
	  header ("location:inbox.php");
  }
?>