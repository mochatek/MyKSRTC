<?php
$nid=$_GET["nid"];
include ("query.php");
$ob=new query();
$rs=$ob->deletenews($nid);
header ("location:news.php");

?>