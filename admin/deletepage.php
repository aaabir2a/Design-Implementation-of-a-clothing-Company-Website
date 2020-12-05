<?php

	include('../config/config.php');
	include('../config/Database.php');

?>

<?php
	$db=new Database();
	
?>

<?php
	
	if(!isset($_GET['deletepage']) || $_GET['deletepage']==NULL){
	echo "<script>window.location='index.php';</script>";
	}else{
		
	$pageid=$_GET['deletepage'];
	

	$delquery="delete  from tbl_page where id='$pageid'";
	$deldata=$db->delete($delquery);
	if($deldata){
			echo"<script>alert('Page deleted successfully!');</script>";
			echo "<script>window.location='index.php';</script>";
		
	}else{
		
			echo"<script>alert('Page not deleted!');</script>";
			echo "<script>window.location='index.php';</script>";
		
		
	}
}
?>