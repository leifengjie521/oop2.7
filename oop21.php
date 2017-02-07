<?php
	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装的操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	//抽象一个类
	class Car{
		
		//成员属性
		
		public $name = "帝豪";
		public $age = "30";
		public $color = "黑色";
		
		//成员方法
		
		public function __construct($name,$age,$color){
			
			$this->name = $name;
			$this->age = $age;
			$this->color = $color;
			
		}
		
		public function pao(){
			
			return $this->name."正在跑……";
		}
	}
	
	class Dihao extends Car{
		
		public function pao(){
			
			echo parent::pao();
			
			return "一直跑";
		}
	}
	
	//实例化
	
	$dihao = new Dihao("奔驰",50,"白色");
	echo $dihao -> pao();
	
	// $dihao = new Dihao("奔驰",50,"白色");
	// echo $dihao -> name;