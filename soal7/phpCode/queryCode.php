<?php

class Connection{
	
	private function dbConnection(){
		$db = new mysqli('localhost', 'root', '', 'bc_arkademy');
		if($db->connect_errno > 0){
			echo("<script>alert(\"Unable to connect to database [".$db->connect_error."]\");</script>");
		}
		return $db;	
	}

	
	public function insertProduct($data){
		$value = 1;
		$db = $this->dbConnection();
		$sql = "INSERT INTO `products`(`name`, `category_id`) VALUES ( \"".$data['nama_lengkap']."\", \"".$data['jenis_kelamin']."\")";	
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
			$value = 0;
		}
		$db->close();
		return $value;
	}

	
	public function update($data){
		$value = 1;
		$db = $this->dbConnection();
		$sql = "UPDATE `t_anggota` SET `nama_lengkap` = \"".$data['nama_lengkap']."\", `jenis_kelamin` = \"".$data['jenis_kelamin']."\" , `alamat` = \"".$data['alamat']."\" , `email` = \"".$data['email']."\" , `updated_at` = \"".$data['updated_at']."\" WHERE `id`= ".$data['id']." ";
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
			$value = 0;
		}
		$db->close();
		return $value;
	}

		
	public function delete($id){
		$value = 1;
		$db = $this->dbConnection();
		$sql = "DELETE FROM `products` WHERE `id`= ".$id;
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
			$value = 0;
		}
		$db->close();
		return $value;
	}


	public function select(){
		$value = NULL;
		$db = $this->dbConnection();
		$sql = "SELECT products.id, categories.name, products.name 
		FROM products JOIN categories
		ON products.category_id = categories.id ORDER BY id ASC";
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
		}else{
			$value = $result->fetch_all();
		}
		$db->close();
		return $value;
	}

	
	public function select_where_id($id){
		$value = NULL;
		$db = $this->dbConnection();
		$sql = "SELECT products.id, categories.name, products.name 
		FROM products JOIN categories
		ON products.category_id = categories.id WHERE id = ".$id;
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
		}else{
			$value = $result->fetch_all();
		}
		$db->close();
		return $value;
	}	

	
	public function select_last_id(){
		$value = 1;
		$db = $this->dbConnection();
		$sql = "SELECT products.id, categories.name, products.name 
		FROM products JOIN categories
		ON products.category_id = categories.id ORDER BY id DESC LIMIT 1";
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
		}else{
			$r = $result->fetch_assoc();
			$value = $r['id']+1;
		}
		$db->close();
		return $value;
	}

}
	

?>