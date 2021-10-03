@extends('layout.shop-layout.app')

@section('title')
    {{env('APP_NAME')}} - Shop
@endsection

@section('style')
    <style>
        .block-25 {
            width: 24%;
        }
    </style>
@endsection

@section('content')

    <main id="content" class="site-content relative">
        <div class="woocommerce"></div>
        @include('site.shop.section.categories_section')


        <div class="pb-sec list-products">
            @include('site.shop.section.pendant_section')
            @include('site.shop.section.mens_section')
            @include('site.shop.section.fresh_section')
        </div>

        @include('site.shop.section.heritage_section')
    </main>

@endsection


