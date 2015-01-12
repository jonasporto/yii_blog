<?php

class PostTest extends CDbTestCase
{

	public $fixtures = array('posts'=>'Post'); 
	
    public function setUp()
{
}

	public function testCreate()
	{	

   	print_r($this->posts);
	}
}