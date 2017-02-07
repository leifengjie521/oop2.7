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
		
		public $name = "喜鹊";
		public $age = "10";
		public $sex = "雄";
		
		//成员方法
		
		public function eat(){
			
			return "正在盘窝……";
		}
	}
	
	//继承类
	
	class Xique extends Brid{
		
		//成员属性
		
		public $home = "房檐下";
		
		//成员方法
		
		public function fly(){
			
			return "喂小鸟";
		}
	}
	
	//继承类
	
	class Huaxique extends Xique{
		
		
	}
	
	//实例化
	
	$huaxique = new huaxique();
	
	echo $huaxique -> name;
	echo $huaxique -> home;
	echo $huaxique -> fly();