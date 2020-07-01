<?php include('inc/header.php'); ?>
<?php include('inc/topbar.php'); ?>
<?php include('inc/menu.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Manage user</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
           </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

<?php 
    $do = isset($_GET['do']) ? $_GET['do'] : 'manage';

    if ($do == 'manage') { ?>

        <!-- Body content start -->
        <section class="content">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-12">
                         <!-- card strat -->
                        
                         <div class="card card-primary card-outline">
                         <div class="card-header">
                            <h3 class="card-title">Manage users</h3>
                         </div>
                             <div class="card-body">
                                 
                             <table class="table table-bordered table-striped table-hover justify-content-center">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">#SI.</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Adress</th>
                                    <th scope="col">User Role</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Join date</th>
                                    <th scope="col">Action</th>
                                   </tr>
                                </thead>
                                <tbody>

                                <?php 
                                    $sql ="SELECT * FROM users";
                                    $user = mysqli_query($db, $sql);
                                    $i=0;
                                    while( $row = mysqli_fetch_assoc($user) ){
                                        $id = $row['id'];
                                        $name = $row['fullname'];
                                        $email = $row['email'];
                                        $username = $row['username'];
                                        $password = $row['password'];
                                        $address = $row['address'];
                                        $phone = $row['phone'];
                                        $status = $row['status'];
                                        $image = $row['image'];
                                        $role= $row['role'];
                                        $date = $row['join_date'];
                                        $i++;
                                    ?>
                                    <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td>
                                        <?php 
                                            if(!empty($image)){?>
                                                <img src="img/users/<?php echo $image; ?>" alt="" width="35">
                                            <?php }else{ ?>
                                                <img src="img/users/default.png" alt="" width="35">
                                            <?php }
                                        
                                        ?>

                                    </td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $username; ?></td>
                                    <td><?php echo $phone; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td><?php 
                                     if ($role==1) {
                                    ?>      <span class="badge badge-primary badge-success">Admin</span>
                                    <?php  }else{ ?>
                                            <span class="badge badge-danger">Editor</span>
                                    <?php }
                                                                        
                                    ?></td>
                                    <td><?php 
                                     if ($status==0) {
                                        ?>      <span class="badge badge-danger">In-active</span>
                                        <?php  }else{ ?>
                                                <span class="badge badge-success">Active</span>
                                        <?php }                                    
                                    
                                    ?></td>
                                    <td><?php echo $date; ?></td>
                                    <td>
                                    <div class="action-bar">
                                        <ul class="justify-content-center">
                                           <li>
                                            <a href=""><i class="fa fa-edit"></i></a>
                                            </li>
                                            <li>
                                            <a href=""><i class="fa fa-trash"></i></a>
                                            </li>
                                         </ul>
                                    </div>
                                    </td>
                                    </tr>

                                </tbody>
                                </table>

                             </div>
                          </div> 
                     <!-- card end -->
                     </div>
                </div>
             </div>
        </section>
    <!-- Body content end -->


  <?php  }
  
    }elseif ($do == 'add') { ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   
                    <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Add User</h3>
                    </div>
                        <div class="card-body">
                            
                        </div>
                     </div> 
                      
                </div>
           </div>
        </div>
   </section>



    <?php }elseif($do == 'insert'){

    }elseif ($do == 'edit') {
        # code...el
    }elseif ($do == 'update') {
        # code...
    }elseif ($do == 'delete') {
        # code...
    }
?>


</div>
<?php include('inc/footer.php'); ?>


   <!-- <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   
                    <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Manage users</h3>
                    </div>
                        <div class="card-body">
                            
                        </div>
                     </div> 
                      
                </div>
           </div>
        </div>
   </section> -->
 