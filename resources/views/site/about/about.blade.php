@extends('layout.front-layout.app')

@section('title')
    {{env('APP_NAME')}} - About US
@endsection


@section('style')
    <style>
        .aboutUsSectionClass{
            z-index: 1000;
            position: relative;
        }
    </style>
@endsection


@section('content')


{!! $data->description !!}




@endsection
