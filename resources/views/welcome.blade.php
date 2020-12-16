@extends('template.main')
@section('content')
    @include('partials.intro')
@endsection
@section('aftermain')
    @include('partials.aboutsection')
    @include('partials.servicessection')
    @include('partials.counter')
    @include('partials.portfolio')
    @include('partials.testimonial')
    @include('partials.blog')
    @include('partials.contact')
@endsection
@section('footer')
    @include('partials.footer')
@endsection