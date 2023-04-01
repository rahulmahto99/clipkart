<?php

// include ("config.php");
// include ("functions.php");

// $sql = "SELECT id,category FROM categories";

// $result=mysqli_query($conn, $sql);

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <!-- Meta Tags Start here  -->

    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Meta Tags end here  -->



    <!-- Bootstrap Css start here  -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />



    <!-- Bootstap css end here  -->



    <!-- Font Awesome link start here  -->



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Font Awesome end here  -->



    <!-- Style sheet link here  -->



    <link rel="stylesheet" href="Assets/Css/style.css" />
    <link rel="stylesheet" href="Assets/Css/product_details.css" />
    <link rel="stylesheet" href="Assets/Css/categories.css" />



    <title>Home</title>

</head>



<body>

    <!-- Navigation bar start here  -->

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">

        <div class="container-fluid">

            <a class="navbar-brand" href="index.php"><img src="Assets\Images\LogoMakr-0OveNm.png" alt="" /></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-briefcase me-2"></i>Home

                        </a>

                    </li>
                    <?php

                    while (($row = mysqli_fetch_assoc($result))) {

                    ?>


                        <li class="nav-item">

                            <a class="nav-link" href="categories.php?id=<?php echo $row['id']; ?>">

                                <?php echo $row['category']; ?><i class="fa-solid fa-angle-down ms-2"></i></a>

                        </li>
                    <?php } ?>

                    <li class="nav-item">

                        <a class="nav-link" href="contact.php">Contact Us

                        </a>

                    </li>



                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                            More

                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="#">Blogs</a></li>

                        </ul>

                    </li>

                </ul>

            </div>

            <div class="nav-search">

                <i class="fa-solid fa-magnifying-glass fs-4 ms-3 me-3"></i>

            </div>

            <div class="nav-login-text">

                <a href="login_register.php">

                    <span>Login & Register</span>

                </a>

            </div>

            <div class="nav-contact ms-3">

                <i class="fa-solid fa-phone fs-5"></i><span><a class="text-decoration-none" href="tel://+1-202-555-0184">+1-202-555-0184</a></span>

            </div>

        </div>

    </nav>



    <!-- Navigation bar end here  -->