<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Servicio de corte de pasto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="corte de pasto, jardineria, corte de cesped" name="keywords">
    <meta content="servicio de corte de pasto, jardineria, corte de cesped, buenos aires, zona norte, caba, oeste" name="description">

    @include('includes.links')

    <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
      <meta property="fb:app_id"   content="662918338782216" />
      <meta property="og:url"           content="https://serviciodejardineria.com.ar" />
      <meta property="og:type"          content="website" />
      <meta property="og:image"         content="https://serviciodejardineria.com.ar/layout/imgs/corte_de_pasto.jpg" />
      <meta property="og:title"         content="Servicio de corte de pasto - corte de cesped: caba - zona norte - zona oeste" />
      <meta property="og:image:alt"         content="Servicio de corte de pasto - corte de cesped: caba - zona norte - zona oeste" />
      <meta property="og:image:secure_url" content="https://serviciodejardineria.com.ar/layout/imgs/corte_de_pasto.jpg" />
      <meta property="og:image:type" content="image/jpg" />
      <meta property="og:description"   content="Corte de cesped mantenimiento y jardineria: teléfono 11 388 72 953"/>

    {!! NoCaptcha::renderJs() !!}
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v15.0&appId=662918338782216&autoLogAppEvents=1" nonce="ikQRXPP1"></script>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->



    @include('includes.top-nav')


    <!-- Carousel Start -->
    @include('includes.slider')
    <!-- Carousel End -->

    @yield('clientes_satisfechos')



    <!-- About Start -->
    @include('includes.que-hacemos')
    <!-- About End -->


    <!-- Facts Start -->
<!--     <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="{{asset('layout/img/carousel-1.jpg')}}">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Happy Clients</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Garden Complated</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Dedicated Staff</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Awards Achieved</span>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facts End -->


    <!-- Features Start -->
<!--     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-primary py-3 px-4" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-check fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">100% Satisfaction</h4>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-users fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Dedicated Team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <i class="fa fa-tools fa-3x text-primary"></i>
                                </div>
                                <h4 class="mb-0">Modern Equipment</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features End -->

    


    <!-- Service Start -->
<!--     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Services</p>
                <h1 class="display-5 mb-5">Services That We Offer For You</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{asset('layout/img/service-1.jpg')}}" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{asset('layout/img/img/icon/icon-3.png')}}" alt="Icon">
                            </div>
                            <h4 class="mb-3">Landscaping</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{asset('layout/img/img/service-2.jpg')}}" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{asset('layout/img/icon/icon-6.png')}}" alt="Icon">
                            </div>
                            <h4 class="mb-3">Pruning plants</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{asset('layout/img/service-3.jpg')}}" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{asset('layout/img/icon/icon-5.png')}}" alt="Icon">
                            </div>
                            <h4 class="mb-3">Irrigation & Drainage</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{asset('layout/img/service-4.jpg')}}" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{asset('layout/img/icon/icon-4.png')}}" alt="Icon">
                            </div>
                            <h4 class="mb-3">Garden Maintenance </h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{asset('layout/img/service-5.jpg')}}" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{asset('layout/img/icon/icon-8.png')}}" alt="Icon">
                            </div>
                            <h4 class="mb-3">Green Technology</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{asset('layout/img/service-6.jpg')}}" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{asset('layout/img/icon/icon-2.png')}}" alt="Icon">
                            </div>
                            <h4 class="mb-3">Urban Gardening</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service End -->


    <!-- Quote Start -->
    @include('includes.contact-form')
    <!-- Quote End -->


    <!-- Projects Start -->
<!--     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">Some Of Our Wonderful Projects</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Complete Projects</li>
                        <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('layout/img/service-1.jpg')}}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Landscaping</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('layout/img/service-1.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('layout/img/service-2.jpg')}}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Pruning plants</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('layout/img/service-2.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('layout/img/service-3.jpg')}}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Irrigation & Drainage</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('layout/img/service-3.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('layout/img/service-4.jpg')}}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Garden Maintenance</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('layout/img/service-4.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('layout/img/service-5.jpg')}}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Green Technology</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('layout/img/service-5.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('layout/img/service-6.jpg')}}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Urban Gardening</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('layout/img/service-6.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Projects End -->


    <!-- Testimonial Start -->
    @include('includes.testimonial')
    <!-- Testimonial End -->

    @yield('content')

    <!-- Footer Start -->
    @include('includes.footer')


    @include('includes.scripts')
</body>

</html>