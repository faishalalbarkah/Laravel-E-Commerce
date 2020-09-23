@extends('common.master')
@section('title', 'Login')
    @push('css')
        <!-- CSS Style -->
        <link rel="stylesheet" href="{{ asset('/bahanstudy/css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/bahanstudy/css/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/bahanstudy/css/elegant-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/bahanstudy/css/magnific-popup.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/bahanstudy/css/nice-select.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/bahanstudy/css/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/bahanstudy/css/slicknav.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/bahanstudy/css/style.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/bahanstudy/css/Form.css') }}" type="text/css">
    @endpush
@section('content')
    <form method="POST" action="{{ url('/') }}" class="col-sm-8 offset-2">
        @csrf
        <div class="wrapping-form">
            <h3>Login Form</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email"
                    aria-describedby="emailHelp">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password"
                    id="exampleInputPassword1">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <button type="submit" class="button-block">Login</button>
        </div>

    </form>

@endsection

@push('js')
    <!-- Js Plugins -->
    <script src="{{ asset('/bahanstudy/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/bahanstudy/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/bahanstudy/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/bahanstudy/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('/bahanstudy/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/bahanstudy/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('/bahanstudy/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('/bahanstudy/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('/bahanstudy/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/bahanstudy/js/main.js') }}"></script>
@endpush
