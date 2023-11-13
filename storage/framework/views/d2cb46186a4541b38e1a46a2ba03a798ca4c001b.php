<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Topic Listing Bootstrap 5 Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="<?php echo e(asset('landingpage/css/bootstrap.min.css')); ?>  " rel="stylesheet">

    <link href="<?php echo e(asset('landingpage/css/bootstrap-icons.css')); ?>  " rel="stylesheet">

    <link href="<?php echo e(asset('landingpage/css/templatemo-topic-listing.css')); ?>  " rel="stylesheet">


</head>

<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <i class="bi-back"></i>
                    <span>Topic</span>
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Perolehan Prestasi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">How it works</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">FAQs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="topics-listing.html">Topics Listing</a></li>

                                <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Discover. Learn. Enjoy</h1>

                        <h6 class="text-center">platform for creatives around the world</h6>

                        <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1">

                                </span>

                                <input name="keyword" type="search" class="form-control" id="keyword"
                                    placeholder="Design, Code, Marketing, Finance ..." aria-label="Search">

                                <button type="submit" class="form-control">Search</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="topics-detail.html">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Web Design</h5>

                                        <p class="mb-0">When you search for free CSS templates, you will notice that
                                            TemplateMo is one of the best websites.</p>
                                    </div>

                                    <span class="badge bg-design rounded-pill ms-auto">14</span>
                                </div>

                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_Remote_design_team_re_urdx.png')); ?>  "
                                    class="custom-block-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-block custom-block-overlay">
                            <div class="d-flex flex-column h-100">
                                <img src="<?php echo e(asset('landingpage/images/businesswoman-using-tablet-analysis.jpg')); ?> "
                                    class="custom-block-image img-fluid" alt="">

                                <div class="custom-block-overlay-text d-flex">
                                    <div>
                                        <h5 class="text-white mb-2">Finance</h5>

                                        <p class="text-white">Topic Listing Template includes homepage, listing page,
                                            detail page, and contact page. You can feel free to edit and adapt for your
                                            CMS requirements.</p>

                                        <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn
                                            More</a>
                                    </div>

                                    <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                </div>

                                <div class="social-share d-flex">
                                    <p class="text-white me-4">Share:</p>

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook"></a>
                                        </li></a>
                                </div>

                                <div class="section-overlay"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="explore-section section-padding" id="section_2">
            <div class="container">

                <div class="col-12 text-center">
                    <h2 class="mb-4">Browse Topics</h1>
                </div>

            </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="design-tab" data-bs-toggle="tab"
                                data-bs-target="#design-tab-pane" type="button" role="tab"
                                aria-controls="design-tab-pane" aria-selected="true">Design</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab"
                                data-bs-target="#marketing-tab-pane" type="button" role="tab"
                                aria-controls="marketing-tab-pane" aria-selected="false">Marketing</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="finance-tab" data-bs-toggle="tab"
                                data-bs-target="#finance-tab-pane" type="button" role="tab"
                                aria-controls="finance-tab-pane" aria-selected="false">Finance</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="music-tab" data-bs-toggle="tab"
                                data-bs-target="#music-tab-pane" type="button" role="tab"
                                aria-controls="music-tab-pane" aria-selected="false">Music</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                data-bs-target="#education-tab-pane" type="button" role="tab"
                                aria-controls="education-tab-pane" aria-selected="false">Education</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel"
                                aria-labelledby="design-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Web Design</h5>

                                                        <p class="mb-0">Topic Listing Template based on Bootstrap 5
                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_Remote_design_team_re_urdx.png')); ?> "
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Graphic</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_Redesign_feedback_re_jvm0.png')); ?> "
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Logo Design</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/colleagues-working-cozy-office-medium-shot.png')); ?>"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel"
                                aria-labelledby="marketing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Advertising</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_online_ad_re_ol62.png')); ?>"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Video Content</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_Group_video_re_btu7.png')); ?>"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Viral Tweet</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_viral_tweet_gndb.png')); ?> "
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel"
                                aria-labelledby="finance-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Investment</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_Finance_re_gnv2.png')); ?>"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="<?php echo e(asset('images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg')); ?>"
                                                    class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">Finance</h5>

                                                        <p class="text-white">Lorem ipsum dolor, sit amet consectetur
                                                            adipisicing elit. Sint animi necessitatibus aperiam
                                                            repudiandae nam omnis</p>

                                                        <a href="topics-detail.html"
                                                            class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                                    </div>

                                                    <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                                </div>

                                                <div class="social-share d-flex">
                                                    <p class="text-white me-4">Share:</p>

                                                    <ul class="social-icon">
                                                        <li class="social-icon-item">
                                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                                        </li>

                                                        <li class="social-icon-item">
                                                            <a href="#"
                                                                class="social-icon-link bi-facebook"></a>
                                                        </li>

                                                        <li class="social-icon-item">
                                                            <a href="#"
                                                                class="social-icon-link bi-pinterest"></a>
                                                        </li>
                                                    </ul>

                                                    <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                                </div>

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="music-tab-pane" role="tabpanel"
                                aria-labelledby="music-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Composing Song</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_Compose_music_re_wpiw.png')); ?> "
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Online Music</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_happy_music_g6wc.png')); ?>"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Podcast</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-music rounded-pill ms-auto">20</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_Podcast_audience_re_4i5q.png')); ?>"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="education-tab-pane" role="tabpanel"
                                aria-labelledby="education-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Graduation</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-education rounded-pill ms-auto">80</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_Graduation_re_gthn.png')); ?>"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Educator</h5>

                                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                    </div>

                                                    <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                </div>

                                                <img src="<?php echo e(asset('landingpage/images/topics/undraw_Educator_re_ju47.png')); ?>"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>


        <section class="timeline-section section-padding" id="tentang">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">Bagaimana cara kerjanya?</h1>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>

                                <li>
                                    <h4 class="text-white mb-3">Login ke akun SI Prestasi</h4>

                                    <p class="text-white">
                                        Kamu bisa terlebih dahulu menambahkan akun prestasi-mu di sini<br>
                                        <a href="/login">
                                            <button class="btn btn-primary">
                                                <p style="color: white; margin-bottom: 0; font-size: 15px">
                                                    <strong>Login Akun</strong></p>
                                            </button>
                                        </a>

                                    </p>

                                    <div class="icon-holder">
                                        <i class="bi bi-person-check"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Tambahkan data lomba yang kamu ikuti</h4>

                                    <p class="text-white">
                                        Kamu bisa menuju laman
                                        <button class="btn btn-primary">
                                            <p style="color: white; margin-bottom: 0; font-size: 17px"><strong><i
                                                        class="bi bi-award fs-4"></i> Manajemen Lomba</strong></p>
                                        </button> ,
                                        lalu setelah itu kamu bisa menambahkan data lomba. Setelah disetujui oleh Admin,
                                        data kamu akan terinput di perolehan prestasi.



                                    </p>

                                    <div class="icon-holder">
                                        <i class="bi bi-award"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Perolehan Prestasi</h4>

                                    <p class="text-white">
                                        Data yang sudah disetujui, akan masuk ke perolehan prestasi. Kemudian kamu bisa
                                        melihat perolehan prestasi, serta mengunduhnya 🤌
                                    </p>

                                    <div class="icon-holder">
                                        <i class="bi bi-trophy"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="faq-section section-padding" id="faqs">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Frequently Asked Questions</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="<?php echo e(asset('landingpage/images/faq_graphic.jpg')); ?>" class="img-fluid"
                            alt="FAQs">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Apa itu SI Prestasi?
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p style="text-align: justify">
                                            <strong>Sistem Informasi Prestasi</strong> dirancang untuk mengelola dan
                                            menyediakan informasi terkait dengan manajemen prestasi kamu! <strong>Tujuan
                                                utama</strong> dari <strong>Sistem Informasi Prestasi</strong> adalah
                                            memudahkan pengumpulan, pengelolaan, dan penyebaran informasi mengenai
                                            pencapaian atau prestasi seseorang.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Apakah F2P?
                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p style="text-align: justify">
                                            <strong>Sistem Informasi Prestasi</strong> ini tidak memerlukan biaya apapun
                                            loh!
                                            Alias <strong>GRATIS!</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Bagaimana cara membuat akun?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p style="text-align: justify">
                                            Untuk kamu yang mau daftar kamu bisa klik tombol di bawah ya.. 😁
                                        </p>
                                        <a href="/login">
                                            <button class="btn btn-primary">
                                                <p style="color: white; margin-bottom: 0; font-size: 15px">
                                                    <strong>Daftar Akun</strong></p>
                                            </button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="contact-section section-padding section-bg" id="kontak">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">Informasi Kontak</h2>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <iframe class="google-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1250.6165142835869!2d102.27633868670482!3d-3.7584609890957394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b1c0136b63bd%3A0xcfdfb38a76cae956!2sDekanat%20Fak.Teknik%20UNIB!5e1!3m2!1sid!2sid!4v1699846005380!5m2!1sid!2sid"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-3">
                        <h4 class="mb-3">Dekanat Fakultas Teknik UNIB</h4>

                        <p>Jalan W.R. Supratman Kandang Limun Bengkulu, 38119.</p>

                        <hr>

                        <div class="row">
                            <div class="col-3 d-flex align-items-center ">
                                <p class="">Email</p>
                            </div>
                            <div class="col-3">
                                <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=ft@unib.ac.id&subject=MISSED%20CALL%20EZTRADER&body=
                                "
                                    class="site-footer-link" target="blank">
                                    ft@unib.ac.id
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 d-flex align-items-center ">
                                <p class="">Website</p>
                            </div>
                            <div class="col-3">
                                <a href="http://ft.unib.ac.id/" class="site-footer-link" target="blank">
                                    http://ft.unib.ac.id/
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 d-flex align-items-center ">
                                <p class="">Ikuti kami di</p>
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-1">
                                        <a href="https://web.facebook.com/Fakultas-Teknik-Unib-105643147871160"
                                            class="site-footer-link" target="blank">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a href="https://www.instagram.com/ftunib_official/" class="site-footer-link"
                                            target="blank">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a href="https://twitter.com/humasftunib" class="site-footer-link"
                                            target="blank">
                                            <i class="bi bi-twitter-x"></i>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a href="https://www.youtube.com/channel/UCIhBva6-_i9qwBm6uGTXPKw"
                                            class="site-footer-link" target="blank">
                                            <i class="bi bi-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="index.html">
                        <i class="bi-back"></i>
                        <span>Topic</span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                    <h6 class="site-footer-title mb-3">Resources</h6>
                    <div class="row">
                        <div class="col-md-8">
                            <a href="#" class="site-footer-link">Home</a>
                        </div>
                        <div class="col-md-8">
                            <a href="#" class="site-footer-link">Perolehan Prestasi</a>
                        </div>
                        <div class="col-md-8">
                            <a href="#" class="site-footer-link">How it works</a>
                        </div>
                        <div class="col-md-8">
                            <a href="#" class="site-footer-link">FAQs</a>
                        </div>
                        <div class="col-md-8">
                            <a href="#" class="site-footer-link">Contact</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-12 mt-4 mt-lg-0 ms-auto">

                    <p class="copyright-text mt-lg-5 mt-4">
                        Copyright © 2023 Sistem Informasi Prestasi. All rights reserved.
                    </p>

                </div>

            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="<?php echo e(asset('landingpage/js/jquery.min.js')); ?>  "></script>
    <script src="<?php echo e(asset('landingpage/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpage/js/jquery.sticky.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpage/js/click-scroll.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpage/js/custom.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/layouts/landingpage.blade.php ENDPATH**/ ?>