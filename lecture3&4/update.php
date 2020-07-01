<?php 
include "data.php";
?>

<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    
<?php
        If(isset($_GET['update'])){
            $user_id = $_GET['update'];
            $sql = "SELECT * FROM user WHERE id = '$user_id'";
            $the_user = mysqli_query($db,$sql);
            
            while ($row = mysqli_fetch_assoc($the_user)) {
                $id = $row['id'];
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $users = $row['username'];
                $phone = $row['phone'];
                $mail = $row['mail'];
                $join = $row['join_date'];
                
                ?>
                <form method="POST" action="">
    

                                <div class="container register">
                                    <div class="row">
                                        <div class="col-md-3 register-left">
                                            <img src="https://www.cig.co.com/wp-content/uploads/2016/01/update-icon.png" alt=""/>
                                            <h3>Update your info</h3>
                                            
                                            
                                        </div>
                                        <div class="col-md-9 register-right">
                                            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">From</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    
                                                    <div class="row register-form">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <input type="text" name="fname" class="form-control" placeholder="First Name *" required = "required" value = "<?php echo $fname; ?>"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" name="lname" class="form-control" placeholder="Last Name *" required = "required" value = "<?php echo $lname; ?>"/>
                                                            </div>
                                                    
                                                        
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label>User Name</label>
                                                                <input type="text" name="user" class="form-control" placeholder="User Name *" required = "required" value = "<?php echo $users; ?>"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email address</label>
                                                                <input type="email" name = "mail" class="form-control" placeholder="Your Email *" value = "<?php echo $mail; ?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Phone number</label>
                                                                <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value = "<?php echo $phone; ?>" />
                                                            </div>
                                                           
                                                            <input type="hidden" name="userinfo" value="<?php echo $id; ?>">
                                                            <input type="submit" name="update" class="btnRegister"  value="Update"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                    
                                 </div>
                </form>
       
<?php    }
        }
?>
    
<?php 
 if(isset($_POST['update'])){

    $userid = $_POST['userinfo'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $users = $_POST['user'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
            

    $sql = "UPDATE user SET firstname = '$fname', lastname='$lname', username='$users', phone = '$phone', mail='$mail' WHERE id = '$userid' ";

    $updateinfo = mysqli_query($db, $sql);
 if(isset( $updateinfo )){
        header("Location: userlist.php");
    }else{
        die("error" . mysqli_error($db) );
    }
 }
          
?>

    

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
		    $('#example').DataTable();
		} );
    </script>
 <?php
  ob_end_flush();
 ?>
</body>
</html>