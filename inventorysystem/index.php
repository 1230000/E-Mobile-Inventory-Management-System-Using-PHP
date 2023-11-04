<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>

<body style="background: url('libs/images/bg.png'); background-repeat: no-repeat; background: cover; "> 
<div class="login-page">
    <div class="text-center">
       <h1>Login</h1>

     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username" >
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" id="myInput" placeholder="Password">
        </div>

            <div class="text-center">
            <input type="checkbox" onclick="myFunction()">Show Password

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

             <a href="change_password.php" class="text-center" text> Forgot Password </a>
         </div>
     </br>
        <div class="form-group">
                <button type="submit" class="btn-login" >Login</button>
        </div>

           <a href="https://web.facebook.com/sohil.sagar.1/" class="fb-link"> <p> Developed By M.Sohail </p> </a>


    </form>
</div>


 <script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<?php include_once('layouts/footer.php'); ?>


