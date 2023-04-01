<?php

include("header.php");

$sql = "SELECT `id`, `category_id`,`category_namae`, `name`, `mrp`, `price`, `available`, `image`, `status` FROM product";


$result = mysqli_query($conn, $sql);

?>

<!-- category Breadcrumb section start here  -->



<div class="bread-navigation">

    <div class="breadacrumb">

        <div class="bread-h1 text-center ">Category</div>

        <div class="jdj text-center">

            <span class="bread-h2 me-2 text-center"><a href="">Home <i class="fa-solid ms-2 fa-angle-right"></i></a></span>

            <span class="bread-h3 text-center">Category</span>

        </div>

    </div>

</div>



<!-- category Breadcrumb section start here  -->





<!-- Bottom Section Start here  -->



<div class="container">

    <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header"> <button class="btn btn-hide text-uppercase" type="button" data-toggle="collapse" data-target="#filterbar" aria-expanded="false" aria-controls="filterbar" id="filter-btn" onclick="changeBtnTxt()"> <span class="fas fa-angle-left" id="filter-angle"></span> <span id="btn-txt">Hide filters</span> </button>

        <nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto"> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span class="navbar-toggler-icon"></span> </button>

            <div class="collapse navbar-collapse" id="mynav">

                <ul class="navbar-nav d-lg-flex align-items-lg-center">

                    <li class="nav-item active"> <select name="sort" id="sort">

                            <option value="" hidden selected>Sort by</option>

                            <option value="price">Price</option>

                            <option value="popularity">Popularity</option>

                            <option value="rating">Rating</option>

                        </select> </li>

                    <li class="nav-item d-inline-flex align-items-center justify-content-between mb-lg-0 mb-3">

                        <div class="d-inline-flex align-items-center mx-lg-2" id="select2">

                            <div class="pl-2">Products:</div> <select name="pro" id="pro">

                                <option value="18">18</option>

                                <option value="19">19</option>

                                <option value="20">20</option>

                            </select>

                        </div>

                        <div class="font-weight-bold mx-2 result">18 from 200</div>

                    </li>

                    <li class="nav-item d-lg-none d-inline-flex"> </li>

                </ul>

            </div>

        </nav>

        <div class="ml-auto mt-3 mr-2">

            <nav aria-label="Page navigation example">

                <ul class="pagination">

                    <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true" class="font-weight-bold">&lt;</span> <span class="sr-only">Previous</span> </a> </li>

                    <li class="page-item active"><a class="page-link" href="#">1</a></li>

                    <li class="page-item"><a class="page-link" href="#">..</a></li>

                    <li class="page-item"><a class="page-link" href="#">24</a></li>

                    <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true" class="font-weight-bold">&gt;</span> <span class="sr-only">Next</span> </a> </li>

                </ul>

            </nav>

        </div>

    </div>

    <div id="content" class="my-5">

        <div id="filterbar" class="collapse">

            <div class="box border-bottom">

                <div class="form-group text-center">

                    <div class="btn-group" data-toggle="buttons"> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="radio"> Reset </label> <label class="btn btn-success form-check-label active"> <input class="form-check-input" type="radio" checked> Apply </label> </div>

                </div>

                <div> <label class="tick">New <input type="checkbox" checked="checked"> <span class="check"></span> </label> </div>

                <div> <label class="tick">Sale <input type="checkbox"> <span class="check"></span> </label> </div>

            </div>

            <div class="box border-bottom">

                <div class="box-label text-uppercase d-flex align-items-center">Outerwear <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box" aria-expanded="false" aria-controls="inner-box" id="out" onclick="outerFilter()"> <span class="fas fa-plus"></span> </button> </div>

                <div id="inner-box" class="collapse mt-2 mr-1">

                    <div class="my-1"> <label class="tick">Windbreaker <input type="checkbox" checked="checked"> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Jumpsuit <input type="checkbox"> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Jacket <input type="checkbox"> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Coat <input type="checkbox"> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Raincoat <input type="checkbox"> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Handbag <input type="checkbox" checked> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Warm vest <input type="checkbox"> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Wallets <input type="checkbox" checked> <span class="check"></span> </label> </div>

                </div>

            </div>

            <div class="box border-bottom">

                <div class="box-label text-uppercase d-flex align-items-center">season <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box2" aria-expanded="false" aria-controls="inner-box2"><span class="fas fa-plus"></span></button> </div>

                <div id="inner-box2" class="collapse mt-2 mr-1">

                    <div class="my-1"> <label class="tick">Spring <input type="checkbox" checked="checked"> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Summer <input type="checkbox"> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Autumn <input type="checkbox" checked> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Winter <input type="checkbox"> <span class="check"></span> </label> </div>

                    <div class="my-1"> <label class="tick">Rainy <input type="checkbox"> <span class="check"></span> </label> </div>

                </div>

            </div>

            <div class="box border-bottom">

                <div class="box-label text-uppercase d-flex align-items-center">price <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#price" aria-expanded="false" aria-controls="price"><span class="fas fa-plus"></span></button> </div>

                <div class="collapse" id="price">

                    <div class="middle">

                        <div class="multi-range-slider"> <input type="range" id="input-left" min="0" max="100" value="10"> <input type="range" id="input-right" min="0" max="100" value="50">

                            <div class="slider">

                                <div class="track"></div>

                                <div class="range"></div>

                                <div class="thumb left"></div>

                                <div class="thumb right"></div>

                            </div>

                        </div>

                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-2">

                        <div> <span id="amount-left" class="font-weight-bold"></span> uah </div>

                        <div> <span id="amount-right" class="font-weight-bold"></span> uah </div>

                    </div>

                </div>

            </div>

            <div class="box">

                <div class="box-label text-uppercase d-flex align-items-center">size <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#size" aria-expanded="false" aria-controls="size"><span class="fas fa-plus"></span></button> </div>

                <div id="size" class="collapse">

                    <div class="btn-group d-flex align-items-center flex-wrap" data-toggle="buttons"> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox"> 80 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 92 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 102 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 104 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 106 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 108 </label> </div>

                </div>

            </div>

        </div>



        <div id="products">

        <div class="row">
          <?php
          while (($row = mysqli_fetch_assoc($result))) {


          ?>
            
              <div class="col-md-3">
              <a href="product_details.php" class="text-decoration-none">


                <div class="card">

                  <div class="d-flex justify-content-between p-3">

                    <p class="lead mb-0 text-decoration-none">Today's Combo Offer</p>

                    <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong" style="width: 30px; height: 30px">

                      <p class="text-white mb-0 small">x4</p>

                    </div>

                  </div>

                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp" class="card-img-top" alt="Laptop" />

                  <div class="card-body">

                    <div class="d-flex justify-content-between">

                      <p class="small">

                        <a href="#!" class="text-muted"><?php echo $row['category_namae']; ?></a>

                      </p>

                      <p class="small text-danger"><s>&#8377 <?php echo $row['mrp']; ?></s></p>

                    </div>



                    <div class="d-flex justify-content-between mb-3">
                    <a href="product_details.php" class="text-decoration-none">

                      <h5 class="mb-0 fs-5  "><?php echo $row['name']; ?></h5>
                    </a>
                      <h5 class="text-dark  me-2 mb-0">&#8377 <?php echo $row['price']; ?></h5>

                    </div>



                    <div class="d-flex justify-content-between mb-2">

                      <p class="text-muted mb-0">

                        Available: <span class="fw-bold">&#8377 <?php echo $row['available']; ?></span>

                      </p>

                      <div class="ms-auto text-warning">

                        <i class="fa fa-star"></i>

                        <i class="fa fa-star"></i>

                        <i class="fa fa-star"></i>

                        <i class="fa fa-star"></i>

                        <i class="fa fa-star"></i>

                      </div>

                    </div>

                    <div class="add-to-button mt-3 mb-4">

                      <a href="cart.php" class="add-to-cart-btn"><span>Add To Cart <i class="fa-solid fa-plus"></i></span></a>

                    </div>

                  </div>

                </div>
                </a>



              </div>
            
          <?php
          }

          ?>

        </div>

        </div>

    </div>

</div>



<!-- Bottom Section end here  -->



<?php



include("footer.php");



?>