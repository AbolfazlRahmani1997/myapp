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
                  <table class="table">
                      <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">City</th>
                          <th scope="col">Phonenumber</th>
                          <th scope="col">addressline</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach($addresss as $address)
                      <tr>
    <td>
{{$address->id}}
    </td>
    <td>
        {{$address->city}}
    </td>
    <td>
        {{$address->phonenumber}}
    </td>
    <td>
        {{$address->adressline}}
    </td>
</tr>
@endforeach


                      </tbody>

                  </table>

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