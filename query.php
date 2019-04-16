<?php
include ("connection.php");
class query
{

function addfeedback($name,$email,$rating,$cmnt)
	{
		$obj=new connection();
		$date=date("d/m/y");
		$qry="insert into feedback (date,name,email,rating,comment)values('$date','$name','$email','$rating','$cmnt')";
	$res=$obj->execute($qry);
	return $res;
	}	
	
function readfeedback()
{
	$obj=new connection();
		$qry="select * from feedback order by date desc";
	$res=$obj->execute($qry);
	return $res;
}
	function viewdepot($lid)
	{
		$obj=new connection();
		$qry="select * from dregister where lid='$lid'";
	$res=$obj->execute($qry);
	return $res;
	}
	function postnews($did,$date,$title,$clr,$body)
	{
		$obj=new connection();
		$qry="insert into news (did,date,title,color,body)values('$did','$date','$title','$clr','$body')";
	$res=$obj->execute($qry);
	return $res;
	}
	function shownews($did)
	{
		$obj=new connection();
		$qry="select * from news where did='$did' order by date desc";
	$res=$obj->execute($qry);
	return $res;
	}
	function getnews($nid)
	{
		$obj=new connection();
		$qry="select * from news where nid='$nid' order by date desc";
	$res=$obj->execute($qry);
	return $res;
	}
	function homenews()
	{
		$obj=new connection();
		$qry="select nid,date,title from news order by date desc LIMIT 5";
	$res=$obj->execute($qry);
	return $res;
	}
	function allnews()
	{
		$obj=new connection();
		$qry="select * from news order by date desc";
	$res=$obj->execute($qry);
	return $res;
	}
	function updatenews($nid,$title,$color,$body)
	{
		$obj=new connection();
		$qry="update news set title='$title',body='$body',color='$color' where nid='$nid'";
	$res=$obj->execute($qry);
	return $res;
	}
	function deletenews($nid)
	{
		$obj=new connection();
		$qry="delete from news where nid='$nid'";
	$res=$obj->execute($qry);
	return $res;
	}
	function viewuser($lid)
	{
		$obj=new connection();
		$qry="select * from uregister where lid='$lid'";
	$res=$obj->execute($qry);
	return $res;
	
	}
	
	function deletebus($bid)
	{
		$obj=new connection();
		$qry="delete from busdetails where bid='$bid'";
	$res=$obj->execute($qry);
	$qry="delete from stopdetails where bid='$bid'";
	$res=$obj->execute($qry);
	return $res;
	}
	function listcourier($lid)
	{
		$obj=new connection();
		$qry="select * from courier where uid='$lid' order by date desc";
	$res=$obj->execute($qry);
	return $res;
	}

	function getdistrict()
	{
		$obj=new connection();
		$qry="select * from district";
	$res=$obj->execute($qry);
	return $res;
	}
	function getuid()
	{
		$obj=new connection();
		$qry="select max(uid) from stopdetails";
	$res=$obj->execute($qry);
	$r=mysqli_fetch_array($res);
	if($r[0]==NULL)
	{$uid=1;
	}
	else
	{
	$uid=$r[0]+1;
	}
	return $uid;
	}
	
	function getbustype()
{
	$obj=new connection();
	$qry="select * from bustype ";
	$res=$obj->execute($qry);
	return $res;

	}
		function getstops()
{
	$obj=new connection();
	$qry="select * from stops ";
	$res=$obj->execute($qry);
	return $res;

	}
		function getdepotdet()
{
	$obj=new connection();
	$qry="select * from dregister ";
	$res=$obj->execute($qry);
	return $res;

	}
		function getroutes()
{
	$obj=new connection();
	$qry="select * from routes ";
	$res=$obj->execute($qry);
	return $res;

	}
	function updatedepot($lid,$dname,$contact,$email)
{
	$obj=new connection();
	$qry="update dregister set depotname='$dname',contact='$contact',email='$email' where lid=$lid";
	$res=$obj->execute($qry);
	return $res;
	}
	
	function updateuser($lid,$uname,$contact,$email)
	{
	$obj=new connection();
	$qry="update uregister set name='$uname',contact='$contact',email='$email' where lid=$lid";
	$res=$obj->execute($qry);
	return $res;
	}
	
	
	function insertuser($name,$age,$gender,$dob,$cnct,$email,$user,$pswd)
	{
		$obj=new connection();
		$qry="insert into login(uname,pswd,role) values ('$user','$pswd','USER')";
		$res=$obj->execute($qry);
		$r=mysqli_insert_id($obj->con);
		$q="insert into uregister(name,age,gender,dob,contact,email,lid) values ('$name','$age','$gender','$dob','$cnct','$email','$r')";
		$result=$obj->execute($q);
		return $result;
				}
   function insertdepot($dname,$dist,$cnct,$email,$user,$pswd)
	{
		$obj=new connection();
		$qry="insert into login(uname,pswd,role) values ('$user','$pswd','DEPOT')";
		$res=$obj->execute($qry);
		$r=mysqli_insert_id($obj->con);
		$q="insert into dregister(depotname,district,lid,contact,email) values ('$dname','$dist','$r','$cnct','$email')";
		$result=$obj->execute($q);
		return $result;
				}
	function insertbustype($btype)
	{
		$obj=new connection();
		$qry="insert into bustype(bustype) values ('$btype')";
		$res=$obj->execute($qry);
		return $res;
				}

	function checkuser($uname,$pswd)
	{
		$obj=new connection();
		$qry="select * from login where uname='$uname' and pswd='$pswd'";
	    $res=$obj->execute($qry);
		return $res;
	}
	function checkroute($rname)
	{
		$obj=new connection();
		$qry="select * from routes where rname='$rname'";
		$res=$obj->execute($qry);
		$rs=mysqli_num_rows($res);
		if($rs>0)
		{
			 $r=mysqli_fetch_array($res);
			 $rid=$r[0];
		}
		else
		{
		 $qry="insert into routes(rname) values ('$rname')";
		$res=$obj->execute($qry);
		$rid=mysqli_insert_id($obj->con);
		}
		return $rid;
	}
	function deleteroute($uid)
	{
	   $obj=new connection();
		$qry="delete from stopdetails where uid='$uid'";
	    $res=$obj->execute($qry);
		return $res;	
	}
	function addroute($stop,$time,$bid,$rid,$uid)
	{
		$obj=new connection();
		$qry="select * from stops where stopname='$stop'";
		$res=$obj->execute($qry);
		 $rs=mysqli_num_rows($res);
		if($rs>0)
		{
			 $r=mysqli_fetch_array($res);
			 $spid=$r[0];
		}
		else
		{
		 $qry="insert into stops(stopname) values ('$stop')";
		$res=$obj->execute($qry);
		$spid=mysqli_insert_id($obj->con);
		}
		 $qry="insert into stopdetails(bid,stopid,time,routeid,uid) values ('$bid','$spid','$time',$rid,$uid)";
		$res=$obj->execute($qry);
		return $res;
	}
	function sentmail($dt,$msg,$sub,$lid,$did)
	{
		$obj=new connection();
		$qry="insert into mailbox(date,message,subject,lid,depotid) values ('$dt','$msg','$sub',$lid,$did)";
		$res=$obj->execute($qry);
		return $res;
	}
	function readmail($did)
	{
		$obj=new connection();
		$qry="select name,date,subject,message,mailbox.lid from mailbox,uregister where subject!='REPLY' and  depotid=$did and mailbox.lid=uregister.lid order by date desc";
		$res=$obj->execute($qry);
		return $res;
	}
	
	
	function addbusdet($bid,$bustype,$regno,$did,$rid)
	{
		$ob=new connection();
		$qry="insert into busdetails(bid,typeid,regno,depotid,routeid) values ('$bid','$bustype','$regno','$did','$rid')";
		$res=$ob->execute($qry);
		return $res;
	} 
	function findbuses($from,$to,$time)	
	{
		$ob=new connection();
		$qry="SELECT distinct a.uid from stopdetails a JOIN stopdetails b ON a.uid=b.uid WHERE  a.stopid in (select stopid from stops where             stopname='$from') and b.stopid in (select stopid from stops where stopname='$to') and a.time>'$time' and a.id<b.id order by a.time";
		$res=$ob->execute($qry);
		return $res;
	}
	function getbusdetails($from,$to,$uid)
	{
		$ob=new connection();
		$qry="select rname,a.bid,a.time,b.time,bustype from stopdetails as a,stopdetails as b,routes,bustype where a.stopid in (select stopid from stops where             stopname='$from') and b.stopid in (select stopid from stops where stopname='$to') and a.uid=b.uid and a.uid='$uid' and a.routeid=routes.routeid and typeid in(select typeid from busdetails where bid=a.bid)";
		$res=$ob->execute($qry);
		return $res;
	}
	
	function getroutedetails($uid)
	{
		$ob=new connection();
		$qry="select stopname,time from stops,stopdetails where stops.stopid=stopdetails.stopid and uid='$uid' order by id";
		$res=$ob->execute($qry);
		return $res;
	}

	function showroutes($uid)
	{
			$ob=new connection();
		 $qry="select stopname from stops where stopid in(select stopid from stopdetails where uid='$uid')limit 3";
		$res=$ob->execute($qry);
		return $res;
	}
	
	function addcourier($date,$scnct,$rcnct,$item,$weight,$d,$amnt,$from,$to,$uid)
	{
		$ob=new connection();
		$qry="INSERT INTO courier ( `date`, `scnct`, `rcnct`, `item`, `weight`, `delivery`, `amount`, `from`, `to`, status,uid) VALUES ( '$date', '$scnct', '$rcnct', '$item', '$weight', '$d', '$amnt', '$from', '$to',0,'$uid')";
		$res=$ob->execute($qry);
	return $res;
	}
	function getdepot($id)
	{
			$ob=new connection();
		$qry="select depotname from dregister where depotid='$id'";
		$res=$ob->execute($qry);
		$r=mysqli_fetch_array($res);
		return $r[0];
	}
	function readcourier($did,$src,$sts)
	{
			$ob=new connection();
			if($src=="from")
			{
		$qry="SELECT * FROM `courier` WHERE `from`='$did' ";
			}
			elseif($src=="to")
			{
		$qry="SELECT * FROM `courier` WHERE `to`='$did' ";
			}
			if($sts==3)
			{
				$qry="SELECT YEAR(date) as years, MONTH(date) as Months, SUM(amount) AS total FROM courier where status=3 and `from` = '$did' GROUP BY YEAR(date), MONTH(date) ORDER BY YEAR(date),MONTH(date) ";
			}
		$res=$ob->execute($qry);
		return $res;
	}
	
	function getcourier($year,$month,$did)
	{   $ob=new connection();
		$qry="select * from courier where year(date)='$year' and month(date)='$month' and `from`='$did' and status=3 order by date ";
		$res=$ob->execute($qry);
		return $res;
	}
	function getmonth($month)
	{
	$m="";  
	 switch($month)
	{
		case '1':$m="JANUARY";
		break;
		case '2':$m="FEBRUARY";
			break;
		case '3':$m="MARCH";
			break;
		case '4':$m="APRIL";
			break;
		case '5':$m="MAY";
			break;
		case '6':$m="JUNE";
			break;
		case '7':$m="JULY";
			break;
		case '8':$m="AUGUST";
			break;
		case '9':$m="SEPTEMBER";
			break;
		case '10':$m="OCTOBER";
			break;
		case '11':$m="NOVEMBER";
			break;
		case '12':$m="DECEMBER";
		break;
	}	
	return $m;
	}
	
	
	
	function changestatus($id,$sts)
	{
			$ob=new connection();
		$qry="update courier set status='$sts' where id='$id'";
		$res=$ob->execute($qry);
		return $res;
	}
	
	function getcourierid()
	{
			$ob=new connection();
		$qry="select max(id)+1 as id from courier";
		$res=$ob->execute($qry);
		$r=mysqli_fetch_array($res);
		return $r[0];
	}
function getuids($bid)
{
	 $ob=new connection();
	$qry="select distinct uid from stopdetails where bid='$bid'";
	$res=$ob->execute($qry);
		return $res; 
}

function getbuses($did)
{
       $ob=new connection();
		 $qry="select bid from busdetails where depotid='$did'";
		$res=$ob->execute($qry);
		return $res; 
}
function showbus($bid)
{
       $ob=new connection();
		 $qry="select bustype,regno,rname from bustype,busdetails,routes where bid='$bid'and busdetails.typeid=bustype.typeid and routes.routeid=busdetails.routeid";
		$res=$ob->execute($qry);
		return $res; 
}

function editbusdet($bid,$regno,$btype,$rid)
{
	 $ob=new connection();
		 $qry="update busdetails set regno='$regno',typeid='$btype',routeid='$rid' where bid='$bid'";
		$res=$ob->execute($qry);
		return $res; 
}
	function showbusdetails($uid)
	{
			$ob=new connection();
		 $qry="select regno,bustype,depotname,contact,rname from busdetails,dregister,routes,bustype where busdetails.depotid=dregister.depotid and busdetails.typeid=bustype.typeid and busdetails.routeid=routes.routeid and busdetails.bid in(select bid from stopdetails where uid='$uid')";
		$res=$ob->execute($qry);
		return $res;
	}
}
?>