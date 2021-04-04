@extends('layouts.site')

@section('content')


  <section class="mextreo-hero">
        <div class="container">

            <div class="row">

                <div class="hero-slide">

                    <p class="rs-p-wp-fix"></p>
                    <rs-module-wrap id="rev_slider_22_1_wrapper" data-alias="slider-2" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                        <rs-module id="rev_slider_22_1" style="display:none;" data-version="6.1.8">

                            <rs-slides>
                                @isset($sliders)
                                @foreach($sliders as $slider)

                                <rs-slide data-key="rs-{{asset($slider->id)}}" data-title="Slide" data-thumb="assets/slide2-1-50x100.jpg" data-anim="ei:d,d;eo:d,d;s:1000,d;r:0,0;t:zoomout,scaledownfromright;sl:d,d;" data-sloop="s:4000;e:9000;">

                                    <img src=" {{asset($slider->image)}}" title="{{asset($slider->id)}}" width="1344" height="537" data-parallax="off" data-panzoom="d:10000;ss:100;se:120%;rs:0deg;re:0deg;bs:0px;be:0px;os:0px/0px;oe:-300px/0px;" class="rev-slidebg" data-no-retina>

                                    <rs-layer id="slider-22-slide-33-layer-0" data-type="shape" data-rsp_ch="on" data-text="w:normal;" data-dim="w:100%;h:100%;" data-frame_999="o:0;st:5000;sp:1460;sR:4700;" style="z-index:8;background-color:rgba(23,22,22,0.71);">
                                    </rs-layer>

                                    <rs-layer id="slider-22-slide-33-layer-1" class="rs-pxl-1" data-type="text" data-color="#fff" data-rsp_ch="on" data-xy="x:c;xo:3px;y:343px;" data-text="w:normal;s:90;l:90;fw:900;a:center;" data-dim="minh:0px;" data-frame_0="y:50;" data-frame_1="e:Power0.easeInOut;st:230;sp:1500;sR:230;" data-frame_999="y:0;o:0;rX:70deg;oZ:-50;e:Power4.easeInOut;st:5000;sp:1750;sR:3270;" data-loop_999="crd:t;rA:1;" style="z-index:11;font-family:Chronicle Display;text-transform:capitalize;">

                                        {{$slider->title}}<br />
                                    </rs-layer>

                                    <rs-layer id="slider-22-slide-33-layer-3" data-type="text" data-color="#fff" data-rsp_ch="on" data-xy="x:c;y:458px;" data-text="w:normal;s:18;l:30;ls:0px;fw:500;a:center;" data-dim="w:570px;minh:0px;" data-frame_0="y:50;" data-frame_1="sp:2500;" data-frame_999="y:0;o:0;rX:70deg;oZ:-50;e:Power4.easeInOut;st:5000;sp:1750;sR:3000;" style="z-index:12;font-family:Gotham Narrow;" > {{$slider ->description}}
                                    </rs-layer>
                                    <a id="slider-22-slide-33-layer-4" class="rs-layer hero-btn rev-btn" href="project.html" target="_self" rel="nofollow" data-type="button" data-color="#ffffff" data-rsp_ch="on" data-xy="x:c;y:570px;" data-text="w:normal;s:15;l:25;" data-dim="minh:0px;" data-padding="t:20;r:35;b:20;l:35;" data-frame_0="y:50;" data-frame_1="sp:2500;" data-frame_999="y:0;o:0;rX:70deg;oZ:-50;e:Power4.easeInOut;st:5000;sp:1750;sR:2500;" data-frame_hover="rX:0deg;rY:0deg;rZ:0deg;bgc:#dbaa6f;bor:0px,0px,0px,0px;bri:120%;iC:true;" style="z-index:13;background-color:#dcbc95;font-family:Gotham Narrow;text-transform:uppercase;cursor:pointer;">إكتشف أكثر
                                    </a>

                                    <rs-layer id="slider-22-slide-33-layer-7" class="rs-pxl-1" data-type="text" data-color="#fff" data-rsp_ch="on" data-xy="x:c;y:248px;" data-text="w:normal;s:90;l:90;fw:900;a:center;" data-dim="minh:0px;" data-frame_0="y:50;" data-frame_1="e:Power0.easeInOut;sp:1430;" data-frame_999="y:0;o:0;rX:70deg;oZ:-50;e:Power4.easeInOut;st:5000;sp:1750;sR:3570;" data-loop_999="crd:t;rA:1;" style="z-index:10;font-family:Chronicle Display;text-transform:capitalize;">

                                    </rs-layer>
                                    <a id="slider-22-slide-33-layer-9" class="rs-layer" href="#" target="_self" rel="nofollow" data-type="text" data-color="#a3a3a3" data-rsp_ch="on" data-xy="x:154px;y:446px;" data-text="w:normal;s:25;l:50;" data-frame_0="y:50;" data-frame_1="e:Power0.easeInOut;sp:1600;" data-frame_999="o:0;st:5000;" data-frame_hover="c:#dcbc95;" style="z-index:14;font-family:Roboto;cursor:pointer;"><i class="fa-facebook-f"></i>
                                    </a>
                                    <a id="slider-22-slide-33-layer-10" class="rs-layer" href="#" target="_self" rel="nofollow" data-type="text" data-color="#a3a3a3" data-rsp_ch="on" data-xy="x:152px;y:403px;" data-text="w:normal;s:25;l:50;" data-frame_0="y:50;" data-frame_1="e:Power0.easeInOut;sp:1500;" data-frame_999="o:0;st:5000;" data-frame_hover="c:#dcbc95;" style="z-index:15;font-family:Roboto;cursor:pointer;"><i class="fa-twitter"></i>
                                    </a>
                                    <a id="slider-22-slide-33-layer-11" class="rs-layer" href="#" target="_self" rel="nofollow" data-type="text" data-color="#a3a3a3" data-rsp_ch="on" data-xy="x:151px;y:531px;" data-text="w:normal;s:25;l:50;" data-frame_0="y:50;" data-frame_1="e:Power0.easeInOut;sp:2000;" data-frame_999="o:0;st:5000;" data-frame_hover="c:#dcbc95;" style="z-index:16;font-family:Roboto;cursor:pointer;"><i class="fa-linkedin"></i>
                                    </a>
                                    <a id="slider-22-slide-33-layer-12" class="rs-layer" href="#" target="_self" rel="nofollow" data-type="text" data-color="#a3a3a3" data-rsp_ch="on" data-xy="x:151px;y:491px;" data-text="w:normal;s:25;l:50;" data-frame_0="y:50;" data-frame_1="e:Power0.easeInOut;sp:1700;" data-frame_999="o:0;st:5000;" data-frame_hover="c:#dcbc95;" style="z-index:17;font-family:Roboto;cursor:pointer;"><i class="fa-instagram"></i>
                                    </a>

                                    <rs-layer id="slider-22-slide-33-layer-13" data-type="shape" data-rsp_ch="on" data-xy="x:162px;y:303px;" data-text="w:normal;" data-dim="w:2px;h:100px;" data-frame_0="y:50;" data-frame_1="e:Power0.easeInOut;sp:1200;" data-frame_999="o:0;st:5000;" data-frame_hover="bgc:#dcbc95;" style="z-index:5;background-color:#dcbc95;">
                                    </rs-layer>


                                </rs-slide>
                                @endforeach
                                @endisset
                            </rs-slides>
                            <rs-static-layers>

                            </rs-static-layers>
                            <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                        </rs-module>
                    </rs-module-wrap>

                </div>

            </div>

        </div>
    </section>


    <section class="mextreo-about">
        <div class="container">
            @isset($about)
            <div class="row">
                <div class="col-md-5 order-md-1 order-2">
                    <div class="about-bg" data-aos="fade-left" data-aos-duration="3000">
                        <img src=" {{asset($about[1]->image)}}" alt="">
                    </div>
                    <div class="m-about-img" data-aos="fade-up" data-aos-duration="3000">
                        <img src=" {{asset($about[0]->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-7 order-md-2 order-1">
                    <div class="m-about-content">
                        <h2 class="ab-tittle">EngazSoft</h2>
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">معلومات عنا</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">  حول {{ $about[0]->title }}</h2>
                        <p data-aos="fade-up" data-aos-duration="2500">{{ $about[0]->description }}   </p>
                        <a href="{{route('about')}}" class="btn-1" data-aos="fade-up" data-aos-duration="3000">أعرف أكثر</a>
                    </div>
                </div>
            </div>
            @endisset
        </div>
    </section>


    <section class="mextreo-service">
        <div class="container">
            <div class="row">
                @isset($Customer)
                <div class="col-md-5 offset-md-2">
                    <div class="m-s-content">
                        <h2 class="ms-tittle">الخدمات</h2>
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="2000">الذي نفعله</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">خدمتنا</h2>
                        <p data-aos="fade-up" data-aos-duration="2500">{{$Customer[0]->description}}
                            <a href="{{route('services')}}" class="btn-1" data-aos="fade-up" data-aos-duration="3000">أعرف أكثر</a>
                    </div>
                </div>

                @endisset



                        {{--<div class="col-md-6">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12" data-aos="fade-down-right" data-aos-duration="3000">--}}
                                    {{--<div class="single-service si-2">--}}
                                        {{--<i class="flaticon-interior-design service-icon"></i>--}}
                                        {{--<h3>الداخلية</h3>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-12" data-aos="fade-up-left" data-aos-duration="3000">--}}
                                    {{--<div class="single-service">--}}
                                        {{--<i class="flaticon-plane service-icon"></i>--}}
                                        {{--<h3>التخطيط</h3>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                </div>

        </div>
    </section>
  <section class="recent-project">
      <div class="container">
          <div class="recent-pro-top1">
              <h2 class="rp-tittle"> </h2>
              <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="2000"> الخدمات </h6>

          </div>

          <div class="row">
              <div class="col-md-12">
                  <div class="project owl-carousel owl-theme">
                      @isset($Customer)
                      @foreach($Customer as $key => $Custom)
                          @if($key > 0)
                              <div class="item">
                                  <div class="single-project" data-aos="fade-up" data-aos-duration="2500">
                                      <div class="sp-img">
                                          <img src=" {{$Custom->image}}" alt="">
                                      </div>

                                      <div class="sp-text">
                                          <h3>{{$Custom->name}}</h3>
                                          <p>{{ str_limit($Custom->description,30,'...مزيد') }}  </p>
                                      </div>
                                      <a href="{{route('services')}}"> <i class="flaticon-add rp-icon"></i></a>

                                  </div>
                              </div>
                          @endif
                      @endforeach
                      @endisset
                  </div>
              </div>
          </div>

      </div>
  </section>

    <section class="work-success">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                    <div class="ws-content">
                        <div class="ws-t-year">
                            <img src="{{asset($about[2]->image)}}" alt="">
                            <h2>6</h2>
                        </div>
                        <h3>سنوات من العمل الناجح في السوق</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="success-bg" data-aos="fade-left" data-aos-duration="3000">
                        <img src="{{asset($about[1]->image)}}" alt="">
                    </div>
                    <div class="success-img" data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{asset($about[0]->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="recent-project">
        <div class="container">
            <div class="recent-pro-top">
                <h2 class="rp-tittle">اعمالنا </h2>


                <h6 class="ht-tittle1" data-aos="fade-left" data-aos-duration="2000">منتجاتنا</h6>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project owl-carousel owl-theme">
                        @isset($items)
                        @foreach($items as $item)
                        <div class="item">
                            <div class="single-project" data-aos="fade-up" data-aos-duration="2500">
                                <div class="sp-img">
                                    <img src="{{$item->image}}" alt="">
                                </div>

                                <div class="sp-text">
                                    <h3>{{$item->name}}</h3>
                                    <p>{{ str_limit($item->description,30,'...مزيد') }}  </p>
                                </div>
                                <a href="{{URL::to('projectdetails/'.$item->id) }}"> <i class="flaticon-add rp-icon"></i></a>

                            </div>
                        </div>
                        @endforeach
                        @endisset

                    </div>
                </div>
            </div>
        </div>
    </section>


  {{--<section class="testimonial-area">--}}
      {{--<div class="container">--}}
          {{--<div class="row">--}}
              {{--<div class="col-md-4">--}}
                  {{--<div class="section-titleV1">--}}
                      {{--<p>شهادة</p>--}}
                      {{--<h3>ماذا  يقول عملائنا  </h3>--}}
                  {{--</div>--}}
              {{--</div>--}}
              {{--<div class="col-md-8">--}}

                  {{--<div class="testimonial-wrapper wow fadeIn" data-wow-delay=".50s">--}}
                      {{--<div class="testimonial-carousel owl-carousel owl-theme">--}}
                          {{--@isset($opinon)--}}
                          {{--@foreach($opinon as $item)--}}

                              {{--<div class="item">--}}
                                  {{--<div class="single-testimonial">--}}
                                      {{--<div class="st-text">--}}
                                          {{--<div class="testimonial-img">--}}
                                              {{--<img src="{{asset( $item->image)}}"alt="">--}}
                                          {{--</div>--}}
                                          {{--<p>{{$item->description}}--}}
                                          {{--</p>--}}
                                          {{--<h4> <span> العميل  {{$item->name}}  </span></h4>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                          {{--@endforeach--}}
                          {{--@endisset--}}
                      {{--</div>--}}

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


    <section class="partner" data-aos="fade-up" data-aos-duration="2500">
        <div class="container">
            <div class="single-partner"><img src="../assets/img/partner/pertner1.jpg" alt=""></div>
            <div class="single-partner"><img src="../assets/img/partner/pertner2.jpg" alt=""></div>
            <div class="single-partner"><img src="../assets/img/partner/pertner3.jpg" alt=""></div>
            <div class="single-partner"><img src="../assets/img/partner/pertner4.jpg" alt=""></div>
            <div class="single-partner"><img src="../assets/img/partner/pertner5.jpg" alt=""></div>
            <div class="single-partner"><img src="../assets/img/partner/pertner6.jpg" alt=""></div>
        </div>
    </section>





    {{--<section class="hero-area heroV1">--}}

        {{--<div class="hero-graphics">--}}
            {{--<img src="../assets/img/graphic/hero-g-1.png" alt="" class="hg hg-1">--}}
            {{--<img src="../assets/img/graphic/hero-g-2.png" alt="" class="hg hg-2">--}}
            {{--<img src="../assets/img/graphic/hero-g-3.png" alt="" class="hg hg-3">--}}
            {{--<img src="../assets/img/graphic/hero-g-4.png" alt="" class="hg hg-4">--}}
            {{--<img src="../assets/img/graphic/hero-g-5.png" alt="" class="hg hg-5">--}}
            {{--<img src="../assets/img/graphic/hero-g-6.png" alt="" class="hg hg-6">--}}
            {{--<img src="../assets/img/graphic/hero-g-7.png" alt="" class="hg hg-7">--}}
        {{--</div>--}}
        {{--<div class="container">--}}
            {{--<div class="hero-content">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-5">--}}
                        {{--<div class="hero-text">--}}
                            {{--<h6>اكتشف ذوقك</h6>--}}
                            {{--<h2 class="wow fadeInUp" data-delay=".5s">استمتع بوجبتنا اللذيذة</h2>--}}
                            {{--<p>مطعم منهاتن هو مطعم يحي يقدم المأكولات الشعبيه  .</p>--}}
                            {{--<a  class="btn-style-a " data-animation="fadeInUp" data-delay="0.85s" href=" {{route('reservation')}}">احجز طاولة</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-7">--}}
                        {{--<div class="hero-img">--}}
                            {{--<img src="../assets/img/section-img/hero1.png" alt="">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    {{--@isset($about)--}}

    {{--<section class="about-area">--}}
        {{--<img src=" {{asset($about[0]->image)}}" alt="" class="about-graphic">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-7">--}}
                    {{--<div class="about1-img">--}}
                        {{--<img src=" {{asset($about[0]->image)}}" alt="">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-5">--}}
                    {{--<div class="section-text about1-text">--}}
                        {{--<div class="section-titleV1">--}}
                            {{--<p>أهلا بك</p>--}}
                            {{--<h3>  حول {{ $about[0]->title }} </h3>--}}
                        {{--</div>--}}
                        {{--<p>{{ $about[0]->description }}--}}
                        {{--</p>--}}
                        {{--<a href="{{route('about')}}" class="btn-style-b">أعرف أكثر</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}



    {{--<section class="delicious-menu-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="section-titleV1">--}}
                        {{--<p>اكتشف</p>--}}
                        {{--<h3>قائمتنا اللذيذة</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="dm-food-tab">--}}
                        {{--<div class="dft-nav">--}}
                            {{--<nav>--}}
                                {{--<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">--}}
                                    {{--<a class="nav-item nav-link active" id="nav-Breakfast-tab" data-toggle="tab" href="#nav-Breakfast" role="tab" aria-controls="nav-Breakfast" aria-selected="true">--}}
                                        {{--<div class="dftn-box">--}}
                                            {{--<img src="../assets/img/food-menu/fmtnav-1.jpg" alt="">--}}
                                            {{--<div class="dftnb-title">--}}
                                                {{--<p>وجبة افطار</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                    {{--<a class="nav-item nav-link" id="nav-Lunch-tab" data-toggle="tab" href="#nav-Lunch" role="tab" aria-controls="nav-Lunch" aria-selected="false">--}}
                                        {{--<div class="dftn-box">--}}
                                            {{--<img src="../assets/img/food-menu/lunch-1.jpg" alt="">--}}
                                            {{--<div class="dftnb-title">--}}
                                                {{--<p>غداء</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                    {{--<a class="nav-item nav-link" id="nav-Dinner-tab" data-toggle="tab" href="#nav-Dinner" role="tab" aria-controls="nav-Dinner" aria-selected="false">--}}
                                        {{--<div class="dftn-box">--}}
                                            {{--<img src="../assets/img/food-menu/dinner-1.jpg" alt="">--}}
                                            {{--<div class="dftnb-title">--}}
                                                {{--<p>وجبة عشاء</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                    {{--<a class="nav-item nav-link" id="nav-Dessert-tab" data-toggle="tab" href="#nav-Dessert" role="tab" aria-controls="nav-Dessert" aria-selected="false">--}}
                                        {{--<div class="dftn-box">--}}
                                            {{--<img src="../assets/img/food-menu/dessert-1.jpg" alt="">--}}
                                            {{--<div class="dftnb-title">--}}
                                                {{--<p>الحلوى</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</nav>--}}
                        {{--</div>--}}
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
                                                                {{--<p>{{$food->description}} </p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="dfsl-price">--}}
                                                                {{--<h3><span >ريال</span>{{$food->price}}</h3>--}}
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
                                                                    {{--<p>{{$food->description}} </p>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="dfsl-price">--}}
                                                                    {{--<h3><span >ريال</span>{{$food->price}}</h3>--}}
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
                                                {{--<img src="{{asset($Lunch[1]->image)}}" alt="">--}}
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
                                                                    {{--<p>{{$food->description}} </p>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="dfsl-price">--}}
                                                                    {{--<h3><span >ريال</span>{{$food->price}}</h3>--}}
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
                                                {{--<img src="../assets/img/food-menu/dinner-1.jpg" alt="">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tab-pane fade" id="nav-Dessert" role="tabpanel" aria-labelledby="nav-Dessert-tab">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="dft-menus">--}}
                                                {{--<ul class="dft-menulist">--}}
                                                    {{--<li>--}}
                                                        {{--<div class="dft-single-list">--}}
                                                            {{--<div class="dftsl-text">--}}
                                                                {{--<h4>برميل خبز كونتري بوي</h4>--}}
                                                                {{--<p>وصفات الخبز للوجبات الخفيفة أو الإفطار. </p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="dfsl-price">--}}
                                                                {{--<h3><span>$</span>15.0</h3>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<div class="dft-single-list">--}}
                                                            {{--<div class="dftsl-text">--}}
                                                                {{--<h4>برميل خبز كونتري بوي</h4>--}}
                                                                {{--<p>وصفات الخبز للوجبات الخفيفة أو الإفطار. </p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="dfsl-price">--}}
                                                                {{--<h3><span>$</span>20.0</h3>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<div class="dft-single-list">--}}
                                                            {{--<div class="dftsl-text">--}}
                                                                {{--<h4>برميل خبز كونتري بوي</h4>--}}
                                                                {{--<p>وصفات الخبز للوجبات الخفيفة أو الإفطار. </p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="dfsl-price">--}}
                                                                {{--<h3><span>$</span>10.0</h3>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<div class="dft-single-list">--}}
                                                            {{--<div class="dftsl-text">--}}
                                                                {{--<h4>برميل خبز كونتري بوي</h4>--}}
                                                                {{--<p>وصفات الخبز للوجبات الخفيفة أو الإفطار. </p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="dfsl-price">--}}
                                                                {{--<h3><span>$</span>12.0</h3>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="dft-img">--}}
                                                {{--<img src="../assets/img/food-menu/dessert-1.jpg" alt="">--}}
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


    {{--<section class="why-choose-us-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="section-titleV1">--}}
                        {{--<p>خدمتنا</p>--}}
                        {{--<h3>لماذا أخترتنا</h3>--}}
                        {{--<p class="sub-title">مطعم منهاتن الشياحي من اكثر المطاعم شهر بقدوه اليمنين من نواحي الكحافظات علشان الاكل والطعم اللذيذ</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}

                {{--@isset($Customer)--}}
                {{--@foreach($Customer as $Custom)--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="single-wcu">--}}
                        {{--<div class="sw-icon">--}}
                            {{--<img src=" {{$Custom->image}}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="sw-text">--}}
                            {{--<h4>{{$Custom->name}}</h4>--}}
                            {{--<p>{{$Custom->description}}</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--@endforeach--}}
                {{--@endisset--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    {{--<section class="food-video-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="youtube-videoplay-button">--}}
                        {{--<a class="button is-play btn-Vplay play-1" href="https://www.youtube.com/watch?v=pIuCqUnvHdk">--}}
                            {{--<div class="button-outer-circle has-scale-animation"></div>--}}
                            {{--<div class="button-outer-circle has-scale-animation has-delay-short"></div>--}}
                            {{--<div class="button-icon is-play">--}}
                                {{--<svg height="100%" width="100%" fill="#b99165;">--}}
                                    {{--<polygon class="triangle" points="5,0 30,15 5,30"></polygon>--}}
                                    {{--<path class="path" d="M5,0 L30,15 L5,30z" fill="none" stroke="#b99165;" stroke-width="1"></path>--}}
                                {{--</svg>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    {{--<section class="most-popular-food-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="section-titleV1">--}}
                        {{--<p>القائمة الشعبية</p>--}}
                        {{--<h3>الطعام الأكثر شعبية</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="most-poplar-food-wrappper">--}}
                        {{--<div class="popular-food-carousel owl-carousel owl-theme">--}}
                            {{--@isset($items)--}}
                            {{--@foreach($items as $item)--}}
                            {{--<div class="item">--}}


                                {{--<div class="single-food-box">--}}
                                    {{--<div class="sfb-img">--}}
                                        {{--<img src=" {{$item->image}}" alt="">--}}
                                        {{--<div class="sfbi-btn">--}}
                                            {{--<a href="#" class="add-cart-btn">مطعم منهاتن</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="sbf-info">--}}
                                        {{--<h4>{{$item->name}}</h4>--}}
                                        {{--<ul class="sbfi-ratings">--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                        {{--</ul>--}}
                                        {{--<p class="price">{{$item->price}}</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--@endforeach--}}
                            {{--@endisset--}}
                            {{--<div class="item">--}}
                                {{--<div class="single-food-box">--}}
                                    {{--<div class="sfb-img">--}}
                                        {{--<img src="../assets/img/food-menu/mpfood-2.jpg" alt="">--}}
                                        {{--<div class="sfbi-btn">--}}
                                            {{--<a href="#" class="add-cart-btn">أضف إلى السلة</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="sbf-info">--}}
                                        {{--<h4>دجاج مقلي</h4>--}}
                                        {{--<ul class="sbfi-ratings">--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                        {{--</ul>--}}
                                        {{--<p class="price">$20.00</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<div class="single-food-box">--}}
                                    {{--<div class="sfb-img">--}}
                                        {{--<img src="../assets/img/food-menu/mpfood-3.jpg" alt="">--}}
                                        {{--<div class="sfbi-btn">--}}
                                            {{--<a href="#" class="add-cart-btn">أضف إلى السلة</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="sbf-info">--}}
                                        {{--<h4>دجاج مقلي</h4>--}}
                                        {{--<ul class="sbfi-ratings">--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                        {{--</ul>--}}
                                        {{--<p class="price">$25.00</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<div class="single-food-box">--}}
                                    {{--<div class="sfb-img">--}}
                                        {{--<img src="../assets/img/food-menu/mpfood-2.jpg" alt="">--}}
                                        {{--<div class="sfbi-btn">--}}
                                            {{--<a href="#" class="add-cart-btn">أضف إلى السلة</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="sbf-info">--}}
                                        {{--<h4>دجاج مقلي</h4>--}}
                                        {{--<ul class="sbfi-ratings">--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                        {{--</ul>--}}
                                        {{--<p class="price">$20.00</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="testimonial-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="section-titleV1">--}}
                        {{--<p>شهادة</p>--}}
                        {{--<h3>ماذا  يقول عملائنا  </h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-8">--}}

                    {{--<div class="testimonial-wrapper wow fadeIn" data-wow-delay=".50s">--}}
                        {{--<div class="testimonial-carousel owl-carousel owl-theme">--}}
                            {{--@isset($opinon)--}}
                            {{--@foreach($opinon as $item)--}}

                                {{--<div class="item">--}}
                                    {{--<div class="single-testimonial">--}}
                                        {{--<div class="st-text">--}}
                                            {{--<div class="testimonial-img">--}}
                                                {{--<img src="{{asset( $item->image)}}"alt="">--}}
                                            {{--</div>--}}
                                            {{--<p>{{$item->description}}--}}
                                            {{--</p>--}}
                                            {{--<h4> <span> العميل  {{$item->name}}  </span></h4>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}
                            {{--@endisset--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    {{--<section class="testimonial-area">--}}
        {{--<div class="container">--}}


            {{--<div class="row">--}}

                {{--<div class="col-md-6">--}}
                    {{--<div class="section-titleV1">--}}
                        {{--<p>شهادة</p>--}}
                        {{--<h3>يقول عملائنا</h3>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}

                    {{--</div>--}}

                    {{--<div class="testimonial-wrapper wow fadeIn" data-wow-delay=".50s">--}}

                        {{--<div class="testimonial-carousel owl-carousel owl-theme">--}}
                            {{--@isset($opinon)--}}
                            {{--@foreach($opinon as $item)--}}
                                {{--<div class="testimonial-img">--}}
                                    {{--<img src="{{$item->image}} "alt="">--}}
                                {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<div class="single-testimonial">--}}
                                    {{--<div class="st-text">--}}
                                        {{--<p>{{$item->description}}--}}
                                        {{--</p>--}}
                                        {{--<h4> <span> العميل  {{$item->name}}  </span></h4>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--@endforeach--}}
                            {{--@endisset--}}
                        {{--</div>--}}
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
