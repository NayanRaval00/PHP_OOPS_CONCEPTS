<?php
	echo("TRAITS IN PHP<br>");

	/*
		1.NOT ACCESIBLE PARENT CLASS PROPERTY.
		2.IN THE INHERITACE YOU CAN USE PARENT CLASS PROPERTY.
		3.WE CAN CREATE A SAME FUNCTON IN CLASS AND TRAITS CLASS PRIORITY IS BIGER THRN TRAITS.
		4.IF YOU WANT TO MAKE A SAME FUNCTION IN TWO TRAITS IT'S SHOWS AN ERROR.

	*/
		Trait class1{
			function fun1(){
				echo("FUN 1");
			}
			function fun2(){
				echo("FUN 2");
			}
		}
		class c2{
			use class1;
			function fun1()
			{
				echo("FUN 3");
			}
		}
		$obj = new c2;
		echo $obj->fun1();
		
		// new 

		Trait class2{
			function fun1(){
				echo("hello ");
			}

		}
		trait class3{
			function fun2(){
				echo("namste");
			}
		}
		class class4 {
			use class2,class3;
			function fun2(){
				echo("pranam ");
			}
		}
		$OBJ = NEW class4;
		$OBJ->fun2();
		
		//

		trait t1{
			function fun1(){
				echo("hii");
			}
		}
		trait t2{
			function fun1(){
				echo("namste");
			}
		}
		class class6 {
			use t1,t2{
				
			// t1::fun1 instedof t2;
			// t1::fun1 as fun2;
			}
		}
		// $obje = new class6;
		// $obje->fun1();
  ?>