<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>FUTO Locate User dashboard </title>
    <link rel="stylesheet" href="../public/css/dashboard.css">
</head>

<body>
     <!-- User dashboard Form -->
     
            <form action="../public/user_dashboard.php?action=user_dashboard" method="POST">
           
            </form>
    <div class="app-container relative">
        <!-- Navbar  -->
        <div class="navbar" id="navbar">
            <div class="navs" id="insideNav">

                <div class="flex_contain">
                    <span class="icon" id="close"><i class="fa-solid fa-xmark"></i></span>

                    <span class="profile_image">
                        <img src="data:image/jpeg;base64,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"
                            alt="">
                            <a href="../views/upload_profile_picture.php" class="flex_r">
                    </span>
                </div>
                <div class="profile_d">
                    <h2>Person Name</h2>
                    <p>person@gmail.com</p>
                    
                </div>
                <div class="flex_col">
                    <a href="../views/error.php" class="flex_r">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p>My Location</p>
                    </a>
                    <a href="../views/profile.php" class="flex_r">
                        <span><i class="fa-solid fa-user"></i></span>
                        <p>Profile</p>
                    </a>
                    <a href="../views/search.php" class="flex_r">
                        <span><i class="fa-solid fa-route"></i></span>
                        <p>Routes</p>
                    </a>
                    <a href="../views/error.php" class="flex_r">
                        <span><i class="fa-solid fa-gear"></i></span>
                        <p>Setting</p>
                    </a>
                    <a href="../views/share.php" class="flex_r">
                        <span><i class="fa-solid fa-share-nodes"></i></span>
                        <p>Share</p>
                    </a>
                </div>
                <div class="logout">
                    <hr class="line" />

                    <div class="flex_r icon">
                        <span><i class="fa-solid fa-right-from-bracket"></i></span>
                        <a href="../views/home.php?action=Logout">Logout</a>
                    </div>
                </div>
            </div>

        </div>
        .
        <!-- Search Bar -->
        <div class="absolute1">

            <div class="flex_contain">
                <span class="icon" id="menu"><i class="fa-solid fa-bars"></i></span>
                </head>
<body>

<a href="../views/search.php?action=searcj">Search Location</a>
                <span class="profile_image">
                    <img src="../public/images/img/logo.png" alt="">
                </span>
            </div>

            <div class="location-list">
                <div class="location_contain">

                    <a href="#" class="location-card" onclick="closeLocationList()" data-name="Senate building">
                        <h2>Senate building</h2>
                        <p>This is the Institution Vice Chancellor's Office.</p>
                    </a>
                    <a href="https://www.google.com/maps/dir/5.4065166,6.9531234/5.383565,6.999163/@5.3951366,6.9351386,13z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0?entry=ttu&g_ep=EgoyMDI0MTExOS4yIKXMDSoASAFQAw%3D%3D" class="location-card" onclick="closeLocationList()" data-name="SEET Complex">
                        <h2>SEET Complex</h2>
                        <p>This Complex houses several Engineering Department in the campus.</p>
                    </a>
                    <a href="https://www.google.com/maps/dir/5.4065166,6.9531234/5.387618,6.999736/@5.3951366,6.9351386,13z/data=!4m4!4m3!1m1!4e1!1m0?entry=ttu&g_ep=EgoyMDI0MTExOS4yIKXMDSoASAFQAw%3D%3D" class="location-card" onclick="closeLocationList()" data-name="Hostel C">
                        <h2>Hostel C </h2>
                        <p>Hostel C is one of the female residence in the campus.</p>
                    </a>
                </div>
                <!-- Add more location cards as needed -->
            </div>
        </div>


        <!-- Map Placeholder -->
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508441.9916029526!2d6.748827006209772!3d5.385989795739338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1042577010e83df5%3A0x3e9db95b29ed0d20!2sFederal%20University%20of%20Technology%20-%20Owerri!5e0!3m2!1sen!2sng!4v1731322497341!5m2!1sen!2sng"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="absolute2">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="location-details">
                            <div class="img_loc">
                                <img src="../public/images/img/building1.png" alt="image">

                            </div>
                            <h2>SEET COMPLEX</h2>
                            <p>Description of Location 1. This Complex houses several Engineering Department in the campus.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="location-details">
                            <div class="img_loc">
                                <img src="../public/images/img/building2.png" alt="image">

                            </div>
                            <h2>SAAT COMPLEX</h2>
                            <p>Description of Location 1. This is School of Agriculture and Agricultural Technology.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="location-details">
                            <div class="img_loc">
                                <img src="../public/images/img/building3.png" alt="image">

                            </div>
                            <h2>SKIT COMPLEX</h2>
                            <p>Description of Location 1. Beautiful place to visit with various attractions.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="location-details">
                            <div class="img_loc">
                                <img src="../public/images/img/building4.png" alt="image">

                            </div>
                            <h2>SOES COMPLEX</h2>
                            <p>Description of Location 1. Beautiful place to visit with various attractions.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="location-details">
                            <div class="img_loc">
                                <img src="../public/images/img/building5.png" alt="image">

                            </div>
                            <h2>SENATE COMPLEX</h2>
                            <p>Description of Location 1. Beautiful place to visit with various attractions.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="location-details">
                            <div class="img_loc">
                                <img src="../public/images/img/building1.png" alt="image">

                            </div>
                            <h2>MANAGEMENT COMPLEX </h2>
                            <p>Description of Location 1. Beautiful place to visit with various attractions.</p>
                        </div>
                    </div>


                </div>
            </div>


        </div>
        <!-- Swiper Slides for Location Details -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../public/js/dashboard.js"></script>
    
    
</body>

</html>