<?php
	header("Content-Type:text/html;charset=utf-8");

	/**
	 * 封装的操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	
	//抽象一个类
	class Brid{
		
		//成员属性
		
		public $name = "啄木鸟";
		public $age = "20";
		public $color = "红色";
		
		//成员方法
		
		public function fly(){
			
			return $this->name."正在啄……";
			
		}
	}
	
	//实例化对象
	$obj = new Brid();
	
	$obj -> age = 20;
	
	echo $obj -> fly();
	