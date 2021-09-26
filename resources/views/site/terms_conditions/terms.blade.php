@extends('layout.shop-layout.app')

@section('title')
    MINAS - Terms & Conditions
@endsection

@section('style')
    <style>
        .showPolicy{
            visibility: visible;
            opacity: 1;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
    </style>


@endsection

@section('content')
    <main id="content" class="site-content relative">
        <div class="woocommerce"></div>
        <div class="grid max-10cols-g pt-b pb-sec mobile-hor-100 mobile-hor-padded ">
            <div class="gutter mobile-hor-gutter">
                <div class="font-bold title-13 ls-180 color--white uppercase mb-y showPolicy a-center op-0 no-visible js-fade-up in-view"
                    data-emit-events data-bottom-top="" data-trans="1.4" >
                    <span class="bracket">{</span> Studio Minas
                    <span class="bracket">}</span>
                </div>
                <h1 class="font-thin title-70 ls-30 uppercase mb-t a-center op-0 no-visible js-fade-up in-view showPolicy"
                    data-emit-events data-bottom-top="" data-trans="1.4" data-delay=".15">Terms & Conditions</h1>
                {!! $data->description !!}
            </div>
        </div>
    </main>
@endsection
