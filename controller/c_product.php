<?php 
	include_once('model\m_product.php');
	$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)) {
			$action = "list_product";
		}
	}
$lifetime = 60*60*24;
$path = '/';
session_set_cookie_params($lifetime,$path);
session_start();
// $_SESSION['list_product']=$product;

	switch ($action) {
		case 'list_product':
			$list=new ProductDB;
			$list_products=$list->get_all_product($_SESSION['list_product']);
			include('view/list_product.php');
			break;
		case 'add_new':
			include('view/add_product.php');
			break;
		case 'save_product':
			$code=filter_input(INPUT_POST,'code');	
			$name=filter_input(INPUT_POST,'name');	
			$price=filter_input(INPUT_POST,'price');	
			$image=filter_input(INPUT_POST,'image');	
			$p=array('code'=>$code,'name'=>$name,'price'=>$price,'image'=>$image);
			$_SESSION['list_product'][]=$p;
			$list=new ProductDB;
			$list_products=$list->get_all_product($_SESSION['list_product']);
			include('view/list_product.php');
			break;
		case 'delete':
			$id=filter_input(INPUT_GET,'id');
			unset($_SESSION['list_product'][$id]);
			$_SESSION['list_product']=array_values($_SESSION['list_product']);
			$list=new ProductDB();
			$list_products=$list->get_all_product($_SESSION['list_product']);
			include('view/list_product.php');
			break;

		default:
			# code...
			break;
	}


 ?>