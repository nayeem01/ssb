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
  <title>Registration</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="stylesheet.css">
  
  <script>
      function validate(){

        var a = document.getElementById("pass").value;
        var b = document.getElementById("cpass").value;
        if (a!=b) {
        alert("Passwords do no match");
        return false;
        }
        }
    
 </script>
</head>
<body>
    <form method="POST" action="" onSubmit="return validate();">
    

        <div class="container register">
                        <div class="row">
                            <div class="col-md-3 register-left">
                                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                                <h3>Welcome</h3>
                                <p>You are 30 seconds away from entering!</p>
                                <a href="login.php" class="txt3 btnRegister"> Login </a>
                            </div>
                            <div class="col-md-9 register-right">
                                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Registration </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">From</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3 class="register-heading">Register yourself</h3>
                                        <div class="row register-form">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="fname" class="form-control" placeholder="First Name *" required = "required" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="lname" class="form-control" placeholder="Last Name *" required = "required"/>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password *" required = "required"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="cpass" id="cpass" class="form-control"  placeholder="Confirm Password *" required = "required"/>
                                                </div>
                                              
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="user" class="form-control" placeholder="User Name *" required = "required"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name = "mail" class="form-control" placeholder="Your Email *" value="" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                                </div>
                                                <div class="form-group">
                                                    <div class="maxl">
                                                        <label class="radio inline"> 
                                                            <input type="radio" name="gender" value="male" checked>
                                                            <span> Male </span> 
                                                        </label>
                                                        <label class="radio inline"> 
                                                            <input type="radio" name="gender" value="female">
                                                            <span>Female </span> 
                                                        </label>
                                                    </div>
                                                </div>

                                                <input type="submit" name="register" class="btnRegister"  value="Register"/>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
        
        </div>
        
    </form>
   
   
    <?php
        if (isset($_POST['register'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $users = $_POST['user'];
            $phone = $_POST['phone'];
            $mail = $_POST['mail'];
            $gender = $_POST['gender'];
            $pass = $_POST['pass'];
            $cpass = $_POST['cpass'];
                $query = "INSERT INTO user (firstname, lastname, username, mail, phone, password, join_date) VALUES ('$fname', '$lname',
                '$users','$mail', '$phone', SHA1('$pass'), now() )";
                $registeruser = mysqli_query($db, $query);


                if(isset( $registeruser )){
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