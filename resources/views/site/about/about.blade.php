@extends('layout.front-layout.app')

@section('title')
    MINAS - About US
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
