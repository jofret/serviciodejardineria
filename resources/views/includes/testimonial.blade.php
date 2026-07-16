<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Testimonios</p>
                    <h1 class="display-5 mb-5">¿Qué dicen nuestros clientes?</h1>
                    <p class="mb-4">La plena satisfacción de nuestros clientes es nuestro principal objetivo.</p>
                    <!-- <a class="btn btn-primary py-3 px-4" href="">See More</a> -->
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        @foreach($clientes as $cliente)
                        <div class="testimonial-item">
                            @if($cliente->gender=='Masculino')
                            <img class="img-fluid rounded mb-3" src="{{asset('layout/imgs/man.jpg')}}" alt="">
                            @else
                            <img class="img-fluid rounded mb-3" src="{{asset('layout/imgs/woman.jpg')}}" alt="">
                
                            @endif
                            <p class="fs-5">{{$cliente->body}}</p>
                            <h4>{{$cliente->name}}</h4>
                            <span>{{$cliente->profession}}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>