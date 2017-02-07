<?php

	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	
	//抽象一个类
	class Car{
		
		//成员属性
		
		public $name = "奔驰";
		public $age = "40";
		public $color = "黑色";
		
		//成员方法
		
		public function pao(){
			
			return "正在跑……";
		}
		
	}
	
	//继承类
	 class Benchi extends Car{
		 
		 //成员属性
		 
		public $homes = "4S店";
		 
		 //成员方法
		
		public function bao(){
			
			return "保养车";
		}
		 
	 }
	 
	class Baibenchi extends Benchi{
		
	}
	
	//实例化
	$baibenchi = new baibenchi();
	
	echo $baibenchi -> name;
	echo $baibenchi -> homes;
	echo $baibenchi -> bao();