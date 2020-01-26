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
      <a class="navbar-brand" href="<?=base_url('home');  ?>"><img src="<?= base_url();  ?>assets/img/logo.png" style="margin-left: -90px;"></a>
      <form >
        <input type="search" class="search-rectangle" placeholder="Search ...">
      </form>
      <button class="nav-link btn text-white pr-5 pl-5" data-toggle="modal" data-target="#tambahcashier" style="background-color: #FADC9C; margin-right:-80px; ">ADD</button>
    </div>
  </nav>
<div id="flash-data-tambahcashier" data-flashdata="<?= $this->session->flashdata('flash');  ?>"></div>
<!-- FORM EDIT -->
<div class="row pt-5 mt-5 justify-content-center">
  <div class="col-md-4 mt-5">
  <h3>EDIT</h3><hr>
  <form action="<?= base_url('product/update/');  ?><?= $product->id_product;  ?>" method="post">
    <input type="hidden" name="idproductedit" value="<?= $product->id_product;  ?>">
    <div class="form-group">
      <select class="form-control form-control-user" name="cashieredit" id="cashieredit">
      <option selected value="<?= $product->id_cashier;  ?>"><?= $product->cashier;  ?></option>
      <?php foreach ($cashier as $cashier): ?>
        <option value="<?= $cashier->id_cashier;  ?>"><?= $cashier->name;  ?></option>
      <?php endforeach ?>
      </select> 
    </div>
    <div class="form-group">
       <select class="form-control form-control-user" name="categoryedit" id="categoryedit" placeholder="Category">
      <option selected value="<?= $product->id_category;  ?>"><?= $product->category;  ?></option>
       <?php foreach ($category as $category): ?>
      <option value="<?= $category->id_category;  ?>"><?= $category->name;  ?></option>
      <?php endforeach ?>
      </select> 
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="productedit" value="<?= $product->product;  ?>">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="priceedit" value="<?= $product->price;  ?>">
    </div>
    <button name="submit" type="submit" class="btn text-white pr-5 pl-5" style="background-color: #FADC9C;">EDIT</button>
  </form>
  </div>
</div>

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