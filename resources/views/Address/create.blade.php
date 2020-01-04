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
                        <a href="{{ route('address.create')}}"class="btn btn-success">Add address</a>
                            <hr>
                            <form class="form" action="{{route('address.store')}}"method="POST">
@csrf
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input class="form-control" type="text"name="name">
                                </div>
                                <div class="form-group">
                                    <label for="Name">City</label>
                                    <input class="form-control" type="text"name="city">
                                </div>
                                <div class="form-group">
                                    <label for="Name">Phonenumber</label>
                                    <input class="form-control" type="text"name="phonenum">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="Name">address:</label>
                                    <hr>
                                    <textarea name="address" id="" cols="30" rows="10"></textarea>
                                </div>

                                <button class="btn btn-primary" type="submit">submit</button>


                            </form>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">MyPorfile</div>

                    <div class="card-body">

             

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection