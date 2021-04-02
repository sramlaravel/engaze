@extends('layouts.site')

@section('content')

    <section class="mextreo-hero inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-content">
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">{{$catogry[0]->name}}</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">{{$projects[0]->name}}</h2>
                        <p data-aos="fade-up" data-aos-duration="3500">{{$projects[0]->description}}</p>
                        <p data-aos="fade-up" data-aos-duration="3000">
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-inner-img">
                        <img src="{{asset($projects[0]->image)}}" alt="" data-aos="fade-left" data-aos-duration="2000">
                        <img src="{{asset($projects[0]->image)}}" alt="" class="hero-inner-2" data-aos="fade-up"
                             data-aos-duration="3000">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--<section class="project-gallery">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500"><a data-fancybox="gallery"--}}
                                                                                              {{--href="../assets/img/portfolio/portfolio1.jpg">--}}
                            {{--<img src="../assets/img/portfolio/portfolio1.jpg" alt=""><i class="flaticon-add rp-icon"></i></a>--}}
                        {{--<div class="sp-text">--}}
                            {{--<h3>النيتروجين أبولتريسو</h3>--}}
                            {{--<p>تصميم منزل</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500"><a data-fancybox="gallery"--}}
                                                                                              {{--href="../assets/img/portfolio/portfolio2.jpg">--}}
                            {{--<img src="../assets/img/portfolio/portfolio2.jpg" alt=""><i class="flaticon-add rp-icon"></i></a>--}}
                        {{--<div class="sp-text">--}}
                            {{--<h3>--}}
                                {{--النيتروجين أبولتريسو</h3>--}}
                            {{--<p>تصميم منزل</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000"><a data-fancybox="gallery"--}}
                                                                                              {{--href="../assets/img/portfolio/portfolio3.jpg">--}}
                            {{--<img src="../assets/img/portfolio/portfolio3.jpg" alt=""><i class="flaticon-add rp-icon"></i></a>--}}
                        {{--<div class="sp-text">--}}
                            {{--<h3>--}}
                                {{--النيتروجين أبولتريسو</h3>--}}
                            {{--<p>تصميم منزل</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500"><a data-fancybox="gallery"--}}
                                                                                              {{--href="../assets/img/portfolio/portfolio4.jpg">--}}
                            {{--<img src="../assets/img/portfolio/portfolio4.jpg" alt=""><i class="flaticon-add rp-icon"></i></a>--}}
                        {{--<div class="sp-text">--}}
                            {{--<h3>--}}
                                {{--النيتروجين أبولتريسو</h3>--}}
                            {{--<p>تصميم منزل</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-8">--}}
                    {{--<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500"><a data-fancybox="gallery"--}}
                                                                                              {{--href="../assets/img/portfolio/portfolio5.jpg">--}}
                            {{--<img src="../assets/img/portfolio/portfolio5.jpg" alt=""><i class="flaticon-add rp-icon"></i></a>--}}
                        {{--<div class="sp-text">--}}
                            {{--<h3>--}}
                                {{--النيتروجين أبولتريسو</h3>--}}
                            {{--<p>تصميم منزل</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000"><a data-fancybox="gallery"--}}
                                                                                              {{--href="../assets/img/portfolio/portfolio6.jpg">--}}
                            {{--<img src="../assets/img/portfolio/portfolio6.jpg" alt=""><i class="flaticon-add rp-icon"></i></a>--}}
                        {{--<div class="sp-text">--}}
                            {{--<h3>--}}
                                {{--النيتروجين أبولتريسو</h3>--}}
                            {{--<p>تصميم منزل</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500"><a data-fancybox="gallery"--}}
                                                                                              {{--href="../assets/img/portfolio/portfolio7.jpg">--}}
                            {{--<img src="../assets/img/portfolio/portfolio7.jpg" alt=""><i class="flaticon-add rp-icon"></i></a>--}}
                        {{--<div class="sp-text">--}}
                            {{--<h3>--}}
                                {{--النيتروجين أبولتريسو</h3>--}}
                            {{--<p>تصميم منزل</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}



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





    {{--<div class="dft-content">--}}
                            {{--<div class="tab-content" id="nav-tabContent">--}}
                                {{--<div class="tab-pane fade show active" id="nav-Breakfast" role="tabpanel" aria-labelledby="nav-Breakfast-tab">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="dft-menus">--}}

                                                    {{--<ul class="dft-menulist">--}}
                                                        {{--@isset($breackfast)--}}
                                                        {{--@foreach($breackfast as $food)--}}
                                                        {{--<li>--}}
                                                            {{--<div class="dft-single-list">--}}

                                                                {{--<div class="dftsl-text">--}}
                                                                    {{--<h4>{{$food->name}}</h4>--}}
                                                                    {{--<p>{{$food->description}}. </p>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="dfsl-price">--}}
                                                                    {{--<h3><span>ريال</span>{{$food->price}}</h3>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</li>--}}
                                                        {{--@endforeach--}}

                                                        {{--@endisset--}}

                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="dft-img">--}}
                                                {{--<img src="{{asset($breackfast[0]->image)}}" alt="">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tab-pane fade" id="nav-Lunch" role="tabpanel" aria-labelledby="nav-Lunch-tab">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="dft-menus">--}}
                                                {{--<ul class="dft-menulist">--}}
                                                    {{--@isset($Lunch)--}}
                                                    {{--@foreach($Lunch as $food)--}}
                                                        {{--<li>--}}
                                                            {{--<div class="dft-single-list">--}}

                                                                {{--<div class="dftsl-text">--}}
                                                                    {{--<h4>{{$food->name}}</h4>--}}
                                                                    {{--<p>{{$food->description}}. </p>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="dfsl-price">--}}
                                                                    {{--<h3><span>ريال</span>{{$food->price}}</h3>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</li>--}}
                                                    {{--@endforeach--}}
                                                    {{--@endisset--}}

                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="dft-img">--}}
                                                {{--<img src="{{asset($Lunch[0]->image)}}" alt="">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tab-pane fade" id="nav-Dinner" role="tabpanel" aria-labelledby="nav-Dinner-tab">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="dft-menus">--}}
                                                {{--<ul class="dft-menulist">--}}
                                                    {{--@isset($Dinner)--}}
                                                    {{--@foreach($Dinner as $food)--}}
                                                        {{--<li>--}}
                                                            {{--<div class="dft-single-list">--}}

                                                                {{--<div class="dftsl-text">--}}
                                                                    {{--<h4>{{$food->name}}</h4>--}}
                                                                    {{--<p>{{$food->description}}. </p>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="dfsl-price">--}}
                                                                    {{--<h3><span>ريال</span>{{$food->price}}</h3>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</li>--}}
                                                    {{--@endforeach--}}
                                                    {{--@endisset--}}

                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="dft-img">--}}
                                                {{--<img src="{{asset($Dinner[0]->image)}}" alt="">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}



@stop
