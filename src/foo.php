<?php namespace Acme;

class Foo{

	public function __construct(){

	}
	public function time(){
		var_dump(time());
		return time();
	}

	public function run(){
		return "running";
	}


}
