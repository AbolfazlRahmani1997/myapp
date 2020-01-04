@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="ba">
        <div class="row">
        <div class="col-md-8" id="inba">
            <div class="col-md-6" id="loginclient">
               <h1>Login Client</h1>
                <hr>
                <form method="POST" action="{{ route('login')}}"class="form-group">
                    @csrf
                    <label for="Email">Emali</label>
                    <input type="email" name="email"id="email" class="form-control">
                    <label for="Password">Password</label>
                    <input type="password"name="password"id="password"class="form-control">
                    <button class="btn btn-success btn-primary" type="submit">Login</button>

                </form>
            </div>
            <div class="col-md-6" id="logincdoctor"></div>
        </div>
        </div>

    </div>
    @endsection
