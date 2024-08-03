@extends('layouts.company')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    @if(\Session::has('create'))
                        <div class="alert alert-success">
                            <h4>{!! \Session::get('create') !!}</h4>
                        </div>
                    @endif
                </div>
                <h5 class="card-title mb-4 d-inline">Admins</h5>
                <a  href="{{route('create.admins')}}" class="btn btn-dark mb-4 text-center float-right">Create Admins</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $admins as $admin )
                    <tr>
                        <th scope="row">{{$admin->id}} </th>
                        <td>{{$admin->last_name}}</td>
                        <td>{{$admin->first_name}}</td>
                        <td>{{$admin->email}}</td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
