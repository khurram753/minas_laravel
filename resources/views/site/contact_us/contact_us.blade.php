@extends('layout.front-layout.app')

@section('title')
    MINAS - Contact Us
@endsection


@section('content')

    <main class="main-content padded bg-grey">
        <section class="contact-page">
            <header class="a-center color-black mobile-hor-gutter">
                <h1 class="mb-37 js-bt overflow relative skrollr-pointer" data-emit-events data-bottom-top=""><span
                        class="js-bt__el display--block"><span class="font-light font-18 bracket-icon">{</span><span
                            class="font-bold font-12 extra-l  bracket-title">CONTACT US</span><span
                            class="font-light font-18 bracket-icon">}</span></span></h1>
                <h2 class="font-70 font-thin maxw-725 m-auto mb-21 js-skew-letter skrollr-pointer" data-emit-events
                    data-trans="1.4" data-bottom-top="" data-delay=".2">
                    <SPAN>MINAS</SPAN> <SPAN>STORES</SPAN>
                </h2>
                <div class="maxw-480 font-light font-17 m-auto overflow js-skew-letter skrollr-pointer" data-delay=".25"
                     data-trans="1.4" data-emit-events data-bottom-top=""><P>DISCOVER OUR STORES AND FIND A LOCATION
                        NEAR YOU.</P></div>
            </header>
            <div class="stores-holder overflow">
                <div class="grid max-12cols-g mobile-hor-100">
                    <div class="display-flex flex-wrap">
                        @foreach($stores as $key => $store)
                            <div
                                class="display-flex--50 display-flex tablet-hor-flex-100 tablet-hor-mb-60 mobile-hor-nomargin">
                                <div class="gutter relative block-100 mobile-hor-nomargin">
                                    <div class="fill-dimensions bg-black scale-y js-curtainY skrollr-pointer"
                                         data-emit-events data-bottom-top=""></div>
                                    <div class="over store-box color-white a-center">
                                        <h3 class="font-bold font-40 mb-5 js-bt overflow relative skrollr-pointer"
                                            data-emit-events data-bottom-top="" data-trans="1.2" data-delay=".3">
                                            <span class="js-bt__el display--block">{{$store->title}}</span>
                                        </h3>
                                        <div class="font-thin font-50 js-bt overflow relative skrollr-pointer"
                                             data-emit-events data-bottom-top="" data-trans="1.2" data-delay=".35">
                                            <div class="js-bt__el">
                                                {{$store->title}}
                                            </div>
                                        </div>
                                        <div
                                            class="font-thin font-20 store-box__info store-box__info--white opc-0  js-fade-up skrollr-pointer"
                                            data-delay=".3" data-emit-events data-bottom-top="" data-cubic="custom"
                                            data-trans="1.2">
                                            <p>{{$store->address}}<br/>
                                                {{$store->country}}<br/>
                                                {{$store->phone_number}} <br/>
                                                <a href="{{$store->email}}">
                                                    {{$store->email}}
                                                </a>
                                            </p>
                                        </div>
                                        <a href="{{route('storeDetail',['id'=>$store->id])}}"
                                           arial-label="Kifissia flagship store"
                                           class="relative store-box__img display--block" rel="noopener noreferrer">
                                            <span
                                                class="fill-dimensions bg-black multiply trans z-10 opc-0 store-box__img-bg display--block"></span>
                                            <span
                                                class="cover-img fill-dimensions display--block scale-out js-scale-in js-scale-in--sm skrollr-pointer opc-0"
                                                data-delay=".4" data-emit-events data-bottom-top="" data-trans="1.2"
                                                style="background-image: url({{asset($store->image)}}); "></span>
                                        </a>
                                        <a href="{{route('storeDetail',['id'=>$store->id])}}"
{{--                                           arial-label="Kifissia flagship store"--}}
                                           class="font-bold font-17 display--inline text-underline text-underline--red color-red relative store-box__link store-box__link--white overflow"
                                           rel="noopener noreferrer">
                                            <span class="js-bt overflow relative display--inline skrollr-pointer"
                                                  data-delay=".4" data-emit-events data-bottom-top="">
                                                <span
                                                    class="js-bt__el display--block link-underline">DISCOVER THE STORE</span>
                                            </span>
                                            <span
                                                class="line line--abs abs-bl scale-x origin-l js-scale-lr display--block skrollr-pointer"
                                                data-delay=".4" data-emit-events data-bottom-top="">
                                                <span class="fill-dimensions bg-red trans"></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{--                        <div class="display-flex--50 display-flex">--}}
                        {{--                            <div class="gutter relative block-100 mobile-hor-gutter mobile-hor-nomargin">--}}
                        {{--                                <div class="fill-dimensions bg-white scale-y js-curtainY skrollr-pointer" data-emit-events  data-bottom-top="" data-delay=".1"></div>--}}
                        {{--                                <div class="over store-box color-black a-center">--}}
                        {{--                                    <h3 class="font-bold font-40 mb-20 js-bt overflow relative skrollr-pointer" data-emit-events  data-bottom-top="" data-trans="1.2" data-delay=".3">--}}
                        {{--                                        <span class="js-bt__el display--block">MYKONOS STORE</span>--}}
                        {{--                                    </h3>--}}
                        {{--                                    <div class="font-thin font-20 store-box__info opc-0 js-fade-up skrollr-pointer"  data-delay=".3" data-emit-events  data-bottom-top="" data-cubic="custom" data-trans="1.2"><p>AGIA KIRIAKI SQUARE <br />--}}
                        {{--                                            84600 MYKONOS TOWN<br />--}}
                        {{--                                            +30 2289027320</p>--}}
                        {{--                                        <p><a href="getintouch@minastudio.com">getintouch@minastudio.com</a></p>--}}
                        {{--                                        <p><strong>OPEN APRIL &#8211; OCTOBER</strong></p>--}}
                        {{--                                    </div>                                <a href="store.html" arial-label="Mykonos store" class="relative store-box__img display--block relative overflow" rel="noopener noreferrer">--}}

                        {{--                                        <span class="fill-dimensions bg-black multiply trans z-10 opc-0 store-box__img-bg display--block"></span>--}}
                        {{--                                        <span class="cover-img fill-dimensions display--block scale-out js-scale-in js-scale-in--sm skrollr-pointer opc-0" data-delay=".4" data-emit-events   data-bottom-top="" data-trans="1.4" style="background-image: url(images/store_mykonos-1040x585.jpg); "></span>--}}


                        {{--                                    </a>--}}
                        {{--                                    <a href="store.html" arial-label="Mykonos store" class="font-bold font-17 display--inline text-underline text-underline--red color-red relative store-box__link overflow" rel="noopener noreferrer">--}}
                        {{--                                    <span class="js-bt overflow relative display--inline skrollr-pointer" data-delay=".45" data-emit-events  data-bottom-top="">--}}
                        {{--                                        <span class="js-bt__el display--block">DISCOVER THE STORE</span>--}}
                        {{--                                </span>--}}
                        {{--                                        <span class="line line--abs abs-bl scale-x origin-l js-scale-lr display--block skrollr-pointer" data-delay=".4" data-emit-events  data-bottom-top="">--}}
                        {{--                                        <span class="fill-dimensions bg-red trans"></span>--}}
                        {{--                                    </span>--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            @include('site.contact_us.section.retailers')
            @include('site.contact_us.section.retailer_form')


        </section>
    </main>

@endsection

@section('script')

{{--    <script src="{{asset('admin/js/jquery.min.js')}}"></script>--}}


    <script>
        $(document).ready(function () {
            $('#submitRequest').click(function () {

                if (!$('input[name="terms_condition"]').is(':checked')) {
                    errorMsg("Agree to Terms and Policy");
                    return false;
                }


                var data = $('#submitRequestForm').serialize();

                $.blockUI({
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    }
                });
                $.ajax({

                    type: 'POST',
                    url: '{{route("contactUsRequest")}}',
                    data: data,

                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);

                            setTimeout(function () {
                                window.location.href = '{{route('contactUs')}}';
                            }, 1000);

                        } else if (response.result == 'error') {
                            $.unblockUI();
                            errorMsg(response.message);
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (key, value) {
                            $.unblockUI();
                            errorMsg(value);
                        });
                    }


                });

            });
        });
    </script>
@endsection
