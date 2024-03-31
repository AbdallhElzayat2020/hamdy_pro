@extends('layouts.master')
@section('title')
    LoginPage
@endsection()

@section('content')
    <div class="container" style="min-height:100vh; display:flex;align-items:center; justify-content:center">
        <div class="col-lg-7">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="UserName">UserName</label>
                    <input type="text" class="form-control" id="UserName" name="UserName" placeholder="Enter UserName">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="password">RepeatPassword</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter RepeatPassword">
                </div>
                <div class="form-group">
                    <a class="text-black" href="{{ route('login') }}">I Have Account ? Login</a>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
@endsection
