<?php 
	$user = array(
					array('email' => 'levan0@gmail.com','password' => '12345','phone' => '908712346', 'avatar' => 'img01,jpg'),
					array('email' => 'levan1@gmail.com','password' => '12345','phone' => '908712346', 'avatar' => 'img01,jpg'),
					array('email' => 'levan2@gmail.com','password' => '12345','phone' => '908712346', 'avatar' => 'img01,jpg'),
					array('email' => 'levan3@gmail.com','password' => '12345','phone' => '908712346', 'avatar' => 'img01,jpg'),
					array('email' => 'levan4@gmail.com','password' => '12345','phone' => '908712346', 'avatar' => 'img01,jpg'),
					array('email' => 'levan5@gmail.com','password' => '12345','phone' => '908712346', 'avatar' => 'img01,jpg')
				);




	class user{
		private $email, $password, $phone, $avatar;
		public function __construct($email,$password,$phone,$avatar)	//pai tao ham KHOI TAO
		{
			$this->email = $email;
			$this->password = $password;
			$this->phone = $phone;
			$this->avatar = $avatar;
		}
		// sau do ta tao GET va SET
		public function get_email(){
			return $this->email;
		}
		public function get_password(){
			return $this->password;
		}
		public function get_phone(){
			return $this->phone;
		}
		public function get_avatar(){
			return $this->avatar;
		}

		public function set_email(){
			$this->email = $value;
		}
		public function set_password(){
			$this->password = $value;
		}
		public function set_phone(){
			$this->phone = $value;
		}
		public function set_avatar(){
			$this->avatar = $value;
		}
	}

	// sau khi tao class user thi ta tao class userDB goi mang cac gia tri cua USER
	class UserDB{
		public function get_all_user(){
			global $user;
			$result = array();
			foreach ($user as $key => $value) {
				$result[] = new user($value['email'],$value['password'],$value['phone'],$value['avatar']);
			}
			return $result;
		}

		// tao HAM kiem tra nhap email va password dung hay ko??
		public function check_user($email,$password){
			global $user;
			$result = false;
			foreach ($user as $key => $value) {
				if ($value['email'] == $email && $value['password'] == $password) {
					$result = true;
					break;
				}
			}
			return $result;
		}



	}



 ?>	