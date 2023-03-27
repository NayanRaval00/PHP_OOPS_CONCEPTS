<?php
    include 'main/databse.php';
    //fetch all th data
    $obj = new query();
   //  $condition_arr=array('sno'=>'5');
    $result=$obj->getData('user','*');

    //delete
    if (isset($_GET['type'])&& $_GET['type']=='delete') 
    {
      //  echo "123;";
      $id = $obj->get_safe_str($_GET['sno']);
      $condition_arr = array('sno'=>$id);
      $obj->deleteData('user',$condition_arr);
      
    }
    
   //  echo'<pre>';
   //  print_r($result);
?>
<!doctype html>
<html lang="en-US">
   <head>
   <title>OOP CRUD</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>User Listing - PHP Object Oriented Programming CRUD</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
	  <style>
		.container{margin-top:100px;}
        body{ background-color: aquamarine;}   
	  </style>
   </head>
   <body>
      <div class="container">
         <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse User</strong> <a href="manage_user.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Users</a></div>
         </div>
         <hr>
         <div>
            <table class="table table-striped table-bordered">
               <thead>
                  <tr class="bg-primary text-white">
                     <th>Sr#</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Mobile</th>
                     <th class="text-center">Action</th>
                  </tr>
               </thead>
               <tbody>
               <?php
                  if (isset($result['0'])) {
                     $i=1;
                     foreach ($result as $list ) {
                        
                     
               ?>
                  <tr>
                     <td><?php echo $i; ?></td>
                     <td><?php echo $list['username']; ?></td>
                     <td><?php echo $list['email']; ?></td>
                     <td><?php echo $list['mobile']; ?></td>
                     <td align="center">
                        <a href="manage_user.php?update_sno=<?php echo $list['sno']; ?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
                        <a href="?type=delete&sno=<?php echo $list['sno'];?>" class="text-danger"><i class="fa fa-fw fa-trash"></i> Delete</a>
                     </td>
                  </tr>
                  <tr>
                  <?php
                     $i++;
                     }
                  }else {
                     
                  ?>
                     <td colspan="6" align="center">No Records Found!</td>
                  </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
         <!--/.col-sm-12-->
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
   </body>
</html>