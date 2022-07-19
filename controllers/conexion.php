<?php 

		function conexion(){
			$host_conexion="localhost";
			$user_conexion="root";
			$pass_conexion="";
			$data_base_conexion="reportedv_db";

			$conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion,$data_base_conexion);

			return $conexion;
		}

 ?>