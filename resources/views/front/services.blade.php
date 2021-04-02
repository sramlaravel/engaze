@extends('layouts.site')

@section('content')

    <section class="mextreo-hero inner mar-bot-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-content">

                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">خدمتنا</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">{{$Customer[0]->name}}</h2>
                        <p data-aos="fade-up" data-aos-duration="2500">{{$Customer[0]->description}}
                        </p>
                        @isset($Customer)
                        @foreach($Customer as $key => $Custom)
                            @if($key > 0)
                        <ul>
                            <li data-aos="fade-up" data-aos-duration="3000">{{$Custom->name}}</li>

                        </ul>
                            @endif
                        @endforeach
                        @endisset
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-inner-img">
                        <img src="{{asset($Customer[0]->image)}}" alt="" data-aos="fade-left" data-aos-duration="2000">
                        <img src="{{asset($Customer[1]->image)}}" alt="" class="hero-inner-2" data-aos="fade-up"
                             data-aos-duration="3000">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="architect">
        <div class="container">
            <div class="row">
                <div class="col-md-7 order-md-1 order-2">
                    <div class="archit-img" data-aos="fade-up" data-aos-duration="2500">
                        <img src="{{asset($Customer[1]->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                    <div class="ab-arch-content">
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="2500">{{$Customer[1]->name}}</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">{{$Customer[1]->name}} </h2>
                        <p data-aos="fade-up" data-aos-duration="2500">{{$Customer[1]->description}}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="interior">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="ab-interior-content">
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="2500">{{$Customer[2]->name}}</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">{{$Customer[2]->name}}</h2>
                        <p data-aos="fade-up" data-aos-duration="2500">{{$Customer[2]->description}}  </p>

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="interior-img" data-aos="fade-up" data-aos-duration="2500">
                        <img src="{{asset($Customer[2]->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="architect">
        <div class="container">
            <div class="row">
                <div class="col-md-7 order-md-1 order-2">
                    <div class="archit-img" data-aos="fade-up" data-aos-duration="2500">
                        <img src="{{asset($Customer[3]->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                    <div class="ab-arch-content">
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="2500">{{$Customer[3]->name}}</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">{{$Customer[3]->name}} </h2>
                        <p data-aos="fade-up" data-aos-duration="2500">{{$Customer[3]->description}}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mextreo-about product">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-md-1 order-2">
                    <div class="about-bg ab-img-2" data-aos="fade-left" data-aos-duration="3000">
                        <img src="{{asset($Customer[4]->image)}}" alt="">
                    </div>
                    <div class="m-about-img mb-pro" data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{asset($Customer[5]->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 order-md-2 order-1">
                    <div class="m-about-content">
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">{{$Customer[4]->name}}</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">{{$Customer[4]->name}}</h2>
                        <p data-aos="fade-up" data-aos-duration="2500">{{$Customer[4]->description}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="interior">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="ab-interior-content">
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="2500">{{$Customer[5]->name}}</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">{{$Customer[5]->name}}</h2>
                        <p data-aos="fade-up" data-aos-duration="2500">{{$Customer[5]->description}}  </p>

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="interior-img" data-aos="fade-up" data-aos-duration="2500">
                        <img src="{{asset($Customer[5]->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="architect">
        <div class="container">
            <div class="row">
                <div class="col-md-7 order-md-1 order-2">
                    <div class="archit-img" data-aos="fade-up" data-aos-duration="2500">
                        <img src="{{asset($Customer[6]->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                    <div class="ab-arch-content">
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="2500">{{$Customer[6]->name}}</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">{{$Customer[6]->name}} </h2>
                        <p data-aos="fade-up" data-aos-duration="2500">{{$Customer[6]->description}}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
