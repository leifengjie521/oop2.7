<?php
	
	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装操作
	 * @author leifengjie <1094853740@qq.com>
	 */

	//抽象一个类
	
	class Car{
		
		//成员属性
		protected $name = "乐驰";  // 本页面运行或报错 因为protected 修饰的成员属性和方法 可以被另一个类所继承但是不能被访问
		public $age = "20";
		public $color = "桔色";
		
		//成员方法
		
		public function pao(){
			
			return "正在飞奔……";
		}
		
		
	}
	//继承类
	class lechi extends Car{
		
	}
	//继承类
	class benben extends Car{
		
	}
	//实例化对象
	// $lechi = new lechi();
	
	// echo $lechi -> name;
	// echo $lechi -> pao();
	
	echo "<br/>";
	
	$benben = new benben();
	
	echo $benben -> name;
	echo $benben -> pao();