<?php
Class magic {
	
	public $name;
	
	function abc(){
		echo 'Hii-----abc';
	}
	function __get($get){
		echo "$get property does not exist!";
	}
	// set property in class  
	function __set($num,$value){
		echo "Set property is $num =>$value";
	}
	
	
	function __toString(){
		return 'This is return from toString';
	}
	function __clone(){
		echo 'Cloned.....';
	}
	function __invoke($test){
		echo 'You can do that man!';
	}
}
$obj = new magic();
$obj(1);
//$obj2= clone $obj;
//echo $obj;//toString is called.
//$obj ->age;
//$obj->num=20902384083;  
?>