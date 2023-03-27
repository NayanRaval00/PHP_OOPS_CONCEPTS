<?php
	echo("STATIC VARIABLE IN PHP <br>");

	/*
		1.STATIC VARIABLE NOT ACCESIBLE DIRECTLY, IN CLASS OBJECT NOT NECESSARY TO MAKE AN OBJECT.
		2.TO USE STATIC VARIABLE :: SIGN 
		3. EX.. echo class1:: $num1; (NOT NEED TO MKAE A BOJECT).
		4. SAME AS A FUNCTION.
		5.whenewer in static function use in this function variable can must be static.
		6.not call the constructor
	*/
	class class1{
		static public $num1 = "static variable = 100";
		public $number = 200;
		static function function1()
		{
			echo self::$num1;
			//not use public functions
			echo($number);
		}
	}
	echo(class1 :: function1());
?>