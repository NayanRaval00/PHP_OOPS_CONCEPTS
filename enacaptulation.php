<?php
    echo " ENACAPTULATION PHP<br>";
    //variable protect private example..

//     class class1
//     {
//         protected $num1;
//         function __construct()
//         {
//             $this->num1 = 10;
//         }
//         function getVal()
//         {
//             $name = "Nayan Raval";
//           //  echo $name;
//             return $this->num1;
//         }
//     }
//     class class2 extends class1 
//     {
//         function fun1()
//         {
            
//             $this->no = 50;
            
//         }
//     }
    
// $obj =new class1;
// // $num + +;
// echo $obj->getVal();
    //Function private protected example
    
    class class1  
    {
        public function __construct()
        {
            echo "******<br>";
        }
       protected function fun1(){
            echo "first Function<br>";
        }
    }
    class class2 extends class1 
    {
        public function __destruct()
        {
            echo "******";
        }
        
        function fun2(){
            echo "Second Function<br>";
            $this->fun1();
        }
    }
    $obj = new class2();
    echo $obj->fun2();
    // $obj->fun2();
    
?>