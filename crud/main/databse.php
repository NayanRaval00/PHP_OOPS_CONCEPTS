<?php
    class database  
    {
        private $host;
        private $dbusername;
        private $dbpassword;
        private $dbname;

        protected function connect()
        {
            $this->host='localhost';
            $this->dbusername='root';
            $this->dbpassword='';
            $this->dbname='crud';
            $con = new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
            return $con;
        }
    }
    //fetch all data function
    class query extends database            
    {
        public function getData($table,$field='*',$condition_arr='',$order_by_filed='',$order_by_type='desc',$limit='')
        {
            $sql = "SELECT $field From $table ";
            if ($condition_arr!='') {
                $sql.=' WHERE ';
                $c = count($condition_arr);
                $i = 1;
                foreach($condition_arr as $key => $val) {
                    if ($i==$c) {
                        $sql.= "$key='$val'"; 
                    }else {
                        $sql.="$key='$val' AND ";
                    }
                    $i++;
                }
            }
            if ($order_by_filed!='') {
                $sql.=" ORDER BY $order_by_filed $order_by_type ";
            }
            if ($limit!='') {
                $sql.=" limit $limit ";
            }
            // die($sql);
            $result = $this->connect()->query($sql);
            // print_r($result);
            if ($result->num_rows>0) {
                $arr = array();
                while ($row=$result->fetch_assoc()) {
                    // print_r($row);
                    $arr[] = $row;
                }
                return $arr;
            }else {
                echo "no data found";
            }
        }
    

    //Insert Data Into Databse
   public function insertData($table,$condition_arr='')
        {
            if ($condition_arr!='') {
                foreach($condition_arr as $key => $val) {
                    $filedArr[]=$key;    
                    $valArr[]=$val;    
                }
                $field = implode(",",$filedArr);
                //values
                $values = implode("','",$valArr);
                $values="'".$values."'";
                $sql = "INSERT INTO $table($field) VALUES($values)";
            }
            // die($sql);
            $result = $this->connect()->query($sql);
            // print_r($result);
        }
    public function deleteData($table,$condition_arr){
        if ($condition_arr!='') {
            $sql = "Delete From $table WHERE ";
            $c = count($condition_arr);
            $i = 1;
            foreach ($condition_arr as $key => $val) {
                if ($i==$c) {
                    $sql.="$key='$val'";
                }else {
                    $sql.="$key='$val' AND ";
                }
                $i++;
            }
            // echo $sql;
            $result = $this->connect()->query($sql);
        }
    }

    public function updateData($table,$condition_arr,$where_field,$where_value){
        if ($condition_arr!='') {
            $sql="UPDATE $table SET ";
            $c = count($condition_arr);
            $i = 1;
            foreach ($condition_arr as $key => $val) {
                if ($i==$c) {
                    $sql.="$key='$val'";
                }else {
                    $sql.="$key='$val', ";
                }
                $i++;
            }
            $sql.=" WHERE $where_field='$where_value' ";
            // echo $sql;
            $result = $this->connect()->query($sql);
        }
    }
    public function get_safe_str($str)
    {
        if ($str!='') {
            return mysqli_real_escape_string($this->connect(),$str);
        }
    }
    public function alert_msg($msg){
        if ($msg!='') {
            echo "<script>alert('$msg')</script>";
        }
    }

 }
//  UPDATE `user` SET `username` = 'NAYAN', `email` = 'nayan@gmail.com' WHERE `user`.`sno` = 2;
// UPDATE user set username='NAYAN' AND email='ravalnayan@gmail.com' WHERE sno='2'

?>