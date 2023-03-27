<?php
    //inheritance means one class access proerty/value from another class
    echo "<h3 style='color:red; text-align:center;'><u>*** INHERITANCE PHP ***</u></h3><br>";
    class class1  {
        function __construct(){
            $this->num = 1;
            echo "Const 1 <br>";
        }
        function fun0()
        {
            echo "<h2 style='color:green';>Fun 1 exicute.. thay che</h2>";
        }
        function temp($a)
        {
            $msg = "<h2 style='color:silver;'>Temporory Message!</h2>";
            echo $msg;
            $c = $a + 2;
            echo $c;
        }
    }
    class class2 extends class1 
    {
        function __construct()
        {
            parent:: __construct();
            echo "Const 2<br>";
            $this->num = 2;
        }
        function fun1()
        {
            
            echo "Fun 2 exicute thay che...";
        }
    }
    $obj = new class2();
    echo $obj->fun0(); 
    echo $obj->fun1();
    echo $obj->temp(-5);
    
?>