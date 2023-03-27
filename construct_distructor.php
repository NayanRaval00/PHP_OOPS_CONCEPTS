<?php
    //echo "<h1>Constructor Destructor ";
    class class1
    {
        //first exicute constructor or last destructor..
       public $bahar = '<h2>Nayan Raval</h2>';
        function __construct($y)
        {
            $this->x = $y;
        }
        function fun1()
        {
            echo $this->x;
        }
        function fun2()
        {
            echo $this->bahar;
            echo "second";
        }
        function __destruct()
        {
            echo "<br>End"; 
        }
    }
    $obj1 = new class1(10);
    //to exicute function first make a class object and call the function directly..
    $obj1->fun2();
?>