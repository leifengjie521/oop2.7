<?php
	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	//抽象一个类
	
	class Brid{
		
		//成员属性
		
		public $name = "燕子";
		public $age = "20";
		public $color = "黑色";
		
		//成员方法
		public function fly(){
			
			return "在天空翱翔……";
			
		}
	}
	
	//继承类
	class yanzi extends Brid{
		
	}
	//继承类
	class gezi extends Brid{
		
	}
	
	//实例化
	
	$yanzi = new yanzi();
	echo $yanzi -> name;
	echo $yanzi -> fly();
	
	echo "<br/>";
	
	$gezi = new gezi();
	echo $gezi -> name;
	echo $gezi -> fly()	;