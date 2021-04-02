@extends('layouts.site')

@section('content')


    <section class="mextreo-blog">
        <div class="container">
            <div class="mex-blog-top">
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


            <div class="col-md-12">
                <div class="pagination-area">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li  >    {{ $news->links()  }}  </li>


                        </ul>
                    </nav>
                </div>
            </div>
            </div>
        </div>
    </section>



    {{--<section class="blog-page-area">--}}
        {{--<div class="container">--}}
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

                {{--<div class="col-md-12">--}}
                    {{--<div class="pagination-area">--}}
                        {{--<nav aria-label="Page navigation">--}}
                            {{--<ul class="pagination">--}}
                                {{--<li  >    {{ $news->links()  }}  </li>--}}


                            {{--</ul>--}}
                        {{--</nav>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


@stop
