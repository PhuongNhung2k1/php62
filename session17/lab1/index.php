<?php 
 	
 	// start session
	session_start();
	// load file connection.phop de ket noi csdl
	// ../ co nghia la nhay len cha 1 cap
	include "../application/Connection.php";
	// load file Controller.php
	include "../application/Controller.php";

 ?>
 <?php 
 	// goi MVC phong ban thi cho can include file controller va tap object cho no
 	include "controllers/ControllerPhongBan.php";
 	$obj = new ControllerPhongBan();
 	$obj->getPhongBan();
  ?>