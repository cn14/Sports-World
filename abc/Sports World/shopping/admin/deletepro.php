<?php

session_start();

require_once("./include/config.php");

if(isset($_GET)) {
	 mysqli_query($con,"delete from products where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Product deleted !!";
		header('location: manage-products.php');
		exit();
	} 
	else {
		echo "Error";
	}


//if(isset($_GET['del']))
		  // {
		  //         mysqli_query($con,"delete from products where id = '".$_GET['id']."'");
    //               $_SESSION['delmsg']="Product deleted !!";
		  // }
