@extends('layouts.site')

@section('content')


    <div class="hero-social">
        <ul>
            <li data-aos="fade-up" data-aos-duration="1500"><a href="#"><i class="flaticon-twitter"></i></a></li>
            <li data-aos="fade-up" data-aos-duration="2000"><a href="#"><i class="flaticon-facebook"></i></a></li>
            <li data-aos="fade-up" data-aos-duration="2500"><a href="#"><i class="flaticon-instagram"></i></a></li>
            <li data-aos="fade-up" data-aos-duration="3000"><a href="#"><i class="flaticon-linkedin"></i></a></li>
        </ul>
    </div>


    <section class="mextreo-hero inner mar-bot-140">
        <div class="container">
            @isset($about)
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-content">
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">EngazeSoft</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">معلومات عنا</h2>
                        <p data-aos="fade-up" data-aos-duration="2500"> {{$about[0]->description}}

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-inner-img">
                        <img src="{{asset($about[0]->image)}}" alt="" data-aos="fade-left" data-aos-duration="2000">
                        <img src="{{asset($about[1]->image)}}" alt="" class="hero-inner-2" data-aos="fade-up"
                             data-aos-duration="3000">
                    </div>
                </div>
            </div>
            @endisset
        </div>
    </section>


    <section class="mextreo-about pt-res-50">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-md-1 order-2">
                    <div class="about-bg" data-aos="fade-left" data-aos-duration="3000">
                        <img src="{{$about[2]->image}}" alt="">
                    </div>
                    <div class="m-about-img" data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{asset($about[3]->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 order-md-2 order-1">
                    <div class="m-about-content">
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">التاريخ</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">تاريخنا</h2>
                        <p data-aos="fade-up" data-aos-duration="2500">{{$about[1]->description}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mextreo-blog">
        <div class="container">
            <div class="mex-blog-top">
                <h2 class="mb-tittle">أخبار</h2>
                <h6 class="ht-tittle" data-aos="fade-up" data-aos-duration="2000">أحدث الأخبار</h6>
                <h2 data-aos="fade-up" data-aos-duration="3000">من مدونتنا</h2>
            </div>
            <div class="row">
                @isset($news)
                @foreach($news as $new)
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="single-blog">
                            <img src="{{asset( $new->news_img)}} " alt="">
                            <div class="sb-content">
                                <a href="{{URL::to('detail/'.$new->id) }}">
                                    <h3>{{$new->news_title}} </h3>
                                    <p>{{ str_limit($new->news_desc,35,'...') }}
                                </a>
                                <p>{{$new->created_at->toDateString() }}</p>
                                <a href="{{URL::to('detail/'.$new->id) }}" class="read-more-btn-1">اقرأ أكثر<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                @endforeach
                @endisset
            </div>


        </div>
    </section>




    {{----}}
    {{----}}
    {{--<section class="breadcrumb-area">--}}
        {{--<img src="../assets/img/bg/innerpage-breadcrumb-bg-1.jpg" alt="" class="breadcrumb-bg">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="breadcrumb-box">--}}
                        {{--<h3 class="page-title">معلومات عنا</h3>--}}
                        {{--<ul class="breadcrumb-list">--}}
                            {{--<li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>--}}
                            {{--<li>معلومات عنا</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    {{--<section class="about2-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="testimonial-img aboutp3-img">--}}
                        {{--<img src=" {{asset($about[0]->image)}}" alt="">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="section-text about1-text a2text">--}}
                        {{--<div class="section-titleV2">--}}
                            {{--<h3> حول {{ $about[0]->title }} </h3>--}}
                        {{--</div>--}}
                        {{--<p>{{ $about [0]->description }}--}}


                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="section-text about1-text a2text">--}}
                        {{--<div class="section-titleV2">--}}
                            {{--<h3>      قصتنا مع  {{ $about[1]->title }}  </h3>--}}
                        {{--</div>--}}
                        {{--<p>{{ $about [1]->description }}--}}
                        {{--</p>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="aboutp4-img">--}}
                        {{--<img src=" {{asset($about[1]->image)}}" alt="">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    {{--<section class="blog-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}

                {{--<div class="col-md-12">--}}
                    {{--<div class="section-titleV1">--}}
                        {{--<p>أخبارنا</p>--}}
                        {{--<h3>آخر المشاركات</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--@isset($news)--}}
                {{--@foreach($news as $new)--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="single-blogV1">--}}
                            {{--<div class="sb-img">--}}
                                {{--<img src="{{asset( $new->news_img)}} " alt="">--}}
                            {{--</div>--}}
                            {{--<div class="sb-text">--}}
                                {{--<ul class="sb-meta">--}}
                                    {{--<li>بواسطة<a href="#">مشرف</a></li>--}}

                                    {{--<li>{{$new->created_at->toDateString() }}</li>--}}
                                {{--</ul>--}}
                                {{--<a href="{{URL::to('detail/'.$new->id) }}"><h4>{{$new->news_title}}</h4></a>--}}
                                {{--<p>{{ str_limit($new->news_desc,35,'...') }}--}}
                                {{--</p>--}}
                                {{--<a href="{{URL::to('detail/'.$new->id) }}" class="read-more-btn-1">اقرأ أكثر<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--@endforeach--}}
                {{--@endisset--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


@stop
