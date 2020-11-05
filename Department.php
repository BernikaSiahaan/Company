<?php

/**
* 
*/
class Department extends Company
{
	private $name;



	public getDepartmentName(){

return $this->$name;
	}

	public setDepartmentName($name){
$this->name = $name;
	}

}

?>