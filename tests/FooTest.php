<?php namespace Acme;

function time(){ return 'stub'; }

/*
Testing Types (video 6):-
		- unit testing
		- integration
		- functional
		- acceptance / selenium
*/
class FooTest extends \PHPUnit_Framework_TestCase{

	public function test_it_works(){
		\Mockery::close();

		new Foo;
		// new Baz;
	}
	public function test_gets_the_time(){
		$res = (new Foo)->time();
		var_dump($res);
		$this->assertEquals('stub',$res);
		$this->assertCount(2,['foo','bar']);
	}

	public function test_mockery(){
		$mock = \Mockery::mock('Foo');
		$mock->shouldReceive('run')->once()->andReturn('mocked');

		var_dump($mock->run());
	}


}
