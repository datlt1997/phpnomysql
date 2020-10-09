<?php 
		$product=array(
					array('code'=>'123','name'=>'TV samsung','price'=>123,'image'=>'p01.jpg'),
					array('code'=>'124','name'=>'TV sony','price'=>112,'image'=>'p02.jpg'),
					array('code'=>'125','name'=>'TV Toshiba','price'=>193,'image'=>'p03.jpg'),
					array('code'=>'126','name'=>'TV LG','price'=>183,'image'=>'p04.jpg'),
					array('code'=>'127','name'=>'TV panasonic','price'=>153,'image'=>'p05.jpg')
				);
	class product{
		private $code, $name, $price, $image;
		public function __construct($code, $name, $price, $image){
			$this->code=$code;
			$this->name=$name;
			$this->price=$price;
			$this->image=$image;
		}
		public function get_code(){
			return $this->code;
		}
		public function get_name(){
			return $this->name;
		}
		public function get_price(){
			return $this->price;
		}
		public function get_image(){
			return $this->image;
		}
		public function set_code($value){
			$this->code=$value;
		}
		public function set_name($value){
			$this->name=$value;
		}
		public function set_price($value){
			$this->price=$value;
		}
		public function set_image($value){
			$this->image=$value;
		}
	}	

	class ProductDB{
		public function get_all_product($products){
			$result =array();
			foreach ($products as $key => $value) {
				$result[] = new product($value['code'],$value['name'],$value['price'],$value['image']);
			}
			return $result;
		}
	}
 ?>