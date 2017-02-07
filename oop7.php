<?php
	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	//抽象一个类
	class Car{
		
		//成员属性
		
		public $name = "宝马";
		public $age = "30";
		public $color = "白色";
		
		//成员方法
		
		public function pao(){
			
			return "正在跑……";
		}
		
	}
	//继承类
	class baoma extends Car{
		
	}
	//继承类
	class benchi extends Car{
		
		
	}
	
	//实例化一个对象
	$baoma = new baoma();
	
	echo $baoma -> name;
	echo $baoma -> pao();
	
	echo "<br/>";
	
	$benchi = new benchi();
	
	echo $benchi -> color;
	echo $benchi -> pao();