<?php
	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装的操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	 
	//抽象一个车类
	class Car{
		
		//成员属性
		public $name = "布加迪";
		public $age = "30";
		public $color = "银白色";
		
		//成员方法
		
		public function pao(){
			
			return "正在跑……";
		}
		
	}
	
	//实例化类
	
	$obj = new Car();
	
	//调用成员属性
	
	echo $obj -> color;
	echo $obj -> name;
	
	//调用成员方法
	
	echo $obj -> pao();
	