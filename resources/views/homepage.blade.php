<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mountain View Landscaping - Southern New Hampshire's Quality Landscaping and Lawn Care</title>
    <meta name="description" content="Looking for landscaping services in the Rockingham, NH area? Mountain View Landscaping can be your partner for beautiful landscaping and year-round grounds management. We offer full-service design, installation and maintenance services for your residential and commercial properties.">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />

    <!-- Social Media Sharing -->
    <meta property="og:site_name" content="Mountain View Landscaping, LLC">
    <meta property="og:title" content="Serving southern New Hampshire's Landscaping Needs">
    <meta property="og:description" content="Looking for landscaping services in the Rockingham, NH area? Mountain View Landscaping can be your partner for beautiful landscaping and year-round grounds management. We offer full-service design, installation and maintenance services for your residential and commercial properties.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mountainviewlandscapers.com">
    <meta property="og:image" content="https://mountainviewlandscapers.com/img/social_share_card.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Mountain View Landscaping - Serving Southern New Hampshire's Landscaping and Lawn Care Needs">
    <meta property="twitter:description" content="Looking for landscaping services in the Rockingham, NH area? Mountain View Landscaping can be your partner for beautiful landscaping and year-round grounds management. We offer full-service design, installation and maintenance services for your residential and commercial properties.">
    <meta property="twitter:url" content="https://mountainviewlandscapers.com">
    <meta property="twitter:image" content="https://mountainviewlandscapers.com/img/social_share_card.png">

    <!-- CSS -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script async src="https://kit.fontawesome.com/bb0ff28fce.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/homepage.css') }}">
</head>
<body id="top">
    <header class="main-header sticky-header header-with-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light rounded">
                        <a href="{{ route('static.homepage') }}" class="navbar-brand logo d-flex mr-auto">Mountain View</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="navbar-collapse collapse w-100" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="#top" class="nav-link single">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about" class="nav-link single">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.services') }}" class="nav-link single">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#work" class="nav-link single">Our Work</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="nav-link single">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link link-color" data-toggle="modal" data-target="#loginsoon">My Account</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item item-bg active">
                    <img class="d-block banner-background-image" src="img/homepage_banner_bg.png" alt="Banner background image">
                    <div class="carousel-caption banner-slider-inner d-flex h-100">
                        <div class="carousel-content container">
                            <div class="banner-inner">
                                <h1 class="b-text">Your local top notch landscaper.</h1>
                                <p>Mountain View Landscaping can be your partner for beautiful landscaping and year-round grounds management for your residential or commercial property.</p>
                                <a href="#about" class="btn-md button-theme">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about" name="about" class="about">
        <div class="container about-section">
            <div class="row section-header">
                <div class="col-12 text-center">
                    <h3>About us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 text-center about-logo">
                            <div class="single-image">
                                <img src="img/logo-about-us.png" alt="Mountain View Landscaping Logo">
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <p>Mountain View Landscaping proudly provides complete residential and commercial lawn and landscaping services to the southern New Hampshire seacoast area. We offer a wide variety of services including aeration, fertilization, lawn mowing, irrigation start-ups and blow-outs, seasonal spring and fall clean-ups, snow plowing, ice management, hardscape design &amp; installation, hydroseeding and more! We're a local New Hampshire landscaping contractor, so you can rest assured we truly understand the region and how our interesting weather patterns impact all aspects of landscape design, maintenance and installation.</p>
                            <p>Our customers are our first priority and we're committed to exceeding their expectations in everything that we do. Our customers are the foundation of our growth and we earn our reputation every day by providing them with a high quality, reliable, efficient and professional service.</p>
                            <p>We offer our <strong>mowing</strong> services the following (and <strong>landscaping</strong> to surrounding) southern New Hampshire towns: <em>Fremont, Raymond, Brentwood, Sandown, Danville, Epping, Chester, Hampstead, Kingston, Hooksett, Portsmouth, Newington, Stratham and Manchester.</em></p>
                        </div>
                        <div class="col-12 social">
                            <h5 class="title">Follow us on Facebook and Instagram!</h5>
                            <a href="https://instagram.com/mtnviewlandscaping">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/MountainViewLandscapers">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="services" name="services">
        <div class="container">
            <div class="row section-header">
                <div class="col-12 text-center">
                    <h3>Services We Offer</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <div class="service-post">
                        <img src="img/rounded_mowing.svg" alt="Residential and commercial lawn care service" class="service-icon">
                        <h5 class="service-title">Lawn Maintenance</h5>
                        <p>We can keep your lawn looking great and healthy all season long! Our lawn residential and commercial maintenance service includes weekly mowing, trimming, edging and blowing.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <div class="service-post">
                        <img src="img/rounded_hedge_trimming.svg" alt="Shrub trimming and shaping service" class="service-icon">
                        <h5 class="service-title">Trimming &amp; Pruning</h5>
                        <p>Regular trimming and pruning helps to keep your shrubs healthy and looking beautiful. We can manage your trees and shrubs to ensure strong growth and beauty throughout the year.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <div class="service-post">
                        <img src="img/rounded_mulch.svg" alt="Mulch bed refreshing and installation" class="service-icon">
                        <h5 class="service-title">Mulch Installation</h5>
                        <p>Mulching is one of the best things you can do for your beds. It keeps them looking great while also decreasing evaporation by as much as 35%, which means your water usage will be far more efficient.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <div class="service-post">
                        <img src="img/rounded_leaf_removal.svg" alt="Seasonal leaf clean-up and removal" class="service-icon">
                        <h5 class="service-title">Seasonal Clean-ups</h5>
                        <p>Seasonal clean-ups can make a real difference in the overall appearance of your property and health of your lawn. We provide leaf and mulch bed clean ups as well as curbside leaf pickup.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <div class="service-post">
                        <img src="img/rounded_snow_removal.svg" alt="Snow plowing, sidewalk shoveling and ice management" class="service-icon">
                        <h5 class="service-title">Snow &amp; Ice</h5>
                        <p>We know New England can be pretty unpredictable, which is why we're always ready. We can keep your walkways, parking lots and driveways clear of snow and ice during the hectic winter months.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <div class="service-post">
                        <img src="img/rounded_design.svg" alt="Landscape design and installation" class="service-icon">
                        <h5 class="service-title">Design &amp; Install</h5>
                        <p>Turn your yard into the envy of the neighborhood with our custom design landscaping. Walkways, patios, retaining walls and water features will enhance the beauty of your outdoor living space.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center view-more">
                    <a href="{{ route('static.services') }}" class="btn-md button-theme">View More Services</a>
                </div>
            </div>
        </div>
    </section>
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cta-inner clearfix">
                        <div class="cta-text">
                            <h5 class="cta-title">We can help bring your lawn and landscape projects to life!</h5>
                        </div>
                        <div class="cta-button">
                            <a href="#contact" class="btn btn-bordered">Request a quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="work" id="work">
        <div class="container">
            <div class="row section-header">
                <div class="col-12 text-center">
                    <h3>Some of Our Past Work</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid work-hover" id="work-container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_pelham_cleanup.png" alt="Ground cover bed clean-up in Pelham, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Seasonal Clean-up</h2>
                                <span>Pelham, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_sandown_mow_clean.png" alt="Fall clean-up and final mowing cut in Sandown, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Fall Cleanup and Final Mowing</h2>
                                <span>Sandown, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_rochester_driveway.png" alt="Stone driveway parking area addition in Rochester, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Driveway Parking Addition</h2>
                                <span>Rochester, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_hampton_mowing.png" alt="Weekly mowing service in Hampton, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Lawn Maintenance</h2>
                                <span>Hampton, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_hooksett_mulch.png" alt="Mulch bed installation in Hooksett, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Mulch Installation</h2>
                                <span>Hooksett, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_bedford_cleanup.png" alt="Spring leaf cleanup in Bedford, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Spring Leaf Cleanup</h2>
                                <span>Bedford, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_chester_mow.png" alt="Standard weekly mowing service in Chester, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Lawn Maintenance</h2>
                                <span>Chester, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_boxford_cleanup.png" alt="Heavy spring clean-up in Boxford, MA">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Heavy Spring Clean-up</h2>
                                <span>Boxford, Massachusetts</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_pembroke_mow.png" alt="Standard weekly mowing service in Pembroke, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Lawn Maintenance</h2>
                                <span>Pembroke, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New row -->
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_dover_cleanup.png" alt="Fall leaf clean-up and removal in Dover, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Fall Leaf Clean-up/Removal</h2>
                                <span>Dover, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_manchester_cleanup.png" alt="Fall leaf clean-up and removal in Manchester, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Fall Leaf Clean-up/Removal</h2>
                                <span>Manchester, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 work-item">
                    <div class="work-container">
                        <div class="work-img">
                            <img src="img/past_work_portsmouth_mulch.png" alt="Annual mulch bed refresh in Portsmouth, NH">
                            <span class="work-overlay"></span>
                            <div class="work-description">
                                <h2>Spring Mulch Installation</h2>
                                <span>Portsmouth, New Hampshire</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row section-header">
                <div class="col-12 text-center">
                    <h3>Get in touch with us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="section-text">We're here to help maintain or beautify your property. Your <strong><i>free</i></strong> initial consultation is only a call, text or email away!</p>
                </div>
            </div>
            <div class="row" id="app">
                <div class="col-lg-9">
                    <contact-form></contact-form>
                </div>
                <div class="col-lg-3">
                    <div class="contact-info">
                        <div class="contact-item">
                            <h6>Office Address</h6>
                            <p>2 Main Street<br>Fremont, New Hampshire<br>03044-3319</p>
                        </div>
                        <div class="contact-item">
                            <h6>Phone Number</h6>
                            <p><a href="tel:+1-603-706-0455">+1 (603) 706-0455</a> </p>
                        </div>
                        <div class="contact-item">
                            <h6>Email Address</h6>
                            <p><a href="mailto:contact@mtnview.email">contact@mtnview.email</a></p>
                        </div>
                        <div class="contact-item">
                            <h6>Office Hours</h6>
                            <p>Monday-Friday: <strong>8:00 AM - 5:00 PM</strong><br>
                            Saturday-Sunday: <strong>CLOSED</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">&copy; 2020 Mountain View Landscaping LLC, All Rights Reserved.</div>
                <div class="col-lg-6 col-md-12 links">
                    <a href="{{ route('static.privacy') }}">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="https://instagram.com/mtnviewlandscaping">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/MountainViewLandscapers">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="loginsoon" tabindex="-1" role="dialog" aria-labelledby="loginsoonLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Portal Coming Soon!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>We aren't quite finished with this feature yet. The Mountain View customer portal is expected to go live by March of 2020.</p>
                    <p>We're working diligently this winter to bring you some brand new and incredible online options. Very soon you'll be able to view your service history, pay invoices online, renew your contract, request service changes and much more! In the mean time, if you need to contact us then you can <a class="text-success" href="mailto:contact@mtnview.email">email us</a>, submit the contact form at the bottom of the page or call us at <a class="text-success" href="tel:603-706-0455">(603) 706-0455</a>. We will get back to you as soon as possible during normal business hours (Monday through Friday 8:00 AM to 5:00 PM).</p>
                    <p>Thank you again for your continued support and patience in this exciting year of growth!</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155911325-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-155911325-1');
    </script>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>
