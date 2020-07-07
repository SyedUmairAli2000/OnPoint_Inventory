<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnPoint-Inventory|Best online inventory solution</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="./js/main.js" type="text/javascript"></script>
</head>
<body>
    <!-- Navigation -->
    <?php
      include_once("templates/header.php");
    ?>
    <div class="container mt-2">
         <div class="row">
             <div class="col-md-4">
                <div class="card bg-medium" style="width: 20rem;">
                    <img src="./images/Admin.png" class="card-img-top mx-auto mt-1 " style="width:60%;" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Profile info</h5>
                              <p class="card-text">Admin</p>
                              <p class="card-text">Last login: 12am </p>
                            <a href="#" class="btn btn-primary"><i class="fa fa-pen"></i> Edit profile</a>
                         </div>
                    </div>
               </div>
        <div class="col-md-8">
         <div class="jumbotron" style="width:100%;height100%;">
            <h1>Welcome Admin</h1>
            <div class="row">
               <div class="col-md-6">
               <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">Total Orders: 12</li>
                        <li class="list-group-item bg-dark text-white">Total customers: 17</li>
                        <li class="list-group-item bg-dark text-white">Total Invoice generated: 25</li>
                    </ul>
                    </div>
               </div>
               <div class="col-md-6">
               <div class="card">
      <div class="card-body bg-dark">
        <h5 class="card-title text-white">New orders</h5>
        <p class="card-text text-white">Create a new order</p>
        <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> New order</a>
      </div>
    </div>
               </div>
            </div>
         </div>
               </div>
            </div>
    </div>
    <!-- First container end -->

     <!-- Second container start -->
     <div class="container">
     <div class="row">
     <!-- Categories -->
      <div class="col-md-4">
      <div class="card mt-4 bg-dark" style="width: 25rem;">
      <div class="card-body" style="width: 25rem;">
        <h5 class="card-title text-white">Manage Categories</h5>
        <p class="card-text text-white">View and Edit all categories</p>
        <a href="#" class="btn btn-success"><i class="fa fa-edit"></i>Manage Categories</a>
        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#category"><i class="fa fa-plus"></i>Add new Category</a>
      </div>
    </div>
      </div>
        <!-- Brands -->
      <div class="col-md-4">
      <div class="card mt-4 ml-4 bg-dark" style="width: 25rem;">
      <div class="card-body" style="width: 25rem;">
        <h5 class="card-title text-white">Manage brands</h5>
        <p class="card-text text-white">View and Edit all brands</p>
        <a href="#" class="btn btn-success"><i class="fa fa-edit"></i>Manage brands</a>
        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#brands"><i class="fa fa-plus"></i>Add new brand</a>
      </div>
    </div>
      </div>
      <!--  Products-->
      <div class="col-md-4">
      <div class="card mt-4 ml-5 bg-dark" style="width: 25rem;">
      <div class="card-body" style="width: 25rem;">
        <h5 class="card-title text-white">Manage products</h5>
        <p class="card-text text-white">View and Edit all products</p>
        <a href="#" class="btn btn-success"><i class="fa fa-edit"></i>Manage products</a>
        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#products"><i class="fa fa-plus"></i>Add new product</a>
      </div>
    </div>
      </div>

     </div>
     </div>
         
         <!-- Add new category, brands amd products form -->
         <?php 
         include_once("./templates/category.php");
         include_once("./templates/brands.php");
         include_once("./templates/product.php");
         ?>



</body>
</html>