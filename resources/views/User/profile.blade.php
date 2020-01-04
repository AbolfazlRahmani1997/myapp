@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row justify-content-center  mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Myprofile</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <a class="btn btn-success btn-sm" style="float: right">Edite</a>
                            <a href="{{route('address.index')}}" class="btn btn-primary btn-sm"style="float: right">addrees</a>
                            <br>
                            <hr>
                            <label for="name" class="label ">Firstname:</label>
                              <div>{{auth()->user()->name}}</div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">MyPorfile</div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <a href="{{route('user.index')}}" class="btn btn-primary">MyProfile</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" class="btn btn-primary">Edite</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" class="btn btn-primary">MyDoctors</a>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection