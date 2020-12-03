<?php include('includes/user_sidebar.php'); ?>

<!-- Main  Warpper -->
<main class="main-wrapper">
            <?php $query= mysqli_query($conn,"select * from user where id = '$login_user'")or die(mysqli_error());
               $row = mysqli_fetch_array($query);     
               ?>
            <?php $query= mysqli_query($conn,"select * from user where id = '$login_user_id'")or die(mysqli_error());
               $row = mysqli_fetch_array($query);     
               ?>
              
               <!-- Site Header -->
            <?php include('includes/user_site_header.php'); ?>   
            <!-- End Site Header -->          
           
<br>
<br>
            <!-- start of main dashboard -->
           <div class="container">
            <div class="row">
              <div class="col-md-6">
               <div class="card">
                  <div class="card-heading">
                     <div class="container-fluid">
                      <div class="row-fluid">
                              <div class="span3"></br>
                                 <i class="fa fa-users fa-5x"></i><br/>
                              </div>
                              <div class="span8 text-right">
                                    <div class="huge"><?php echo $student; ?></div>
                                    <div><h3>All Registered Students</h3></div>
                              </div>
                      </div>
                     </div> 
                 </div>
               </div>

                            <a href="view_studs.php">                
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>                
                            </a>
            </div>

            <div class="col-lg-6">
               <div class="card">
                  <div class="card-heading">
                     <div class="container-fluid">
                      <div class="row-fluid">
                              <div class="span3"></br>
                                 <i class="fa fa-users fa-5x"></i><br/>
                              </div>
                              <div class="span8 text-right">
                                    <div class="huge"><?php echo $student; ?></div>
                                    <div><h3>All Registered Students</h3></div>
                              </div>
                      </div>
                     </div> 
                 </div>
               </div>

                            <a href="view_studs.php">                
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>                
                            </a>
            </div>


                      
      </div> 
      </div>
      <!-- end row -->


      


                   
              
               
           
            <!-- end of main dashboard -->
        </main>
        <!-- End Main Wrapper -->


<?php include('../includes/script.php'); ?>