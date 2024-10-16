<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NearMe-Home</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    
</head>
<body class="bg-light">
    
        <?php require('inc/header.php');?>
    <!--carousel-->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/Back packing your hostel room.jpg" alt="Descriptive text" 
                    style="max-width: 100%; height: auto; display: block; margin: 0 auto;" class="w-100 d-block">    
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/hostel near your college.jpg" alt="Descriptive text" 
                    style="max-width: 100%; height: auto; display: block; margin: 0 auto;" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/stress free.jpg" alt="Descriptive text" 
                    style="max-width: 100%; height: auto; display: block; margin: 0 auto;"class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                
                    <img src="images/carousel/update.jpg" alt="Descriptive text" 
                    style="max-width: 100%; height: auto; display: block; margin: 0 auto;"class="w-100 d-block">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <br><br>
    <!--search bar-->
    <div class="search-box">
          <h3>Find a Hostel Near Your College</h3>
          <br>
        <input type="text" id="collegeInput" placeholder="Enter your college name"> 
        <button onclick="searchHostels()">Search</button>
    
        </div>

        <div class="hostel-list" id="hostelList">
              <!-- Hostels will be displayed here -->
        </div>
    <!--Our Hostels-->
        <center><h2 class="mt-5 pt-4 mb-4 text-centeer fw-bold h-font text-align-center">OUR HOSTELS</h2></center>

    <div class="container">
    <div class="row">
        <!--1-->
        <div class="col-lg-4 col-md-3">
            <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                <img src="images/rooms/1.png" class="card-img-top" alt="Hostel Image">
                <div class="card-body">
                    <h5 class="card-title">Hostel Name: Jin Hostel</h5>
                    <h6 class="mb-4">Price: 3000 per Month</h6>
                    <p class="card-text">Near Colleges: MRCET, Narasimha</p>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            4 Beds
                        </span> 
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            1 Bathroom
                        </span>
                    </div>    
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                           WiFi
                        </span> 
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                           Washing Machine
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                    </div>
                </div>
            </div>
        </div>
        <!--2-->
        <div class="col-lg-4 col-md-3">
                <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                    <img src="images/rooms/2.png" class="card-img-top" alt="Hostel Image">
                    <div class="card-body">
                        <h5 class="card-title">Hostel Name: Jin Hostel</h5>
                        <h6 class="mb-4">Price: 3000 per Month</h6>
                        <p class="card-text">Near Colleges: MRCET, Narasimha</p>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                                4 Beds
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                                1 Bathroom
                            </span>
                        </div>    
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            WiFi
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Washing Machine
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
        <!--3-->
        <div class="col-lg-4 col-md-3">
            <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                <img src="images/rooms/3.png" class="card-img-top" alt="Hostel Image">
                <div class="card-body">
                    <h5 class="card-title">Hostel Name: Jin Hostel</h5>
                    <h6 class="mb-4">Price: 3000 per Month</h6>
                    <p class="card-text">Near Colleges: MRCET, Narasimha</p>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            4 Beds
                        </span> 
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            1 Bathroom
                        </span>
                    </div>    
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                           WiFi
                        </span> 
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                           Washing Machine
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Hostels >>></a>
        </div>
    </div>
</div>
    <!--Testimonials-->
        <center><h2 class="mt-5 pt-4 mb-4 text-centeer fw-bold h-font text-align-center">TESTIMONIALS</h2></center>

        <div class="container mt-5">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper mb-5 ">
                    <div class="swiper-slide bg-white p-4 border-0 shadow align-items-center">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/testimonials/1.png" width="30px">
                            <h6 class="m-0 ms-2">Random User</h6>
                        </div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus animi nihil ut dolorem similique voluptatem enim magnam, 
                            reiciendis neque doloremque totam odio iure alias voluptatum 
                            id veritatis, perspiciatis corrupti nam!
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4 border-0 shadow align-items-center">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/testimonials/1.png" width="30px">
                            <h6 class="m-0 ms-2">Random User</h6>
                        </div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus animi nihil ut dolorem similique voluptatem enim magnam, 
                            reiciendis neque doloremque totam odio iure alias voluptatum 
                            id veritatis, perspiciatis corrupti nam!
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4 border-0 shadow align-items-center">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/testimonials/1.png" width="30px">
                            <h6 class="m-0 ms-2">Random User</h6>
                        </div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus animi nihil ut dolorem similique voluptatem enim magnam, 
                            reiciendis neque doloremque totam odio iure alias voluptatum 
                            id veritatis, perspiciatis corrupti nam!
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4 border-0 shadow align-items-center">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/testimonials/1.png" width="30px">
                            <h6 class="m-0 ms-2">Random User</h6>
                        </div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus animi nihil ut dolorem similique voluptatem enim magnam, 
                            reiciendis neque doloremque totam odio iure alias voluptatum 
                            id veritatis, perspiciatis corrupti nam!
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    <!--Reach us--> 
        <center><h2 class="mt-5 pt-4 mb-4 text-centeer fw-bold h-font text-align-center">REACH US</h2></center>
        
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded border-0 shadow">
                    <iframe class="w-100 rounded"height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3803.8546933933644!2d78.45266927463076!3d17.562103497749412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8f9ee1fbbf3d%3A0xd8188b5c2a15ca92!2sMRCET%20CANTEEN%2C%20MALLA%20REDDY%20COLLEGE%2C%20Maisammaguda%2C%20Dulapally%2C%20Hyderabad%2C%20Telangana%20500043!5e0!3m2!1sen!2sin!4v1728842438988!5m2!1sen!2sin"  
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4 border-0 shadow">
                        <h5>Call Us</h5>
                        <a href="tel: +919873676421" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i>+919873676421</a>
                        <br>
                        <a href="tel: +919873676421" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i>+919873676421</a>       
                    </div>

                    <div class="bg-white p-4 rounded mb-4 border-0 shadow">
                        <h5>Follow Us</h5>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-twitter-x me-2"></i>Twitter
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-facebook me-2"></i>Facebook
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-instagram me-2"></i>Instagram
                            </span>
                        </a>
                        <br>
                               
                    </div>
                </div>
            </div>
        </div>

    <!--footer design-->    

    <?php require('inc/footer.php');?>
<br><br><br>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>


    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
//searching the colleges for hostels
    function searchHostels() {
    var collegeName = document.getElementById("collegeInput").value;

    // Create an XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "search_hostels.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define what happens on successful data submission
    xhr.onload = function() {
        if (this.status == 200) {
            // Update the hostel list with the response
            document.getElementById("hostelList").innerHTML = this.responseText;
        } else {
            document.getElementById("hostelList").innerHTML = "Error retrieving hostels.";
        }
    };

    // Send the request with the college name
    xhr.send("college_name=" + encodeURIComponent(collegeName));
}

//testimonials
var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      
      slidesPerView:"3",
      
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        360:{
            slidesPerView:1,
        },
        620:{
            slidesPerView:2,
        },
        740:{
            slidesPerView:3,
        },
        1024:{
            slidesPerView:4,
        },
      }
      
    });
  </script>


</body>
</html>