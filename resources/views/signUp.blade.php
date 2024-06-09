@extends('app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Sign Up</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/register">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="username" placeholder="Enter username" >
                            </div>
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" value="{{ old('email') }}" class="form-control" name="email" id="email" placeholder="Enter email" >
                            </div>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password"value="{{ old('password') }}" name="password" class="form-control" id="password" placeholder="Password" >
                            </div>
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/login">Already have an account? Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection