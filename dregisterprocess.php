<?php
$dname=$_POST["dname"];
$dist=$_POST["dist"];
$cnct=$_POST["contact"];
$email=$_POST["email"];
$user=$_POST["uname"];
$pswd=$_POST["pswd"];
include ("query.php");
$ob=new query();
$res=$ob->insertdepot($dname,$dist,$cnct,$email,$user,$pswd);
if ($res>0)
{
    header ("location:depotregister.php");
 
}
?>