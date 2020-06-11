<?php 
include "data.php";
?>

<?php
ob_start();
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>User List</title>
    <style type = "text/css">
        section{ 
            padding: 50px 100px;
        }
        th {
        background-color: #00c6ff;
        color: white;
        }
    </style>
  </head>
  <body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>All member list</h3>
                    <table class="table table-bordered table-stripped">
                        <thead class >
                            <tr>
                            <th scope="col">#SI</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Phnoe Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Join date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
<?php 
    $sql = "SELECT * FROM user"; 
    $alluser  = mysqli_query($db, $sql);
    $i=0;
    while ($row = mysqli_fetch_assoc($alluser)) {
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $users = $row['username'];
        $phone = $row['phone'];
        $mail = $row['mail'];
        $join = $row['join_date'];
        $i++;
?>

                        <tr>
                        <th scope="row"><?php  echo $i; ?></th>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $lname; ?></td>
                        <td><?php echo $users; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $mail; ?></td>
                        <td><?php echo $join; ?></td>
                        <td>
                            <div class="btn-group">
                            <a href="update.php?update=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Update</a>
                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUser<?php echo $row['id']; ?>">Delete</a>
                            </div>
                        </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteUser<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you ? </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="btn-group">
                                <a href="userlist.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Yes</a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        </div>

<?php }
?>

                           
                        
                        </tbody>
                        </table>
<?php
    if(isset($_GET['delete'])){
        $delid = $_GET['delete'];

        $sql = "DELETE FROM user WHERE id = '$delid' ";
        $confirm = mysqli_query($db,$sql);

        if(isset($confirm)){
            header("Location: userlist.php");
        }else{
            die("error" . mysqli_error($db) );
        }
    }
?>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
</html>