<?php
	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 封装操作
	 *
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	//抽象一个类
	
	class Brid{
		
		//成员属性
		
		public $name = "白鸽";
		public $age = "10";
		public $sex = "雄";
		
		//成员方法
		
		public function eat(){
			
			return "正在盘窝……";
		}
	}
	
	//继承类
	
	class Baige extends Brid{
		
		//成员属性
		
		public $home = "房檐下";
		
		//成员方法
		
		public function fly(){
			
			return "喂小鸟";
		}
	}
	
	//继承类
	
	class Huabaige extends Baige{
		
		
	}
	
	//实例化
	
	$huabaige = new huabaige();
	
	echo $huabaige -> name;
	echo $huabaige -> home;
	echo $huabaige -> fly();