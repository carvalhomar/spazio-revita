@extends('page._template.layout')

@push('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ URL::asset('assets/css/icofont.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&amp;display=swap">
@endpush

@section('content')
    {{ view('page.carousel') }}
    {{ view('page.treatment') }}
    {{ view('page.our-team') }}
    {{ view('page.blog') }}
    {{ view('page.video') }}
    {{ view('page.health') }}
    {{ view('page.footer') }}
@endsection

@push('scripts')
    <script type="text/javascript" async="" src="http://www.googleadservices.com/pagead/conversion_async.js"></script>
    <script type="text/javascript" async="" src="http://www.googletagmanager.com/gtag/js?id=AW-981358199&amp;l=dataLayer&amp;cx=c"></script>
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/parallax.js') }}"></script>
    <script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/wavify.js') }}"></script>
    <script src="{{ URL::asset('assets/js/main.js?v=1') }}"></script>
@endpush
