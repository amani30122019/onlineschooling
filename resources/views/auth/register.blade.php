@extends('frontend.app')
@section('content')
    <!-- Header -->
    <header class="ex-2-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1>Sign Up</h1>
                    <p>Fill out the form below to sign up for {{ config('app.name') }}. Already signed up? Just <a
                            class="white" href="{{ url('/login') }}">Log In</a></p>
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name"
                                    value="{{ old('first_name') }}" inputmode="numeric" required="required">
                                @error('first_name')
                                    <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" name="surname" class="form-control" value="{{ old('surname') }}"
                                    required placeholder="Surname">
                                @error('surname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                    required placeholder="Parent's email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control"
                                        required placeholder="Phone number">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <input type="text" name="grade" value="{{ old('grade') }}" class="form-control"
                                        placeholder="Class" required>
                                    @error('grade')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <input type="password" name="password" value="{{ old('password') }}"
                                        class="form-control" required placeholder="Password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <input type="password" name="password_confirmation"
                                        value="{{ old('password_confirmation') }}" class="form-control" required
                                        placeholder="Confirm Password">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">SIGN UP</button>
                            </div>

                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </header>
    <!-- end of ex-header -->
    <!-- end of header -->
@endsection
