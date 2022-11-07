<?php

use LDAP\Result;

	class Database{
		private $db_host="localhost";
		private $db_user="root";
		private $db_pass="";
		private $db_name="fgc";

		private $conn=false;
		public $mysqli="";
		private $result = array();
		//DATABASE CONNECTION
		public function __construct()
		{
			if(!$this->conn){
				$this->mysqli=new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
				$this->conn=true;

				if($this->mysqli->connect_error){
					array_push($this->result,$this->mysqli->connect_error);
					return false;
				}
			}
			else{
				return true;
			}
		}
		//INSERT
		public function insert($table, $param=array())
		{
			$table_columns= implode(',', array_keys($param));
			$table_value= implode("','", $param);

			$sql= "INSERT INTO $table ($table_columns) VALUES ('$table_value')";

			if($this->mysqli->query($sql)){
				echo '<script>alert("SCRIPT UPLOADED")</script>';
			}else{
				echo '<script>alert("SCRIPT NOT UPLOADED")</script>';
			}
		}
		//UPDATE
		public function update($table, $param=array(),$where=null)
		{	
			$args=array();
			foreach ($param as $key => $value){
				$args[]="$key = '$value'";
			}

			$sql="UPDATE $table SET " . implode(',', $args);
			if($where!=null){
				$sql .=" WHERE sno='$where'";
			}

			if($this->mysqli->query($sql)){
				echo '<script>alert("SCRIPT UPDATED")</script>';
			}else{
				echo '<script>alert("SCRIPT NOT UPDATED")</script>';
			}
		}
		
		//DELETE
		public function delete($table,$where=null)
		{
			$sql="DELETE FROM $table";
			if($where!=null){
				$sql .=" WHERE sno='$where'";
			}
			if($this->mysqli->query($sql)){
				echo '<script>alert("SCRIPT DELETED")</script>';
			}else{
				echo '<script>alert("SCRIPT NOT DELETED")</script>';
			}
		}
		//SELECT
		public function select($table,$where=null,$where1=null,$where2=null)
		{
			$sql="SELECT * FROM $table";
			if($where!=null){
				$sql .=" WHERE sno='$where'";
			}
			if($where1!=null){
				$sql .=" WHERE email='$where1'";
			}
			if($where2!=null){
				$sql .=" AND password='$where2'";
			}
			if($this->mysqli->query($sql)){
				$res=$this->mysqli->query($sql);
				return $res;
			}else{
				echo '<script>alert("NOT UPDATED")</script>';
			}
		}
		public function getResult(){
			$val = $this->result;
			$this->result = array();
			return $val;
		}
		}
?>