<?php
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$dob=$_POST["day"]."/".$_POST["month"]."/".$_POST["year"];
$cnct=$_POST["contact"];
$email=$_POST["email"];
$user=$_POST["uname"];
$pswd=$_POST["pswd"];
include ("query.php");
$ob=new query();
$res=$ob->insertuser($name,$age,$gender,$dob,$cnct,$email,$user,$pswd);
if ($res>0)
{
    header ("location:userhome.php");
 
}
?>