<div class="container-fluid quote my-5 py-5" data-parallax="scroll" data-image-src="{{asset('layout/img/carousel-2.jpg')}}" id="contact_form">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-5 text-center mb-5">Contáctenos</h1>
                        <form action="{{url('sendemail/sendContact')}}#contact_form" method="POST">
                            {{ csrf_field() }}
                            @if(count( $errors) > 0)
                            <div class="alert alert-danger" style="margin-top:10px">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <ul>
                                    @foreach( $errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block text-danger" role="alert">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif

                            @if($message = Session::get('success'))
                                <div class="alert alert-success alert-block" style="margin-top:10px">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control bg-light border-0" id="gname" placeholder="Gurdian Name" required>
                                        <label for="gname">Nombre</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input name="email" type="email" class="form-control bg-light border-0" id="gmail" placeholder="Gurdian Email" required>
                                        <label for="gmail">Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input name="telephone" type="text" class="form-control bg-light border-0" id="cname" placeholder="Child Name" required>
                                        <label for="cname">Teléfono</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input name="service" type="text" class="form-control bg-light border-0" id="cage" placeholder="Child Age" required>
                                        <label for="cage">Servicio</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="message" class="form-control bg-light border-0" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                                        <label for="message">Mensaje</label>
                                    </div>
                                </div>
                                
                                {!! NoCaptcha::display() !!}
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary py-3 px-4" type="submit">Enviar Ahora</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>