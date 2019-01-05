<?php
require_once('../phpCode/queryCode.php');
if (array_key_exists("action",$_GET)){
	$action = $_GET['action'];
	$date = date('Y-m-d H:i:s');
	isset($id);
	isset($nama_product);
	isset($category_id);
	if (array_key_exists("add_id",$_POST)) $id = $_POST['add_id'];
	if (array_key_exists("add_nama_product",$_POST)) $nama_product = $_POST['add_nama_product'];
	if (array_key_exists("add_category_id",$_POST)) $category_id = $_POST['add_category_id'];

	if (array_key_exists("update_id",$_POST)) $id = $_POST['update_id'];
	if (array_key_exists("update_nama_product",$_POST)) $nama_product = $_POST['update_nama_product'];
	if (array_key_exists("update_category_id",$_POST)) $category_id = $_POST['update_category_id'];

	if (array_key_exists("delete_id",$_POST)) $id = $_POST['delete_id'];	
	
	$c = new Connection;
	switch ($action) {
		case 'update':
				
			$data = array(
					"id" => $id,
					"name" => $nama_product,
					"category_id" => $category_id
					);
				$c->update($data);
			break;
		case 'delete':
				$c->delete($id);
			break;
		case 'add':
				$data = array(
					"name" => $nama_product,
					"category_id" => $category_id
					);		
				$c->insert($data);
			break;
		default:
			echo "Modul tidak diketahui";
			break;
	}
}
header("Location: ../index.php");
die();
?>