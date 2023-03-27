<?php
	echo("POLYMOPHISAM IN PHP<br>");
	//SAME NAME BUT OUTPUT WILL BE DIFFRENT MEANS POLYMORPHISAM.
	abstract class class1{
		abstract function function1();
	}
	class class2 extends class1{
		function function1(){
			echo("how are you nayan");
		}
	}
	class class3 extends class1{
		function function1(){
			echo("okay nayan thank you");
		}
	}
	$obj = new class2;
	$obj->function1();
	//in the cricket ground ampire says play then batsmen can perform one operation bowler can perform diffrent functionality same function but diffrent output.

	//Interface

	interface ampire{
		function fun1();
	}
	class  bats_man implements ampire{
		function fun1(){
			echo("<br>bats man");
		}
	}
	class bowler implements ampire{
		function fun1(){
			echo("Bowler plays");
		}
	}
	class filder implements ampire{
		function fun1(){
			echo("filder plays");
		}
	}
	$obj = new bats_man;
	$obj->fun1();
?>