<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- FOR SEO -->
    <!-- <meta property='og:title' content='MarinOne soft'/>
    <meta property='og:image' content='./assets/images/link.jpg'/> 
    <meta property='og:description' content='DESCRIPTION OF YOUR SITE'/>
    <meta property='og:url' content='URL OF YOUR WEBSITE'/>
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
    <meta property="og:type" content='website'/> -->

    <title>MarinOne</title>
    <link rel="icon" href="./images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap-5.1.3min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css" />
</head>

<body>
   
    <section class="login-panel">
        <div class="box">
            <img src="./images/logo.svg" class="mx-auto mb-3" width="150px">
            <h3 class="m-0">Create Account</h3>
            
            <small class="text-muted mb-2">Lorem ipsum dolor sit amet.    </small>
            <div>
                <div class="form-group my-3">
                    <input type="text" class='form-control' placeholder="name">
                </div>
                <div class="form-group my-3">
                    <input type="text" class='form-control' placeholder="Email">
                </div>
                <div class="form-group my-3">
                    <input type="text" class='form-control' placeholder="password">
                </div> 
            </div>
               <p class="d-flex align-items-center">
                <input type="checkbox"  name="" id="check" class="me-2">
                <small > 
                I agree to the <a href="#">Terms</a> and <a href="">Privacy Policy </a>
               </small>
               </p>
                 
            <div class='d-flex justify-content-center mt-2'>
                    <!-- <button class="btn btn-custom mr-2">Sign up</button> -->
                    <button  class="btn btn-custom btn-outline ">Sign Up</button>
            </div>
        </div>
    </section>

    <script src="js/bootstrap-5.bundle.min.js"></script>
    <script src="js/iconify.min.js"></script>
    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./js/slick.min.js" type="text/javascript"></script>

    <script type="text/javascript">

        $(document).ready(function () {

            $('.testimonial').slick({
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 2,
                slidesToScroll: 1,
                draggable: true,
                swipeToSlide: true,
                arrows: false,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: true,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            dots: true,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                ]
            });

            // blog slider
            $('.center').slick({
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 3,
                slidesToScroll: 1,
                draggable: true,
                swipeToSlide: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: true,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            dots: true,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                ]
            });

            // partners

            $('.partners').slick({
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 5,
                slidesToScroll: 1,
                draggable: true,
                swipeToSlide: true,
                arrows: false,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            dots: true,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                ]
            });

        });

        // slider main

        $('#carouselMain').carousel({
            interval: 3000,
            cycle: true
        });


    </script>
    <!-- <script>
        document.onkeydown = function(e) {
          if (e.ctrlKey && e.keyCode === 85) { 
             alert("you cant get my code ever :)");
             return false;
          }
        };
       </script> -->

</body>

</php>