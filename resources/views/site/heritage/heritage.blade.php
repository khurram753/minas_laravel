@extends('layout.front-layout.app')

@section('title')
    MINAS - Heritage
@endsection


@section('style')

@endsection

@section('content')
    <main class="main-content bg-black heritage-page" id="content">
        <div class="opc-0 no-visible heritage-wrap fixed" id="js-heritage">
            <div class="fixed heritage-wrap__inner">
                <a href="#" class="abs-rc heritage-wrap__link color-white cursor link-underline no-trans"
                   id="heritage-url">
                    <span id="heritage-title"
                          class="heritage-title font-light js-heritage-fade-in display--block mb-18 opc-0 "></span>
                    <span id="heritage-text"
                          class="font-light font-20 heritage-text js-heritage-fade-in opc-0  display--block mb-37"></span>
                    <span
                        class="icon icon--arrows-long-right color-white heritage-wrap__icon display--block js-heritage-fade-in opc-0 "></span>
                </a>
                <div class="heritage-wrap__img-holder abs-center z--1">
                    <div class="fill-dimensions bg-black multiply opc-55 z-10 heritage-img__bg"></div>
                    <div class="js-heritage-img opc-0 a-center">
                        <div class="js-heritage-image">
                            <div id="heritage-image" class="heritage-image opc-50"></div>
                        </div>
                        <div class="abs-center opc-50 js-heritage-image block-100">
                            <div id="heritage-image-b" class="heritage-image-b"></div>
                        </div>
                        <div class="abs-center opc-50 js-heritage-image block-100">
                            <div id="heritage-image-c" class="heritage-image-c"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid max-12cols-g mobile-hor-100">
            <div class="gutter relative mobile-hor-gutter">
                <h1 class="abs-tc fixed heritage-intro__top-title z-20 overflow js-bt in-view" data-emit-events
                    data-bottom-top="" data-delay=".5" data-velocity="0.03">
                    <span class="display--block js-bt__el heritage-intro__wrap-text"><span
                            class="font-light font-18 bracket-icon">{</span><span
                            class="font-bold font-12 extra-l  bracket-title">A HERITAGE OF DESIGN EXCELLENCE </span><span
                            class="font-light font-18 bracket-icon">}</span></span>
                </h1>
                <div class="full-height fixed heritage-intro color-white no-visible opc-0 z-10 mobile-hor-height-100"
                     id="heritage-intro">
                    <div class="heritage-intro__holder abs">
                        <div class="abs-center heritage-intro__holder-img">
                            <div class="relative">
                                <div class="fill-dimensions fill-dimensions--extra bg-black origin-l js-mask-bg"></div>
                                <div class="overflow">
                                    <img src="/site/images/heritage_top.jpg"
                                         alt="Minas Designs-a heritage of design excellence "
                                         class="block-image js-scale-mask__el">
                                </div>
                            </div>
                        </div>
                        <div class="abs-br heritage-intro__texts  mobile-hor-rel-no-center mobile-hor-hidden">
                            <div
                                class="font-70 font-thin maxw-725 m-auto content-hr content-hr--white mb-21 opc-0 no-visible js-h-fade">
                                <SPAN>57</SPAN> <SPAN>YEARS</SPAN> <SPAN>OF</SPAN> <SPAN>HERITAGE</SPAN>
                                <HR/>
                                <SPAN></SPAN>
                                <SPAN>PURITY</SPAN> <SPAN>AND</SPAN> <SPAN>EXCELLENCE</SPAN>
                            </div>
                            <div class="maxw-470 font-light font-20 color-white opc-0 no-visible js-h-fade">
                                THE BIRTH OF AN ARTIST, HIS PATH AND EVOLUTION, DISCOVER THE STORY.
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="heritage-nav relative display--inline z-15">
                    <div class="fill-dimensions abs-tl fixed height-20-v bg-gradient-tb  pointer-none"></div>
                    <div class="fill-dimensions abs-bl fixed height-20-v bg-gradient-bt pointer-none"></div>
                    <div class="fill-dimensions dot-vertical z-1">
                        <div class="fill-dimensions bg-black js-curtain-tb origin-bl skrollr-pointer" data-emit-events
                             data-bottom-top="" data-trans="1.6"></div>
                    </div>
                    <div class="color-red font-14 nav-notice opc-0 no-visible js-h-fade">
                        <div class="nav-notice__title trans-slower" data-0="@class:nav-notice__title trans-slower"
                             data-30="@class:nav-notice__title scrolled trans-slower">
                            CLICK ON THE DATES TO NAVIGATE
                        </div>

                    </div>
                    <ul class="heritage-ul">
                        <li class="heritage-item color-grey font-bold font-17 extra-ls opc-0 no-visible js-fade-left skrollr-pointer"
                            data-emit-events data-bottom-top="" data-trans="1.4">
                            <a class="heritageGetData" data-id="INTRO">
                                <span class="heritage-link-intro display--inline relative loc cursor trans"
                                      data-heritage="131">INTRO</span>
                            </a>
                        </li>
                        @foreach($data as $year)
                            <li class="heritage-item color-grey font-bold font-17 extra-ls opc-0 no-visible
                            js-fade-left skrollr-pointer "
                                data-emit-events data-bottom-top="" data-trans="1.3" data-delay="0.1">
                                <a class="heritageGetData" data-id="{{$year->id}}">
                                    <span class="heritage-link display--inline relative cursor js-trigger trans"
                                          data-heritage="141">{{$year->year}}
                                    </span>
                                </a>
                            </li>
                        @endforeach

                    </ul>

                </nav>
            </div>
        </div>
        <div class="abs-br fixed heritage-scroll-icon trans" data-0="@class: abs-br fixed heritage-scroll-icon trans"
             data-90="@class: abs-br fixed heritage-scroll-icon trans scrolled ">
            <div class="icon icon--arrows-long-down color-red arrow-bounce"></div>
        </div>
    </main>

@endsection

@section('script')

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.heritageGetData').click(function () {
                var data = $(this).data('id');
                var this_id = $(this);
                var removeClass = $(this).parents('ul.heritage-ul').removeClass('pointer-none');

                if(data == "INTRO")
                {
                    $('#heritage-title').css({
                        'opacity': 0
                    })
                    $('#heritage-text').css({
                        'opacity': 0
                    })
                    $('#js-heritage').css({'opacity': 0, 'visibility': 'inherit'});
                    $('#heritage-intro').css('display', 'block');
                    $('#heritage-image').parents('div.js-heritage-img').css({
                        'opacity': 0
                    });
                }
                else{
                    $.ajax({

                        type: 'GET',
                        url: '{{route("getHeritageData")}}',
                        data: {'id': data},

                        success: function (response, status) {

                            if (response.result == 'success') {
                                // $.unblockUI();
                                // successMsg(response.message);
                                $('.heritage-ul').find('span.heritage-link').removeClass('loc');
                                var url = "{{url('heritage-detail/')}}/"+response.data.id;
                                $('#heritage-url').attr('href',url);
                                this_id.find('span.heritage-link').addClass('loc');

                                $('#heritage-title').text(response.data.year);
                                $('#heritage-text').text(response.data.description);

                                $('#heritage-title').css({
                                    'opacity': 1, 'transform': 'matrix(1, 0, 0, 1, 0, 0)',
                                    'transform-origin': '50% 50% 0px'
                                })
                                $('#heritage-text').css({
                                    'opacity': 1, 'transform': 'matrix(1, 0, 0, 1, 0, 0)',
                                    'transform-origin': '50% 50% 0px'
                                })
                                $('#js-heritage').css({'opacity': 1, 'visibility': 'inherit'});
                                $('#heritage-intro').css('display', 'none');
                                var html = '<img src="' + response.data.image + '" alt="1938" class="block-image">';
                                $('#heritage-image').html(html);
                                // $('#heritage-image').find('img').attr('src',response.data.image);
                                $('#heritage-image').parents('div.js-heritage-img').css({
                                    'opacity': 1,
                                    'transform': 'matrix(1, 0, 0, 1, 0, 0)'
                                });

                            } else if (response.result == 'error') {
                                // $.unblockUI();
                                // errorMsg(response.message);
                            }
                        },
                        error: function (data) {
                            $.each(data.responseJSON.errors, function (key, value) {
                                // $.unblockUI();
                                // errorMsg(value);
                            });
                        }


                    });
                }



            });


        });
    </script>
@endsection
