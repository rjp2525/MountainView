<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>Services We Offer - Mountain View Landscaping</title>
    <meta name="description" content="If you're looking for landscaping services in the Rockingham or Merrimack NH areas we have you covered. Check out our complete list of services including snow removal, lawn care and maintenance, trimming, hardscaping design and installation and more!">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />

    <!-- Social Media Sharing -->
    <meta property="og:site_name" content="Mountain View Landscaping, LLC">
    <meta property="og:title" content="Landscaping Services Offered to Southern New Hampshire">
    <meta property="og:description" content="Looking for landscaping services in the Rockingham or Merrimack NH area? We have you covered! Check out our complete list of services including snow removal, lawn care and maintenance, trimming, hardscaping design and installation and more!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mountainviewlandscapers.com/services">
    <meta property="og:image" content="https://mountainviewlandscapers.com/img/social_share_card.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Mountain View Landscaping - Serving Southern New Hampshire's Landscaping and Lawn Care Needs">
    <meta property="twitter:description" content="Looking for landscaping services in the Rockingham or Merrimack NH area? We have you covered! Check out our complete list of services including snow removal, lawn care and maintenance, trimming, hardscaping design and installation and more!">
    <meta property="twitter:url" content="https://mountainviewlandscapers.com/services">
    <meta property="twitter:image" content="https://mountainviewlandscapers.com/img/social_share_card.png">

    <!-- CSS -->
    <script src="https://kit.fontawesome.com/bb0ff28fce.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/homepage.css') }}">
</head>
<body id="top">
    <header class="main-header header-with-top dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-dark rounded">
                        <a href="{{ route('static.homepage') }}" class="navbar-brand logo d-flex mr-auto">Mountain View</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="navbar-collapse collapse w-100" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="{{ route('static.homepage') }}" class="nav-link single">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.homepage') }}" class="nav-link single">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.services') }}" class="nav-link single">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.homepage') }}" class="nav-link single">Our Work</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.homepage') }}" class="nav-link single">Contact</a>
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
    <section class="page-header-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h1>Services</h1>
                </div>
                <div class="col-md-4 col-sm-12 text-right bcrumbs">
                    <div class="breadcrumbs">
                        <a href="{{ route('static.homepage') }}">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <span class="current">Services</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row section-header">
                <div class="col-12 text-center">
                    <h3>Quality Landscaping Services</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="section-text">Increase curb appeal with beautiful landscaping! You don't have to juggle multiple contractors and landscaping services to have a well-maintained lawn or landscape. Mountain View Landscaping offers sustainable landscaping services that will keep your residential or commercial landscape in peak condition all year long.</p>
                </div>
            </div>
            <div class="row services-full">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 text-center service-image">
                            <div class="single-image">
                                <img src="img/rounded_mowing.svg" alt="Commercial and residential mowing services">
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <h4 class="service-title">Commercial and Residential Lawn Maintenance</h4>
                            <p>Regular weekly lawn care and maintenance in the Rockingham and Merrimack County areas are key to preserving a beautiful, healthy yard all year round. You've worked hard to create the outdoor living environment of your dreams, probably spent a good amount of money developing that high quality landscape at your home or business too. That's why Mountain View Landscaping's lawn care and maintenance services are here to help keep it healthy and looking its best all season long!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row services-full">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 text-center service-image">
                            <div class="single-image">
                                <img src="img/rounded_hedge_trimming.svg" alt="Hedge, Bush and Tree Pruning/Trimming">
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <h4 class="service-title">Hedge, Bush and Tree Pruning/Trimming</h4>
                            <p>Beyond enhancing your garden and improving home value, a professional bush and tree pruning or trimming keeps your planted features healthy and less prone to attracting unwanted pests. Removing dead, broken or diseased areas of your bushes promotes new growth and leads to denser coverage. Mountain View Landscaping is licensed and insured to trim all types and sizes of bushes, hedges and shrubs. We'll work with you to get everything in great shape then discuss an ongoing trimming plan to ensure those shrubs stay healthy and happy for years to come.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row services-full">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 text-center service-image">
                            <div class="single-image">
                                <img src="img/rounded_mulch.svg" alt="Mulch bed refreshing and installation">
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <h4 class="service-title">Mulch Bed Installation and Refreshing</h4>
                            <p>We can help make your landscape look better than ever with proper edging, mulching and weeding. Your trees, shrubs and bedding plants will benefit from this routine mulching service as mulch helps retain as much as 35% of moisture. Fresh and properly installed mulch not only makes your landscape features beautiful, but it also helps with weed control, temperature control, and the introduction of organic material to your landscape beds. The mulch we use is a cedar blend unless otherwise requested, which serves as a natural bug repellent.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row services-full">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 text-center service-image">
                            <div class="single-image">
                                <img src="img/rounded_leaf_removal.svg" alt="Seasonal leaf clean-up and removal">
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <h4 class="service-title">Spring, Fall Leaf Clean-up and Removal</h4>
                            <p>We live in New England, one of the top peak fall foliage viewing desinations in the country. We have a lot of leaves up here and often times it can be cumbersome to rake them up, bag them and discard of all that yard debris when the season ends. Sometimes you get busy and it turns into a spring clean-up. Mountain View Landscaping is fully equipped to take on the largest (or smallest) leaf removals and clean-ups in area. We also offer a curbside pickup option!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row services-full">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 text-center service-image">
                            <div class="single-image">
                                <img src="img/rounded_snow_removal.svg" alt="Snow plowing, sidewalk shoveling and ice management">
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <h4 class="service-title">Snow Plowing, Sidewalk Shoveling and Ice Management</h4>
                            <p>There is no doubt that New England winters are brutal and bring plenty of snow and ice. When that winter weather strikes, Mountain View Landscaping is prepared to serve both residential and commercial customers. We offer full service snow plowing, sidewalk and walkway shoveling, sanding and salting to keep your home or business safe from any potential winter hazards. Our team is on call 24/7 during snow events!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row services-full">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 text-center service-image">
                            <div class="single-image">
                                <img src="img/rounded_design.svg" alt="Landscape design and installation">
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <h4 class="service-title">Landscape Feature Design &amp; Installation</h4>
                            <p>Every outdoor feature on your property is part of a complete landscape. Mountain View Landscaping can design and install each elemeent so you have a picturesque and inviting outdoor space. Our residential and commercial landscape design and installation services include walkways, patios, sod, plants, trees, patios, retaining walls, landscape lighting and more! From the time we collaborate on the design of your first landscape feature to the continued maintenance of your gardens over the years, you’ll reap the benefits of our wide range of services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row services-full">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 text-center service-image">
                            <div class="single-image">
                                <img src="img/rounded_hydroseed.svg" alt="Hydroseeding">
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <h4 class="service-title">Hydroseeding and New Lawn Installation</h4>
                            <p>Hydroseeding is a process in whcih seed and a combinations of fertilizer, biostimulants, moisture retention polymers, tactifiers and other additives are combined with water and a hydroseeding mulch to form a slurry. This slurry is sprayed onto the ground to establish vegetation and erosion control. It's a cost effective, more disease resistant and an overall healthier grass option than sod. Whether your lawn is completely dead or suffers from patchy areas, Mountain View Landscaping can help discuss how hydroseeding can be applied to get your lawn popping again!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row services-full">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 text-center service-image">
                            <div class="single-image">
                                <img src="img/rounded_irrigation.svg" alt="Irrigation system installation and maintenance">
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <h4 class="service-title">Irrigation System Maintenance and Installation</h4>
                            <p>Properly designed, installed, maintained and managed lawn and garden irrigation/sprinkler systems provide beautiful landscapes and optimize irrigation water usage. The irrigation team at Mountain View Landscaping works closely with customers to meet their unique needs through every step of the process. We offer design and installation as well as seasonal winterization and spring enables, inspections, adjustments and testing!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact noheading" id="contact">
        <div class="container">
            <div class="row contact-info">
                <div class="col-lg-3">
                    <div class="contact-item">
                        <h6>Office Address</h6>
                        <p>2 Main Street<br>Fremont, New Hampshire<br>03044-3319</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-item">
                        <h6>Phone Number</h6>
                        <p><a href="tel:+1-603-706-0455">+1 (603) 706-0455</a> </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-item">
                        <h6>Email Address</h6>
                        <p><a href="mailto:contact@mtnview.email">contact@mtnview.email</a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-item">
                        <h6>Office Hours</h6>
                        <p>Monday-Friday: <strong>8:00 AM - 5:00 PM</strong><br>
                        Saturday-Sunday: <strong>CLOSED</strong></p>
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120534481-2"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-120534481-2');</script>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>
