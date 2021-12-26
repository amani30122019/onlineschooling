@extends('frontend.app')
@section('content')
    <!-- Header -->
    <header class="ex-2-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1>Log In</h1>
                    <p>You don't have a password? Then please <a class="white" href="{{ url('/register') }}">Sign
                            Up</a>
                    </p>
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input type="tel" name="phone" class="form-control" placeholder="Phone number"
                                    value="{{ old('phone') }}" inputmode="numeric" required="required">
                                @error('phone')
                                    <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    value="{{ old('password') }}" required="required">
                            </div>
                            @error('password')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">LOG IN</button>

                            </div>
                            <div class="clearfix">
                                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                                <a href="#" class="float-right">Forgot Password?</a>

                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
@endsection
