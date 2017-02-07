<?php

	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 接口操作
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	interface Brid{
		
		//成员属性
		
		const NAME = "百灵";
		
		//定义一个方法不用写方法体
		
		public function fly();
	} 
	interface Zoo{
		
		public function pa();
	}
	class Bailing implements Brid,Zoo{
		//子类中重写借口中父类方法
		
		public function fly($name){
			
			self::NAME = $name;
			return self::NAME."正在飞……";
			
		}
	}
	public function chi(){
		
		return "正在吃……";
	}
	//实例化
	
	$bailing = new Bailing();
	
	echo bailing -> fly("画眉鸟");