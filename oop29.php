<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 类的相关的操作
 * @author leifengjie <1094853740@qq.com>
 */
abstract class Zoo{

	abstract function fly();
	abstract function pa();
}

interface Pig{

	public function chi();

}

interface Dog{

	public function shui();

}

class Bird extends Zoo implements Pig,Dog{

	//重写两个方法
	public function fly(){


	}
	public function pa(){


	}
	public function chi(){

	}
	public function shui(){

	}
	
}