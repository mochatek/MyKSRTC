<?php
session_start();
  include ("query.php");
  $ob=new query();
  $dt=date("d/m/y");
  $msg=$_POST["msg"];
  $sub=$_POST["sub"];
  $lid=$_SESSION["lid"];
  $did=$_POST["depot"];
  $rs=$ob->sentmail($dt,$msg,$sub,$lid,$did);
  if($rs>0)
  {
	  header ("location:contactus.php");
  }
?>