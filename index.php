<!--Start include header-->
<?php 
    include('./mainInclude/header.php');
?>
<!--End include header-->

    <!--Start Video Background-->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/banvid.mp4">
            </video>
            <div class="vid-overlay"></div>
        </div>
        <div class="vid-content pb-2">
            <h1 class="my-content pb-2">Welcome to digiLearning </h1>
            <small class="my-content">Learn Digitally</small><br />
            <?php 
                if(!isset($_SESSION['is_login'])){
                    echo '<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModalCenter">Lets Start</a>';
                }
                else{
                    echo'<a class="btn btn-primary mt-3" href="#">MyProfile</a>';
                }
            ?>    
        </div>
    </div>
    <!--End Video Background-->

    <!--Start text banner-->
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class= "col-sm">
                <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
            </div>
            <div class= "col-sm">
                <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
            </div>
            <div class= "col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
            </div>
            <div class= "col-sm">
                <h5><i class="fas fa-indian-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
            </div>
        </div>
    </div>
    <!--End text banner-->

    <!--Start most Popular course-->
    <div class="container mt-5">
        <h1 class="text-container"style="text-align:center;"> Popular Course</h1>
    <!--Start most Popular course 1st card deck-->
    <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
        <div class="card">
            <img src="image/Images/ML.webp" class="card-image-top" alt="Machine Learning" />
            <div class="card-body">
                <h5 class="card-title"> Learn Machine Learning Easy Way</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo.</p>
                <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
        </div>
    </a>

    <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
        <div class="card">
            <img src="image/Images/AI.webp" class="card-image-top" alt="Artificial Intelligence" />
            <div class="card-body">
                <h5 class="card-title"> Learn AI in Easy Way</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo.</p>
                <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
        </div>
    </a>
    </div>
    <!--End most Popular course 1st card deck-->

       <!--Start most Popular course 2nd card deck-->
       <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
        <div class="card">
            <img src="image/Images/AI.webp" class="card-image-top" alt="Python" />
            <div class="card-body">
                <h5 class="card-title"> Learn Basic Python</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo.</p>
                <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
        </div>
    </a>
    
    <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
        <div class="card">
            <img src="image/Images/ML.webp" class="card-image-top" alt="Python" />
            <div class="card-body">
                <h5 class="card-title"> Learn Basic Python</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo.</p>
                <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
        </div>
    </a>
    </div>
    <!--End most Popular course 2nd card deck-->
    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="courses.php"> View All Course</a>
    </div>
    </div>
    <!--End most Popular course-->

    <!--Start contact us container-->
    <?php
        include('./contact.php');
        ?>
    <!--End Contact Us container-->

    <!--Start Social follow-->
    <div class="container-fluid bg-danger">
        <div class="row text-white text-center p-1">
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fa-brands fa-facebook"></i>Facebook</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fa-brands fa-instagram"></i>Instagram</a>
            </div>
        </div>
    </div>
    <!--End Social follow-->
       <!--Start About Section-->
    <div class="container-fluid p-4" style="background-color:azure">
        <div class="container" style="background-color:azure">
            <div class="row text-center">
                <div class="col-sm">
                    <h5>About Us</h5>
                    <p>digiLearning provides universal access to the world's best
                        education, parenting with top universities and organizations
                        to offter courses online.
                    </p>
                </div>
                <div class="col-sm">
                    <h5>Category</h5>
                    <a class="text-dark" href="#">Web Development</a><br />
                    <a class="text-dark" href="#">Web Designer</a><br />
                    <a class="text-dark" href="#">Android App Dev</a><br />
                    <a class="text-dark" href="#">iOS Development</a><br />
                    <a class="text-dark" href="#">Data Analysis</a><br />
                </div>
                <div class="col-sm">
                    <h5>Contact Us</h5>
                    <p>digiLearning Pvt Ltd <br> Near Sisksha Bhavan <br> Kolkata,
                    West Bengal <br> Ph. +91 0918837113</p>
                </div>
            </div>
        </div>
    </div>
    <!--End About Section-->

<!--Start include footer-->
<?php 
    include('./mainInclude/footer.php')
?>
<!--End include footer-->