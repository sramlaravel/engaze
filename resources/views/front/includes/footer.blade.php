


<section class="footer-details">
    <div class="container" data-aos="fade-up" data-aos-duration="3000">
        <div class="row">
            <div class="col-md-12">
                <div class="subscribe">
                    {{--<form>--}}
                        {{--<input type="text" class="form-control" placeholder=" أدخل عنوان بريدك الالكتروني....."--}}
                               {{--onfocus="this.placeholder=''"--}}
                               {{--onblur="this.placeholder='أدخل عنوان بريدك الالكتروني.....'">--}}
                        {{--<button type="submit" class="btn btn-primary sub-btn"> الإشتراك</button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            </div>
            <div class="col-md-12">
                <div class="footer-information">
                    <div class="single-info">
                        <h5>عنوان:</h5>
                        <p>شركة انجاز سوفت للانظمة الخاصة المحدوده مجموعة الجيل الجديد، الدائري -برج كنتاكي -جوار, Sana'a, Yemen</p>
                    </div>
                    <div class="single-info">
                        <h5>هاتف:</h5>
                        <p>00967776660523</p>
                        <p>00967776660522</p>
                        <p>01537751</p>
                    </div>
                    <div class="single-info">
                        <h5>البريد الإلكتروني:</h5>
                         <p><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__"
                              data-cfemail="dfb1baa8b2beb6b39fb2baa7abadbab0f1bcb0b2">[email&#160;info@engazsoftplus.com]</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: myModal -->
    <div id="bottom">
     <div class="floating-btns">
            <a href="#" class="float" id="menu-share">
                <i class="fa fa-share my-float"></i>
            </a>
            <ul>
                {{--<li>--}}
                    {{--<a href="https://www.messenger.com/t/deltawyNet/" class="fb-message-blue" style="bottom: 150px; right: 150px;" target="_blank">--}}
                        {{--<i></i></a></li>--}}
                {{--<li>--}}
                    {{--<a class="phone" href="tel:0096777005824">--}}
                        {{--<i class="fa fa-phone fa-3x my-float"></i>--}}
                    {{--</a></li>--}}
                {{--<li>--}}

                    <div class="floating-wpp"></div>
                </li>
            </ul>
        </div>

        <div class="fixed-social">
            <a href="tel:01067439828" class="s-item phone">
                <span class="fa fa-phone fa-2x"></span>
            </a>
            <a href="https://wa.me/+967776660522/" class="s-item whatsapp">
                <i></i>
            </a>


            <a href="https://www.messenger.com/ /" class="s-item fb-message-blue">
                <i></i>
            </a>

        </div>
    </div>
</section>
<script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>

<script type="text/javascript">
    $(function () {
        $('.floating-wpp').floatingWhatsApp({
            phone: '0096777660524', //WhatsApp Business phone number
            headerTitle: 'يمكنك مراسلتنا على الواتس اب!', //Popup Title
            popupMessage: 'مرحبا بكم في انجاز سوفت كيف ' +
            'يمكننا مساعدتك عزيزي?', //Popup Message
            showPopup: true, //Enables popup display

            backgroundColor: "#25D366",
            buttonImage: '<img src="{{asset('javax.faces.resource/whatsapp.svg7e00.svg')}}" />',
            position: "right" //Position: left | right
        });
    });
</script>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="footer-logo"><img src="../assets/img/logo-2.png" alt=""></div>
            </div>
            <div class="col-md-10">
                <div class="footer-nav">
                    <ul>
                        <li>حقوق الطبع والنشر © 2021! <a href="https://voidcoders.com/">أنجاز شوفت لتقنية المعلومات!</a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
