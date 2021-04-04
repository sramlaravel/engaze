
<div id="preloader"></div>


<button class="scroll-top scroll-to-target" data-target="html">
    <i class="flaticon-up scrollup-icon"></i>
</button>


<div class="page-settings">
    <div class="psg-icon">
        <i class="fa fa-cog" aria-hidden="true"></i>
    </div>
    <div class="pgs-box">
        <a href="#">View LTR Verson</a>
    </div>
</div>


<header class="mextreo-header-area">
    <div class="container c-fulid-max">
        <div class="row">
            <div class="col-4 col-md-4">
                <div class="logo-wrapper">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets/img/logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-8 col-md-8">
                <div class="mextreo-menu">
                    <div class="mxm-wrspper">
                        <nav class="main-nav" role="navigation">

                            <input id="main-menu-state" type="checkbox"/>
                            <label class="main-menu-btn" for="main-menu-state">
                                <span class="main-menu-btn-icon"></span>
                            </label>

                            <ul id="main-menu" class="sm sm-mint">

                                <li><a href="{{route('jobs') }}">الوظائف</a></li>
                                <li><a href="{{route('contact')}}">التواصل معنا</a></li>
                                <li><a href="{{route('blog')}}">الاخبار</a></li>
                                {{--<li><a href="{{route('project')}}">اعمالنا</a></li>--}}
                                <li><a href="{{route('services')}}">خدماتنا</a></li>
                                <li><a href="{{route('about')}}">نبذه عنا</a></li>
                                <li class="tel"><a href="tel:"> </a></li>
                                <li><a href="{{route('home')}}">الصفحة الرئيسية</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="side-ber">
                        <button class="sidebar-btn"><i class="fas fa-bars" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="side-panel hide">
    <div class="sp-box">
        <div class="sp-close">
            <span class="close-sp"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
        </div>
        <div class="sp-logo">
            <a href="{{route('blog')}}">
                <img src="{{asset('assets/img/logo.png')}}" alt="">
            </a>
        </div>
        <div class="sp-text">
            <p>التصميم يؤثر على الإنسان. يغير رأي الحياة والصورة الذاتية. حسب الرأي
                المتخصصين ، وتصميم جيد مع نمط الحياة</p>
        </div>
        <div class="sp-recent-post">
            <h4>المنشور الاخير</h4>
            @isset($news)
            @foreach($news as $new)
            <div class="sp-single-rp">
                <div class="ssrp-img">
                    <img src="{{asset( $new->news_img)}}" alt="">
                </div>
                <div class="ssrp-text">
                    <a href="{{URL::to('detail/'.$new->id) }}">{{$new->news_title}}</a>
                    <span class="date-meta"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('Y-m-d', strtotime ( $new->created_at)) }}
                    </span>
                </div>
            </div>
            @endforeach
            @endisset
            {{--<div class="sp-single-rp">--}}
                {{--<div class="ssrp-img">--}}
                    {{--<img src="../assets/img/blog/recent-blog2.jpg" alt="">--}}
                {{--</div>--}}
                {{--<div class="ssrp-text">--}}
                    {{--<a href="blog-details.html">تجديد العمارة والتصميم </a>--}}
                    {{--<span class="date-meta"><i class="fa fa-calendar" aria-hidden="true"></i>25 نوفمبر 2020--}}
                    {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="sp-single-rp">--}}
                {{--<div class="ssrp-img">--}}
                    {{--<img src="../assets/img/blog/recent-blog3.jpg" alt="">--}}
                {{--</div>--}}
                {{--<div class="ssrp-text">--}}
                    {{--<a href="blog-details.html">العمارة المستصلحة بالخشب للحداثة</a>--}}
                    {{--<span class="date-meta"><i class="fa fa-calendar" aria-hidden="true"></i>30 نوفمبر 2020--}}
                   {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="sp-contact">
            <h4>اتصل</h4>
            <div class="spc-text">
                <p>143 طريق القلعة 517 منطقة ، ميناء كييف جنوب ، نيويورك
                </p>
                <h5>هاتف:</h5>
                <p>8 800 2534 236</p>
                <h5>البريد الإلكتروني:</h5>
                <p><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__"
                      data-cfemail="086d65696164486d70696578646d266b6765">[email&#160;protected]</a></p>
            </div>
        </div>
        <div class="sp-social">
            <ul class="social-list">
                <li data-aos="fade-up" data-aos-duration="1500"><a href="#"><i class="flaticon-twitter"></i></a></li>
                <li data-aos="fade-up" data-aos-duration="2000"><a href="#"><i class="flaticon-facebook"></i></a>
                </li>
                <li data-aos="fade-up" data-aos-duration="2500"><a href="#"><i class="flaticon-instagram"></i></a>
                </li>
                <li data-aos="fade-up" data-aos-duration="3000"><a href="#"><i class="flaticon-linkedin"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="hero-social">
    <ul>
        <li data-aos="fade-up" data-aos-duration="1500"><a href="#"><i class="flaticon-twitter"></i></a></li>
        <li data-aos="fade-up" data-aos-duration="2000"><a href="#"><i class="flaticon-facebook"></i></a></li>
        <li data-aos="fade-up" data-aos-duration="2500"><a href="#"><i class="flaticon-instagram"></i></a></li>
        <li data-aos="fade-up" data-aos-duration="3000"><a href="#"><i class="flaticon-linkedin"></i></a></li>
    </ul>
</div>
