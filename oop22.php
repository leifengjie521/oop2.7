<?php
	
	header("Content-Type:text/html;charset=utf-8");

	/**
	 * 抽象类操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	abstract class Brid{
		
		//成员属性
		public $name = "点颏";
		
		//成员方法
		public function fly(){
			
			return "正在飞…………";
		}
		
		//抽象方法 它是没有方法体的，必须在子类中重写这个方法
		abstract function eat();
	}
	class Dianke extends Brid{
		
		//在子类中必须进行重写
		public function eat(){
			
			
		}
	}
	
	//实例化
	
	$dianke = new Dianke();
	
	echo $dianke -> name;