@extends('layouts.site')

@section('content')

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-details-wrapper">
                        <a href="#">
                            <div class="blog-img" data-aos="fade-up" data-aos-duration="2000">
                                <img src="{{asset($newsDetail[0]->news_img)}}" alt="">
                            </div>
                        </a>
                        <div class="blog-meta">
                            <ul class="meta-list" data-aos="fade-up" data-aos-duration="2500">
                                <li><i class="flaticon-user-symbol-of-thin-outline"></i><a href="#">مشرف</a></li>
                                <li><i class="flaticon-label"></i><span>بتاربخ: </span><a href="#"> {{ date('Y-m-d', strtotime ( $newsDetail[0]->created_at)) }}</a>
                            </ul>
                        </div>
                        <div class="blog-text" data-aos="fade-up" data-aos-duration="3000">
                            <a href="#">
                                <h3>{{$newsDetail[0]->news_title }}  </h3>
                            </a>
                            <p>  {{$newsDetail[0]->news_desc }}  </p>
                            <div class="gift-info">
                                <h5>هل تبحث عن هدية لنفسك تبلغك وتلهمك؟ اشترك في النشرة الإخبارية اليومية للتصميم الداخلي.
                                    انه مجانا. النتيجة هي تمثيل مادي لعلامتك التجارية
                                </h5>
                                <i class="flaticon-left-quote"></i>
                                <span>Adam Smith</span>
                            </div>
                            <p>    </p>
                        </div>
                        <div class="comment-details" data-aos="fade-up" data-aos-duration="3000">



                        </div>
                        {{--<div class="take-comment" data-aos="fade-up" data-aos-duration="3000">--}}
                            {{--<h3>اترك تعليقا</h3>--}}
                            {{--<form>--}}
                                {{--<div class="form-group cfdb1">--}}
                                    {{--<input type="text" class="form-control cp1" name="name" id="name" placeholder="اسمك*"--}}
                                           {{--onfocus="this.placeholder = ''" onblur="this.placeholder ='اسمك*'">--}}
                                {{--</div>--}}
                                {{--<div class="form-group cfdb1">--}}
                                    {{--<input type="text" class="form-control cp1" name="email" id="email"--}}
                                           {{--placeholder="بريدك الالكتروني*" onfocus="this.placeholder = ''"--}}
                                           {{--onblur="this.placeholder ='بريدك الالكتروني*'">--}}
                                {{--</div>--}}
                                {{--<div class="form-group cfdb1">--}}
                                    {{--<input type="text" class="form-control cp1" name="website" id="website"--}}
                                           {{--placeholder="موقع الكتروني*" onfocus="this.placeholder = ''"--}}
                                           {{--onblur="this.placeholder ='موقع الكتروني*'">--}}
                                {{--</div>--}}
                                {{--<div class="form-group cfdb1">--}}
                                {{--<textarea rows="8" class="form-control cp1" name="msg" id="msg" placeholder="تعليق*"--}}
                                          {{--onfocus="this.placeholder =''" onblur="this.placeholder ='تعليق*'"></textarea>--}}
                                {{--</div>--}}
                                {{--<div class="form-group checkbox">--}}

                                    {{--<label class="form-check form-check-inline">--}}
                                        {{--<input class="form-check-input" type="checkbox" name="gender" value="option1">--}}
                                        {{--<span class="form-check-label"> &nbsp; احفظ اسمي والبريد الإلكتروني وموقع الويب في هذا المتصفح للمرة التالية التي أعلق فيها</span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                                {{--<button>أضف تعليقا</button>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-sideber">
                        <div class="searchbox" data-aos="fade-up" data-aos-duration="3000">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="بحث.....">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{--<div class="catagory" data-aos="fade-up" data-aos-duration="3000">--}}
                            {{--<h3>التصنيفات</h3>--}}
                            {{--<ul class="c-list">--}}
                                {{--<li><a href="#">الداخلية </a> <span>10</span></li>--}}
                                {{--<li><a href="#">هندسة معمارية </a> <span>08</span></li>--}}
                                {{--<li><a href="#">تصميم المنتج </a> <span>07</span></li>--}}
                                {{--<li><a href="#">التصميم </a> <span>06</span></li>--}}
                                {{--<li><a href="#">الكيمياء الحيوية </a> <span>05</span></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}



                        <div class="recent-post" data-aos="fade-up" data-aos-duration="3000">
                            <h4>المشاركات الاخيرة</h4>
                            @isset($news)
                            @foreach($news as $new)
                           <div class="sp-single-rp">
                                    <div class="ssrp-img">
                                    <a href="#"><img src="{{asset( $new->news_img)}}" alt=""></a>
                                </div>
                                <div class="srb-text">
                                    <a href="{{URL::to('detail/'.$new->id) }}">
                                        <h5>{{$new->news_title}}</h5>
                                    </a>
                                    <span> {{ date('dD-M-Y', strtotime ( $new->created_at)) }}</span>
                                </div>
                            </div>
                            @endforeach
                            @endisset
                            <div class="single-recent-blog">
                                <div class="srb-img">
                                    <a href="#"> <img src="../assets/img/blog/recent-blog2.jpg" alt=""></a>
                                </div>
                                <div class="srb-text">
                                    <a href="#">
                                        <h5>تجديد العمارة والتصميم</h5>
                                    </a>
                                    <span>05 ديسمبر 2020 </span>
                                </div>
                            </div>
                            <div class="single-recent-blog">
                                <div class="srb-img">
                                    <a href="#"><img src="../assets/img/blog/recent-blog3.jpg" alt=""></a>
                                </div>
                                <div class="srb-text">
                                    <a href="#">
                                        <h5>العمارة المستصلحة بالخشب للحداثة</h5>
                                    </a>
                                    <span>15 ديسمبر 2020 </span>
                                </div>
                            </div>
                        </div>
                        {{--<div class="tag" data-aos="fade-up" data-aos-duration="3000">--}}
                            {{--<h3>بطاقة شعار</h3>--}}
                            {{--<ul>--}}
                                {{--<li><a href="#">الداخلية</a></li>--}}
                                {{--<li><a href="#">التصميم</a></li>--}}
                                {{--<li><a href="#">مقالة - سلعة</a></li>--}}
                                {{--<li><a href="#">منتجات</a></li>--}}
                                {{--<li><a href="#">هندسة معمارية</a></li>--}}
                                {{--<li><a href="#">صور فوتوغرافية</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>





@stop
