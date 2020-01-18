<?php 

include "koneksi.php";

$sql = "SELECT cashier.name, product.name,category.name, product.price,product.id
          FROM product JOIN cashier JOIN category 
          ON cashier.id=product.id_cashier AND category.id=product.id_category";

          $result=mysqli_query($conn,$sql);
          $result2=mysqli_query($conn,"SELECT * FROM category");
          $result3=mysqli_query($conn,"SELECT * FROM cashier");


 ?>


<!doctype html>
<html lang="en">
  <head>
    <title>Data Base</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- aswesome -->
    <link rel="stylesheet" href="css/all.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:200,400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">

<body>


 <nav class="navbar">
  <div class="container">
         <a class="navbar-brand" href="#">
            <img src="logo.png" width="70" height="35" alt="logo arkademy">
          </a>
        <form class="form-inline frm">
          <input class="form-control mr-sm-2 txt" type="search" placeholder="Search...." aria-label="Search">
        </form>
                  <button class="btn btn-warning my-2 my-sm-0 but" type="button" data-toggle="modal" data-target="#modal">ADD</button>
  </div>
</nav>


<section >
    <table class="table table-borderless view-data">
  <thead class="bg-warning">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Cashier</th>
      <th scope="col">Product</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>    
    </tr>
  </thead>
  <tbody>
<?php $i=1; ?>
<?php while($data=mysqli_fetch_row($result)) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $data[0]; ?></td>
      <td><?= $data[1]; ?></td>
      <td><?= $data[2]; ?></td>
      <td><?= "Rp.$data[3]"; ?></td>
      <td>
        <a href="" class="text-success" data-toggle="modal" data-target="#modal2"><i class="fas fa-fw fa-edit"></i></a>
        <a href="hapus.php?id=<?= $data[4]; ?>" class="text-danger"><i class="fas fa-fw fa-trash-alt"></i></a>
      </td>
    </tr>
    <?php $i++; ?>
<?php endwhile; ?>

  </tbody>
</table>
</section>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="formmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form action="simpan.php" method="post">
          <div class="form-group">
            <select class="form-control" name="name1" required="">
              <?php while($data=mysqli_fetch_assoc($result3)) : ?>
               <option><?= $data["name"]; ?></option>
              <?php endwhile; ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="name2" placeholder="Drink" required="">
              <?php while($data=mysqli_fetch_assoc($result2)) : ?>
                <option><?= $data["name"]; ?></option>
              <?php endwhile; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="name3" placeholder="Ice Tea" required="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Rp.10.000" required="">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal2 -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="formmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form action="edit.php" method="post">
          <!-- form -->
          <div class="form-group">
            <select class="form-control" name="name1" required="">
              <?php while($data=mysqli_fetch_assoc($result3)) : ?>
               <option><?= $data["name"]; ?></option>
              <?php endwhile; ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="name2" placeholder="Drink" required="">
              <?php while($data=mysqli_fetch_assoc($result2)) : ?>
                <option><?= $data["name"]; ?></option>
              <?php endwhile; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="name3" placeholder="Ice Tea" required="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Rp.10.000" required="">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Edit</button>
        </form>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
  </body>
</html>