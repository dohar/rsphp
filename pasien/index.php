<?php
include 'koneksi.php';   
$query = "select * from pasien limit 50";
$result = mysqli_query($konek, $query); ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>FORM DATA PASIEN RS TJKT 3</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-4">
     <div class="row">
         <div class="col-md-12">
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 Tempat menulis pesan
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true"></span>
                 </button>
             </div>
         </div>
         <div class="col-md-12">
             <div class="float-left mb-4">
                 <h2>DATA PASIEN</h2>
             </div>
             <div class="float-right">
                 <a href="#" class="btn btn-success">Tambah Data Pasien</a>
             </div>
             <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">ID Pasien</th>
                         <th scope="col">Nama Pasien</th>
                         <th scope="col">Alamat</th>
                         <th scope="col">Telepon</th>
                         <th scope="col">Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                 <?php if ($result->num_rows > 0): ?>
                 <?php while($pasien = mysqli_fetch_assoc($result)): ?>
                     <tr>
                         <th scope="row"><?php echo $pasien['id_pasien'];?></th>
                         <td><?php echo $pasien['nm_pasien'];?></td>
                         <td><?php echo $pasien['almt_pasien'];?></td>
                         <td><?php echo $pasien['telp_pasien'];?></td>
                         <td>
                             <a href="#" class="btn btn-primary">Edit</a>
                             <a href="#" class="btn btn-danger">Hapus</a>
                         </td>
                     </tr>
                 <?php endwhile; ?>
                 <?php else: ?>
                 <tr>
                     <td colspan="3" rowspan="1" headers="">Tidak Ada Data</td>
                 </tr>
                 <?php endif; ?>
               </tbody>
             </table>
         </div>
     </div>
</div>
</body>
</html> 
