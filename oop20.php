<?php
	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装的操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	//抽象一个类
	class Brid{
		
		//成员属性
		
		public $name = "八哥";
		public $age = "30";
		public $color = "黑色";
		
		//成员方法
		
		public function __construct($name,$age,$color){
			
			$this->name = $name;
			$this->age = $age;
			$this->color = $color;
			
		}
		
		public function fly(){
			
			return $this->name."正在飞……";
		}
	}
	
	class Bage extends Brid{
		
		public function fly(){
			
			echo parent::fly();
			
			return "一直飞";
		}
	}
	
	//实例化
	
	$bage = new Bage("喜鹊",50,"白色");
	echo $bage -> fly();
	
	// $bage = new Bage("喜鹊",50,"白色");
	// echo $bage -> name;