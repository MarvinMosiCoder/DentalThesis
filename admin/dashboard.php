<?php include('../includes/admin_sidebar.php'); ?>

<h2>Admin</h2>

<?php $query= mysqli_query($conn,"select * from admin where id = '$login_admin'")or die(mysqli_error());
               $row = mysqli_fetch_array($query);     
               ?>
<?php $query= mysqli_query($conn,"select * from admin where id = '$login_admin_id'")or die(mysqli_error());
               $row = mysqli_fetch_array($query);     
               ?>
               <h4 class="text-white text-center">Welcome! <strong style="color: #00FF7F"> <?php echo $login_admin_id;?></strong></h4>
               <h4 class="text-white text-center">Welcome! <strong style="color: #00FF7F"> <?php echo $login_admin;?></strong></h4>

<?php include('../includes/script.php'); ?> 