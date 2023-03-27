<?php
    echo "<h3 style='text-align:center;'>Interface in php</h3>";
    /*
                **NOTES**
    1.abstraction or interface are both similar 50%
    2.interface supports multiple inheritance [php directly not support multiple inheritance]
    3.interface alternate for multiple inheritance
    4.interface can only contains abstraction function 
    5.in the iterface we can not define any variables
    6.no constroctor in interface, all the function must be public.
    */
    // interface class1 {
    // // }
    // class class3 implements class1{}
    
    interface class1{
        public function test1();
    }
    interface class2{
        public function test2();
    }
    class class3 implements class1,class2
    {
        public function test(){
            echo "hello this is class 3";
        }
        public function test1()
        {
            echo "<br>hello this is test 1 class";
        }
        public function test2()
        {
            echo "<br>namste this is class2 ";
        }

    }
    $obj = new class3();
    $obj->test1();
    $obj->test2();
    /*
        if you want to make a food  then 
    
    */
?>