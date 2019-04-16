
<?php
session_start();
$user=$_POST["uname"];
$pswd=$_POST["pswd"];
include ("query.php");
$ob=new query();
$rs=$ob->checkuser($user,$pswd);
$r=mysqli_num_rows($rs);
if($r>0)
{
$re=mysqli_fetch_array($rs);
$lid=$re[0];
$_SESSION["lid"]=$lid;
if($re[3]=='USER')	
{
	$_SESSION["user"]="user";
header ("location:uhome.php");
}
if($re[3]=='ADMIN')	
{$_SESSION["user"]="admin";
header ("location:adminhome.php");
}
elseif ($re[3]=='DEPOT')
{	$_SESSION["user"]="depot";
header ("location:depothome.php");
}
}
else
{
session_unset();
}

?>
</body>
</html>