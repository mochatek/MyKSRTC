<?php
$page=$_GET["pg"];
$sts=$_GET["sts"];
$id=$_GET["id"];
include ("query.php");
$ob=new query();
if($page==1)
{
$rs=$ob->changestatus($id,$sts);
header ("location:couriertracking.php");
}
elseif($page==2)
{
$rs=$ob->changestatus($id,$sts);
header ("location:reachonsent.php");
}elseif($page==3)
{
$rs=$ob->changestatus($id,$sts);
header ("location:reachonrecieved.php");
}
?>