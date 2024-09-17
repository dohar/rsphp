<?php
include 'koneksi.php';
    
$query = "select * from customers limit 200";
$result = mysqli_query($db_connect, $query); ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Simple CRUD Using PHP, MySQL and Bootstrap</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-4">
     <div class="row">
         <div class="col-md-12">
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <?php include 'message.php'; ?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true"></span>
                 </button>
             </div>
         </div>
         <div class="col-md-12">
             <div class="float-left mb-4">
                 <h2>Customers List</h2>
             </div>
             <div class="float-right">
                 <a href="add.php" class="btn btn-success">Add new customer</a>
             </div>
             <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">#</th>
                         <th scope="col">First name</th>
                         <th scope="col">Last name</th>
                         <th scope="col">Email</th>
                         <th scope="col">Join</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                 <!-- Fetch customer data with associative array -->
                 <?php if ($result->num_rows > 0): ?>
                 <?php while($customer_data = mysqli_fetch_assoc($result)): ?>
                     <tr>
                         <th scope="row"><?php echo $customer_data['customer_id'];?></th>
                         <td><?php echo $customer_data['firstname'];?></td>
                         <td><?php echo $customer_data['lastname'];?></td>
                         <td><?php echo $customer_data['email'];?></td>
                         <td><?php $new_date = new DateTime($customer_data['created']); echo $new_date->format('Y-m-d');?></td>
                         <td>
                             <a href="edit.php?customer_id=<?php echo $customer_data['customer_id'];?>" class="btn btn-primary">Edit</a>
                             <a href="delete.php?customer_id=<?php echo $customer_data['customer_id'];?>" class="btn btn-danger">Delete</a>
                         </td>
                     </tr>
                 <?php endwhile; ?>
                 <?php else: ?>
                 <tr>
                     <td colspan="3" rowspan="1" headers="">No data found!</td>
                 </tr>
                 <?php endif; ?>
                 <?php mysqli_free_result($result); ?>
               </tbody>
             </table>
         </div>
     </div>
</div>
</body>
</html> 
