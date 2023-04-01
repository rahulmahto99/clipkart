<?php

include("header.php");
$sql = "SELECT `id`, `category_id`,`category_namae`, `name`, `mrp`, `price`, `available`, `image`, `status` FROM product";


$result = mysqli_query($conn, $sql);

?>



<!-- Breadcrumb Section Start here  -->

<div class="container mt-3 mb-1">

    <nav>

        <ol class="breadcrumb">

            <li class="breadcrumb-item "><a class="text-decoration-none" href="#">Home</a></li>

            <li class="breadcrumb-itemm active" aria-current="page"><i class="fa-solid ms-3 me-3 fa-angle-right"></i>Category</li>

            <li class=""><span><i class="fa-solid ms-3 me-3 fa-angle-right"></i>Tittle</span></li>

        </ol>

    </nav>

</div>



<!-- Breadcrumb section end here  -->



<!-- Product Details start here  -->



<div class="container">

    <div class="cardd">

        <div class="container-fliud">

            <div class="wrapper row">

                <div class="preview col-md-6">



                    <div class="preview-pic tab-content">

                        <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>

                        <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>

                        <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>

                        <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>

                        <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>

                    </div>

                    <ul class="preview-thumbnail nav nav-tabs">

                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>

                        <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>

                        <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>

                        <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>

                        <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>

                    </ul>



                </div>

                <div class="details col-md-6">
                    <?php
                    $row = mysqli_fetch_assoc($result)


                    ?>

                    <h3 class="product-title"><?php echo $row['name']; ?></h3>

                    <div class="rating">

                        <div class="stars">

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star"></span>

                            <span class="fa fa-star"></span>

                        </div>

                        <span class="review-no">41 reviews</span>

                    </div>

                    <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>

                    <h4 class="price">current price: <span>$<?php echo $row['price']; ?></span></h4>

                    <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>




                    <div class="action">
                        <a href="cart.php">
                            <button class="add-to-cart btn btn-default" type="button">add to cart</button>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>







<!-- Product Details end here  -->



<section class="htc__produc__decription bg__white">

    <div class="container">

        <div class="row">

            <div class="col-xs-12">

                <!-- Start List And Grid View -->

                <ul class="pro__details__tab" role="tablist">

                    <li role="presentation" class="description active"><a href="#description">description</a></li>

                </ul>

                <!-- End List And Grid View -->

            </div>

        </div>

        <div class="row">

            <div class="col-xs-12">

                <div class="ht__pro__details__content">

                    <!-- Start Single Content -->

                    <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">

                        <div class="pro__tab__content__inner">

                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued bodysuits.

                            <h4 class="ht__pro__title">Standard Featured</h4>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in</p>

                        </div>

                    </div>

                    <!-- End Single Content -->



                </div>

            </div>

        </div>

    </div>

</section>







<?php



include("footer.php")



?>