<?php
	// echo("this is abestraction");
/**
 * abstarct means incomplete 
 in this abstrection perent class abstrect function must create with abstract child class
 */
abstract class bank
{					
	abstract function id_proff();
}

class baroda extends bank
{
	function test()
	{
		echo("hello this is baroda bank");
	}

	function id_proff()
	{
		echo("id proff is mendatory!");
	}
}
// new bank 
class sbi extends bank
{
	function test()
	{
		echo("this is sbi india bank!");
	}
	function id_proff(){
		echo("<h4>To open sbi bank account you must have a one id proff.. thank you</h4>");
	}
}
$obj = new baroda;
echo $obj->test();
echo("<br>");
echo $obj->id_proff();


$obj2 = new sbi;
echo $obj2->id_proff();
echo $obj2->test();
?>