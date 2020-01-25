<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Css Assets -->
    <link type="text/css" href="<?= base_url();  ?>assets/css/arkademystyle.css" rel="stylesheet">
    <link href="<?= base_url();  ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <title>Arkademy</title>
  </head>
  <body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top rectangle">
    <div class="container">
      <a class="navbar-brand" href=""><img src="<?= base_url();  ?>assets/img/logo.png" style="margin-left: -90px;"></a>
      <form >
        <input type="search" class="search-rectangle" placeholder="Search ...">
      </form>
      <button class="nav-link btn text-white pr-5 pl-5" data-toggle="modal" data-target="#tambahcashier" style="background-color: #FADC9C; margin-right:-80px; ">ADD</button>
    </div>
  </nav>

<div id="flash-data-tambahcashier" data-flashdata="<?= $this->session->flashdata('flash');  ?>"></div>
<!-- TABLE -->
  <div class="container" style="margin-top: 175px;">
    <table class="table table-borderless mr-3 ml-3 mt-5 text-center table-shadow">
      <thead class="text-white" style="background-color: #FADC9C;">
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
      	<?php 
      	$count=0;
      	foreach ($product as $p): 
      	$count++;	
      	?>
        <tr>
          <th scope="row"><?= $count; ?></th>
          <td><?= $p->cashier;  ?></td>
          <td><?= $p->product;  ?></td>
          <td><?= $p->category;  ?></td>
          <td>Rp. <?= number_format($p->price);  ?></td>
          <td><a href="#editcashier" onclick="confirm_modal_editcashier(
          	'<?= $p->id_product;  ?>',
          	'<?= $p->cashier;  ?>',
          	'<?= $p->category;  ?>',
          	'<?= $p->product;  ?>',
          	'<?= $p->price;  ?>'
          )" ><i style="color:rgb(171,217,133);" class="pr-2 fas fa-edit"></i></a> 
              <a href="<?= base_url('product/hapusproduk/');  ?><?= $p->id_product;  ?>" class="tombol-hapuscashier"><i style="color:rgb(255,14,72);" class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      	<?php endforeach ?>
      </tbody>
    </table>

    <!-- Modal Add -->
    <div class="modal fade" id="tambahcashier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><strong>ADD</strong></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pl-5 pr-5">
            <form action="<?= base_url();  ?>product/tambahproduk" method="post">
              <div class="form-group">
          	  <select class="form-control form-control-user" name="cashier" id="" placeholder="Cashier Name">
              <option disabled selected value>-- Cashier Name --</option>
              <?php foreach ($cashier as $c): ?>
              <option value="<?= $c->id_cashier;  ?>"><?= $c->name;  ?></option>
              <?php endforeach ?>
          	  </select> 
              </div>
              <div class="form-group">
          	  <select class="form-control form-control-user" name="category" id="" placeholder="Category">
              <option disabled selected value>-- Category --</option>
              <?php foreach ($category as $cat): ?>
              <option value="<?= $cat->id_category;  ?>"><?= $cat->name;  ?></option>
              <?php endforeach ?>
          	  </select> 
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="product" placeholder="Product Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="Price">
              </div>
          </div>
          <div class="modal-footer">
          <input type="submit" value="ADD" class="btn text-white pr-5 pl-5" style="background-color: #FADC9C;">
          <!-- <input type="submit" class="btn btn-success" value="Tambah"> -->
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editcashier" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><strong>Edit</strong></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pl-5 pr-5">
            <form action="<?= base_url();  ?>product/ubahproduk" method="post">
              <input hidden id="idprodukedit" name="idprodukedit">
              <div class="form-group">
              <input type="text" class="form-control" name="cashieredit" id="cashieredit">
          	  <!-- <select class="form-control form-control-user" name="cashieredit" id="cashieredit">
              <option disabled selected value>-- Cashier Name --</option>
               <option value="Pevita Pearce">Pevita Pearce</option>
               <option value="Raisa Andrianab">Raisa Andrianab</option>
               <option value="Denlei Diyorossi">Denlei Diyorossi</option>
          	  </select>  -->
              </div>
              <div class="form-group">
              <input type="text" class="form-control" name="categoryedit" id="categoryedit">
          	 <!--  <select class="form-control form-control-user" name="categoryedit" id="categoryedit" placeholder="Category">
              <option disabled selected value>-- Category --</option>
              <option value="Food">Food</option>
              <option value="Drink">Drink</option>
          	  </select>  -->
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="productedit" id="productedit">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="priceedit" id="priceedit">
              </div>
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn text-white pr-5 pl-5" style="background-color: #FADC9C;">Edit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
      function confirm_modal_editcashier(idprodukedit, cashieredit, categoryedit, productedit, priceedit){
         $('#editcashier').modal('show', {backdrop: 'static'});
         document.getElementById('idprodukedit').value = idprodukedit;
         document.getElementById('cashieredit').value = cashieredit;
         document.getElementById('categoryedit').value = categoryedit;
         document.getElementById('productedit').value = productedit;
         document.getElementById('priceedit').value = priceedit;
      }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="<?= base_url();  ?>assets/js/sweetalert/sweetalert2.all.min.js"></script>
    <!-- My Script -->
    <script src="<?= base_url();  ?>assets/js/myscript.js"></script>

  </body>
</html>