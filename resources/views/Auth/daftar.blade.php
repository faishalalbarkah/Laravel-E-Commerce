@extends('common.master')
@section('title'.'Register')
@push('css')
         <!-- CSS Style --> 
    <link rel="stylesheet" href="{{ asset('/bahanstudy/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('/bahanstudy/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('/bahanstudy/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('/bahanstudy/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('/bahanstudy/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('/bahanstudy/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('/bahanstudy/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('/bahanstudy/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('/bahanstudy/css/Form.css') }}" type="text/css">  
@endpush
@section('content')
    <form method="POST" action="/Register">
        <div class="wrapping-form">
            <h3>Registrasi Form</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" placeholder="Masukan Email" >
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" placeholder="Masukan Name" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Masukan Password" id="exampleInputPassword1">
            </div>
            <button type="submit" class="button-block">Registrasi</button>
        </div>
    </form>
@endsection


@push('js')
        <!-- Js Plugins -->
    <script src="{{asset ('/bahanstudy/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset ('/bahanstudy/js/bootstrap.min.js') }}"></script>
    <script src="{{asset ('/bahanstudy/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{asset ('/bahanstudy/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{asset ('/bahanstudy/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{asset ('/bahanstudy/js/jquery.countdown.min.js') }}"></script>
    <script src="{{asset ('/bahanstudy/js/jquery.slicknav.js') }}"></script>
    <script src="{{asset ('/bahanstudy/js/mixitup.min.js') }}"></script>
    <script src="{{asset ('/bahanstudy/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset ('/bahanstudy/js/main.js') }}"></script> 
    @endpush