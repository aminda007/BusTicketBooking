@extends('layout.masterbasics')


@section('title')
    Home
@endsection

@section('body')

    @include('bus_owner.includes.tabedHeader')

    <h1>email:{{$email}}</h1>


@endsection



