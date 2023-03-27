<?php
   include 'main/databse.php';
   $username = '';
   $email = '';
   $mobile = '';
   $sno = '';
   $obj = new query();
   // if (isset($_POST['submit'])) {
   //    # code...
   //   $username =  $obj->get_safe_str($_POST['name']);
   //   $email = $obj->get_safe_str($_POST['email']);
   //   $mobile = $obj->get_safe_str($_POST['mobile']);
   //   //insert data
   //   $condition_arr = array('username'=>$username,'email'=>$email,'mobile'=>$mobile);
   
   //   echo "<script>window.location.href='index.php'</script>";
   // }
   //update Data
   if (isset($_GET['update_sno']) && $_GET['update_sno']!='') {
      $sno = $obj->get_safe_str($_GET['update_sno']);     
      $condition_arr = array('sno'=>$sno);
      $result = $obj->getData('user','*',$condition_arr);

         foreach ($result as $list) {
            $username = $list['username'];
            $email = $list['email'];
            $mobile = $list['mobile'];
         }
      }  
      if (isset($_POST['submit'])) 
      {   
         $username =  $obj->get_safe_str($_POST['name']);
         $email = $obj->get_safe_str($_POST['email']);
         $mobile = $obj->get_safe_str($_POST['mobile']);
          $condition_arr = array('username'=>$username,'email'=>$email,'mobile'=>$mobile);
          if ($sno=='') 
          {
            $result = $obj->insertData('user',$condition_arr);
            $obj->alert_msg("Insert Successfully");
            echo "<script>window.location.href='index.php'</script>";
            
         }else 
         {
            $result = $obj->updateData('user',$condition_arr,'sno',$sno);
            $obj->alert_msg("Update Successfully");
            echo "<script>window.location.href='index.php'</script>";
          }
       }  


   // echo "<pre>";
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manage User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <style>
    .container {
        margin-top: 100px;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add User</strong> <a
                    href="index.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse
                    Users</a></div>
            <div class="card-body">
                <div class="col-sm-6">
                    <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                    <form method="post">
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name"
                                required value="<?php echo $username; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email"
                                required value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <label>Mobile <span class="text-danger">*</span></label>
                            <input type="tel" class="tel form-control" name="mobile" id="mobile"
                                placeholder="Enter mobile" required value="<?php echo $mobile;?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i
                                    class="fa fa-fw fa-plus-circle"></i> Manage User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
</body>

</html>