<?php
	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装的操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	
	//抽象一个鸟类
	class Brid{
		
		//成员属性
		
		public $name = "麻雀";
		public $age = "20";
		public $sex = "雌";
		
		//成员方法
		
		public function eat(){
			
			return "正在吃……";
		}
		
	}
	//实例化一个类
	$obj = new Brid();
	
	//调用成员属性
	
	echo $obj -> sex;
	echo $obj -> name;
	echo $obj -> age;
	
	
	//调用成员方法
	
	echo $obj -> eat();