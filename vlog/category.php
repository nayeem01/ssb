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
                <h1 class="m-0 text-dark">manage catrgory</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
           </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

   <!-- Body content start -->
   <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- card strat -->
                    <div class="card card-primary card-outline">
                        
                        <div class="card-header">
                        <h3 class="card-title">Add new category</h3>
                        </div> 

                        <div class="card-body">

                                <!-- Form -->

                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="name" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label> Category Description</label>
                                    <textarea name="des" id="" class="form-control" rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="my-input">Category status</label>
                                    <select name="status" id="" class="form-control" >
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="submit"  name="add_cat" class="btn btn-primary">
                                </div>
                            </form>
                                
                        </div>
                     </div> 
                        <!-- card end -->
                </div>

                <div class="col-md-6">
                    <!-- card strat -->
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h3 class="card-title">Manage new category</h3>
                        </div>
                             <div class="card-body">
                             <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">#SI.</th>
                                <th scope="col">category Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <div class="action-bar">
                                    <ul>
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


</div>
<?php include('inc/footer.php'); ?>