<?php

	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	//抽象一个类
	
	class Brid{
		
		//成员属性
		
		private $name = "画眉";
		private $age = "20";
		private $sex = "母";
		
		//成员方法
		
		public function eat(){
			
			return "正在吃……";
		}
		
		
		//访问私有的成员属性
		
		/* public function getName(){
			
			return $this->name;
		} */
		//修改私有成员属性的值
		
	   /*  public function setName($name){
        
         	$this->name = $name;
        
        } */
		
		//取得私有成员属性
		public function __get($name){
			
			//添加限制访问权限
			if($name == "name"){
				
				return $this->$name;
			}
			
		}
		//修改私有成员属性
		public function __set($name,$value){
			//添加限制访问权限
			if($name == "name"){
				
				$this->$name = $value;
			}
			
		}
		//判断一个属性是否存在
		public function __isset($k){
			
			return isset($this->$k);
			
		}
		
		//注销成员属性
		
		public function __unset($k){
			unset($this->$k);
		}
	}	

	$huamei = new Brid();
	// echo $huamei -> sex;
	// echo $huamei -> name; 无法输出 因为private 是受保护的
	// echo $huamei -> age;
	// echo $huamei -> eat();
	// var_dump($huamei);
	// $huamei -> setName("点颏");

	// echo $huamei -> getName();

	$huamei -> age = 50;

	echo $huamei -> age;

	echo $huamei -> name;

	//$huamei -> name = "黄雀";

	// unset(huamei);

	// echo $huamei -> name;

	// var_dump(isset($huamei -> name));

	//echo $huamei -> name;