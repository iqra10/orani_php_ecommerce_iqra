<?php include 'includes/header.php' ?>
            
            
<!-- nav -->
 <?php include 'includes/nav.php' ?>
    
<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">

                                                <div class="card-block">
                                                    <h4>Edit User</h4>
                                                    
<?php
    
 if(isset($_GET['edit'])) {
     
      $the_id = $_GET['edit'];

 } else {
     
     $the_id = '';
     
 }
     

     
     
$query = "SELECT * FROM users" ;
     
$result = mysqli_query($connection, $query);

while ( $row = mysqli_fetch_array($result) ){
    
    $id       = $row['id'];
    $username = $row['username'];
    $password = $row['password'];
    
}
     
//    echo "<p style='color: #0A77F4; font-size: 16px; padding-top: 10px;'>User Added.</p>";


     
 
                                                    
?>   

<?php 
                                                    
  if (isset($_POST['update'])) {
      
      $username = $_POST['username'];
      $password = $_POST['password'];
      
 $crypt_password = crypt($password, "iusesomecrazystrings22");      
      
          $query = "UPDATE users SET ";
          $query .="username  = '{$username}', ";
          $query .="password = '{$password}' "; 
          $query .="WHERE id = '{$the_id}' ";     


     
$update_query = mysqli_query($connection, $query);     

    	echo "<p style='color: #0A77F4; font-size: 16px; padding-top: 10px;'>$username Updated.</p>";

      
  }                                                  
                                                    
                                                    
                                                    
                                                    
?>                                                    
                                                    
                                                    <form method="post" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" value="<?php echo $username; ?>" name="username" class="form-control">
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                           <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password"  value="<?php echo $password; ?>" name="password" class="form-control">
                                                                    </div>
                                                                </div>
                                                         
                                                                       <button type="submit" class="btn btn-primary" name="update" id="primary-popover-content">Update User</button>
                                                                

                                                                     
      
<?php include "includes/footer.php" ?>