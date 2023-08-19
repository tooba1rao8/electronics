 <?php
 include_once("../../connection/connection.php");
 
 $sid=$_REQUEST['sid'];
 if(isset($_REQUEST['sid']))
 {
	 $status="recieved";
	 $query=mysql_query("update sales set status='$status' where sid='$sid'");
	 if($query)
	 {
		 header('location:saleview.php');
		 }
		 else
		 {
			 echo "error";
			 
			 }
	 }
 
 
 
 ?>