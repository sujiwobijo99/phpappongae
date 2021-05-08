<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url("style/") ?>style.css">

    <title>Merge-Edu.id</title>
</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="#">Merge-Edu.id</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <?php
                    if (isset($data['name'])) {

                        echo "<a class='btn btn-primary tombol' >" .  $data['name'] . "</a>";
                    } else {
                        echo "<a class='btn btn-primary tombol' href='" . base_url('auth') . ">Login</a>";
                    };

                    ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Tingkatkan skill <span>kerja</span></br> dan <span>akademismu</span> disini</h1>
            <a href="" class="btn btn-primary tombol">Our Facilities</a>
        </div>
    </div>

    <!-- End of Jumbotron -->

    <!-- Container -->
    <div class="container">

        <!-- Info Panel -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="<?php echo base_url('assets/img/base/'); ?>employee.png" class="float-left" alt="employee">
                        <h4>Skill</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-lg">
                        <img src="<?php echo base_url('assets/img/base/'); ?>hires.png" class="float-left" alt="hires">
                        <h4>Academy</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-lg">
                        <img src="<?php echo base_url('assets/img/base/'); ?>security.png" class="float-left" alt="security">
                        <h4>Lectures</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <!-- End of Info Panel -->

            <!-- working space -->

            <div class="row workingspace">
                <div class="col-lg-6">
                    <img src="<?php echo base_url('assets/img/base/'); ?>workingspace.png" class="img-fluid" alt="workingspace">
                </div>

                <div class="col-lg-5">
                    <h3>Learn As <span>Much</span> As You <span>Like</span></h3>
                    <p>Belajar sebanyak mungkin dari seluruh modul yang tersedia</p>
                    <a href="" class="btn btn-primary tombol">Galery</a>
                </div>
            </div>
            <!-- End of Working Space -->
        </div>
    </div>


    <!-- Testimonial Carousel -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <h2>Testimonials</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="img-box"><img src="https://i.ibb.co/d5DY64w/img1.jpg" alt=""></div>
                            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                                varius
                                quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac
                                bibendum
                                scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                            <p class="overview"><b>Jennifer Smith</b>, Office Worker</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="https://i.ibb.co/5FF1vqz/img2.jpg" alt=""></div>
                            <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi
                                suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis.
                                Suspendisse
                                potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                            <p class="overview"><b>Dauglas McNun</b>, Financial Advisor</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="https://i.ibb.co/Trv7hDv/img3.jpg" alt=""></div>
                            <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam
                                faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus,
                                volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                            <p class="overview"><b>Hellen Wright</b>, Athelete</p>
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>


    <!-- End of Testimonial Carousel -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>