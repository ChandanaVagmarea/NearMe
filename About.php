<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NearMe-About</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        .box{
            border-top-color:var(--teal) !important;
        }
    </style>
</head>
<body class="bg-light">
<!--header-->    
    <?php require('inc/header.php');?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3 ">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam,
              officia expedita fugit!
        </p>
    </div>  

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Non iusto a quod distinctio, nostrum id. Repellat.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/1.png" class="w-100">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/h.png" width="100px">
                    <h4 class="mt-3">100+ hostels</h4>
                </div>
            </div>
            <br>
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/c.png" width="100px">
                    <h4 class="mt-3">200+ customers</h4>
                </div>
            </div>
            <br>
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/r.png" width="100px">
                    <h4 class="mt-3">100+ reviews</h4>
                </div>
            </div>
            <br>
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/s.png" width="100px">
                    <h4 class="mt-3">Safe place</h4>
                </div>
            </div>
    
        </div>
    </div>
    <br><br>
    
<!--footer-->
    <?php require('inc/footer.php');?> 
</body>
</html>