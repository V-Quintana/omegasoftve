@extends('layouts.web.base')
@section('title', 'Omegasoft - Newsletter')
@section('description', 'Manténgase al día con nuestros boletines semanales, informándose sobre los productos, soluciones, promociones y las tendencias actuales que le ayudaran a lograr una gestión de servicios IT eficiente.')
@section('content')
    <section class="page-title">
        <div class="image-layer" 
             style="opacity: 10.0;">
                <img src="{{ URL::to('/') }}/images/background/NewsLetter2.jpg" alt="BOLETINES_TECNOLOGIA">
             </div>
        <div class="auto-container">
        </div>
    </section>

    <section style="padding-bottom: 40px">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 40px;">

                        <div class="auto-container">
                            <div class="sec-title-two centered " style="margin-bottom: 10px;">
                                <h1 style="font-size:30px; ">Newsletter-Omegasoft</h1>
                            </div>
                        </div>
        

                        <div class="sec-title" style="margin-bottom: 0px; text-align: center;">
                            <div class="text tipoGrafia" style="padding-right: 15px;padding-left:15px;">
                                Te invitamos a que te suscribas a nuestros boltines semanales, para que te mantegas 
                                informado de las novedades en el área de Tecnología y las mejores prácticas ITIL.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    
    <section>
        <div class="auto-container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right: 50px;">
                    <div class="sec-title centered">
                        <div class="text" style="text-align: center;">
                            <h1 style="font-size: 30px;padding-top: 12px;">Suscríbase a nuestros boletines</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title centered" style="margin-bottom: 0px">
                        <div class="" style="margin-top: 23px;">
                            {{ Form::open(array('route' => 'newsletter.send', 'id' => 'form-newsletter-form')) }}
                                <div class="input-group mb-3">
                                    <input
                                    name="email"
                                    required
                                    type="email" class="form-control" 
                                    placeholder="Email ID" aria-label="Email" 
                                    aria-describedby="button-addon2">
                                    <div
                                        class="recaptcha-hide" 
                                        id="g-recaptcha-newsletter"
                                        data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
                                        data-callback="send_newsletter"
                                        data-size="invisible">
                                    </div>
                                    <div class="input-group-append">
                                        <button 
                                        style="background: green; color: white; font-size: 15px;" 
                                        class="btn btn-outline-secondary btn-send" type="submit">Enviar</button>
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                    <div class="sec-title centered">
                        <div class="text" style="text-align: initial; font-size: 13px;">
                            <div>Nota: Nunca venderemos o compatiremos su direccion de correo electronico</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="sec-title centered">
                        
                        @foreach($newsletters as $item)
                            <div class="news-block-two col-md-4 col-sm-6 col-xs-12">
                                <div class="news-block-one" style = "border: 1px solid #cecbcb;">
                                    <div class="inner-box" style="text-align: left;">
                                        <div align="center">
                                            <figure   class="image-box"><a href="{{ route('newsletter-name', str_slug($item->title)) }}">
                                                <img 
                                                style = "height:200px; width:240px;"
                                                src="{{ URL::to('/').'/newsletters/'.$item->id.'/'.$item->imagen }}" alt=""></a>
                                            </figure>
                                        </div>
                                        <h3 style = "padding-right: 20px; padding-left: 20px;" >
                                        <a href="{{ route('newsletter-name', str_slug($item->title)) }}"> <?php echo Str::limit($item->title, 25, '..') ?></a></h3>
                                        
                                        
                                        <div class="text" style = "padding-right: 20px; padding-left: 20px;padding-top: 0px;">
                                        <?php echo Str::limit($item->content, 120, '...') ?>
                                            <div style = "padding-top: 20px;">
                                                <button > 
                                                    <a  class = "btn-leer-mas" href="{{ route('newsletter-name', str_slug($item->title)) }}">Leer mas</a>
                                                </button>
                                                <span style = "padding-left: 145px;" class="post-info">{{$item->created_at->format('m-Y')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                       
                </div>
            </div>
        </div>
        <div  align="center" >
            <!-- Styled Pagination -->
            {{ $newsletters->links('pagination.default') }}
        </div>
    </section>

@endsection