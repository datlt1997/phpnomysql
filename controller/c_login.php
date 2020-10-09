<?php 
	include_once('model\m_user.php');
	$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)) {
			$action = "form_login";
		}
	}
	switch ($action) {
		case 'form_login':
			$list = new UserDB();
			$list_user = $list->get_all_user();
			if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {//neu ton tai email va password
				$email = $_COOKIE['email'];
				$password = $_COOKIE['password'];
				if ($list->check_user($email,$password)) {
					include('view/list_user.php');
				}else {
					include('view/login.php');
				}
			}else {
				include('view/login.php');
			}
			break;
		case 'check_login':
			$email = filter_input(INPUT_POST, 'email');
			$password = filter_input(INPUT_POST, 'password');
			//muon goi ham thi ta pai goi cai CLASS chua ham do trc
			$list = new UserDB();
			$list_user = $list->get_all_user();
			if($list->check_user($email,$password)){
				$remember_me = filter_input(INPUT_POST, 'rememberme');
				if ($remember_me == 'remember_me') {
					$name = 'email';
					$value = $email;
					$expire = time()+60*60*5;
					$path = '/';
					setcookie($name,$value,$expire,$path);

					$name = 'password';
					$value = $password;
					$expire = time()+60*60*5;
					$path = '/';
					setcookie($name,$value,$expire,$path);
				}
				include('view/list_user.php');
			}else {
				$error_message = 'Email or password invalid';
				include('view/login.php');
			}
			break;
		case 'logout':
			$name = 'email';
			$value = '';
			$expire = time()+60*60*5;
			$path = '/';
			setcookie($name,$value,$expire,$path);

			$name = 'password';
			$value = '';
			$expire = time()+60*60*5;
			$path = '/';
			setcookie($name,$value,$expire,$path);
			include('view/login.php');
			break;
		default:
			// code...
			break;
	}
 ?>