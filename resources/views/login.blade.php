{{-- @section('title')
    LoginPage
@endsection()
@include('layouts.head')
<div class="container">
    <div class="row d-flex align-items-center mx-auto    justify-content-center" style="width: 80%; height: 70vh ">
        <div class="col-lg-6">
            <form method="POST" class="bg-body" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" required id="email" name="email"
                        aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" required id="password" name="password"
                        placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
 --}}

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
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <a class="text-black" href="{{ route('register') }}">I Don't Have Account ? Register</a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection
