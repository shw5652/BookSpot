<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="style.css">
    </head>
    
    <style>

    body{
        background-image:url("data:image/jpeg;base64,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");
        background-repeat: no-repeat;
        background-size: cover;
        
    }


    .login-form-3 .btnSubmit {
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
    border: solid;
    border-color: rgb(55, 145, 161);
}

.login-form-3 h3 {
    text-align: center;
    color: rgb(55, 145, 161);
}

.login-form-1 h3 {
    text-align: center;
    color: rgb(240, 181, 86);
}

.login-form-1 .btnSubmitt{
		font-weight: 600;
    color: #fff;
    background-color: rgb(240, 181, 86);
    border: solid;
    border-color: rgb(112, 80, 27);
}

.btnSubmit{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    cursor: pointer;
}

.btnSubmitt{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    cursor: pointer;
}

.login-form-1 {
		padding: 5%;
    box-shadow: 0 10px 18px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    border: solid;
    border-color: rgb(240, 181, 86);
} 
.login-form-3 {
    padding: 5%;
    box-shadow: 0 10px 18px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    border: solid;
    border-color: rgb(55, 145, 161);
}

.hh{
	width: 1000;
	font-weight: 1000;
	text-align: center;
	text-shadow: black;
	margin-top: 20px;
	color: rgb(167, 138, 181);
	text-decoration: none;
	text-decoration-color: rgb(167, 138, 181);
}
    </style>
    <body >

<?php
 $emailmsg="";
 $pasdmsg="";
 $msg="";

 $ademailmsg="";
 $adpasdmsg="";


 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>
<div class="hh">
	<h1>Book Spot</h1>
</div>


<div class="container login-container">
<div class="row"><h4><?php echo $msg?></h4></div>
            <div class="row">
 
                <div class="col-md-6 login-form-3">
                    <h3>Admin Login</h3>
                    <form action="loginadmin_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:red"><?php echo $ademailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:red"><?php echo $adpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <!-- <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div> -->
                    </form>
                </div>
                <div class="col-md-6 login-form-1">
                    <h3>Student Login</h3>
                    <form action="login_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:red"><?php echo $emailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:red"><?php echo $pasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmitt" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>