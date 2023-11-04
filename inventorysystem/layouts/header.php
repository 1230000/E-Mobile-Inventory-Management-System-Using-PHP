

<?php $user = current_user(); ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "e-Mobiles Inventory Management system";?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
  </head>


  <body>

  <?php  if ($session->isUserLoggedIn(true)): ?>
    



    <header id="header">
      <div class="header-content">
      <div class="header-date pull-left">

        


        <small><?php echo date("F j, Y, g:i a");?> </small>

       
          <strong style="color: floralwhite; margin-left: 200px; font-size: 1.2em; opacity: 100%;">Mobiles Shop Inventory Management System  </strong>

      </div>
     


     
      
      
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">

          <li class="profile">

              <a href="edit_account.php" data-toggle="dropdown" class="toggle" aria-expanded="false"> 
              <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline">
              <span><?php echo remove_junk(ucfirst($user['name'])); ?> </span>
            </a>

<!-- 
            <ul class="dropdown-menu">
              <li>
                  <a href="edit_account?id=<?php echo (int)$user['id'];?>">
                      <i class="glyphicon glyphicon-user"></i>
                      Profile
                  </a>
              </li>
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Settings
                 </a>
             </li>
             <li>
                 <a href="logout.php">
                     <i class="glyphicon glyphicon-off"></i>
                     Logout
                 </a>
             </li>
           </ul> -->

          </li>
        </ul>
      </div>
     </div>
    </header>

    <div class="sidebar">
     <a href="https://awkum.edu.pk/faculties-colleges/faculty-of-business-economics/ms_timergara/"> <div class="logo"> &nbsp;AWKUM TMG</div></a> 

      <?php if($user['user_level'] === '1'): ?>
        <!-- admin menu -->
      <?php include_once('admin_menu.php');?>

      <?php elseif($user['user_level'] === '2'): ?>
        <!-- Special user -->
      <?php include_once('special_menu.php');?>

      <?php elseif($user['user_level'] === '3'): ?>
        <!-- User menu -->
      <?php include_once('user_menu.php');?>

      <?php endif;?>

   </div>
<?php endif;?>


