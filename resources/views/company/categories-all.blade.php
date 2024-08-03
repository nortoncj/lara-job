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
                            @if(\Session::has('update'))
                                <div class="alert alert-success">
                                    <h4>{!! \Session::get('update') !!}</h4>
                                </div>
                            @endif
                            @if(\Session::has('delete'))
                                <div class="alert alert-success">
                                    <h4>{!! \Session::get('delete') !!}</h4>
                                </div>
                            @endif
                    </div>
                    <h5 class="card-title mb-4 d-inline">Categories</h5>
                    <a  href="{{route('create.category')}}" class="btn btn-dark mb-4 text-center float-right">Create Categories</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $categories as $category )
                            <tr>
                                <th scope="row">{{$category->id}} </th>
                                <td>{{$category->name}}</td>
                                <td><a href="{{ route('edit.categories', $category->id) }}" class="btn btn-warning text-white text-center">Update</a></td>
                                <td><a href="{{ route('delete.category', $category->id) }}" class="btn btn-danger text-white text-center">Delete</a></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
