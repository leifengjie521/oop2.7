<?php

	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	
	class Car{
		//成员属性
		
		protected $name = "baoma";
		public $age = "20";
		public $color = "白色";
		
		//成员方法
		
		public function pao(){
			
			return "正在飞……";
		}
		
	}
	
	//继承类
	class baoma extends Car{
		//成员方法
		public function fan($name){
			$this -> name = $name;

			return $this->name."正在翻车……";
		}
		
	}
	//实例化一个对象
	
	$baoma = new Baoma();
	
	echo $baoma -> fan("车翻到沟里了");