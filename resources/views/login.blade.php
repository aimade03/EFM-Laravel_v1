@extends('app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/login">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <span class="text-danger">{{ $errors->first('password') }}</span>

                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#">Forgot password?</a><br>
                        <a href="/register">Don't have an account? Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection