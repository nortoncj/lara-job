@extends('layouts.company')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="container">

                        @if(\Session::has('delete'))
                            <div class="alert alert-success">
                                <h4>{!! \Session::get('delete') !!}</h4>
                            </div>
                        @endif
                    </div>
                    <h5 class="card-title mb-4 d-inline">Applications</h5>
{{--                    <a  href="{{route('create.jobs')}}" class="btn btn-dark mb-4 text-center float-right">Create Jobs</a>--}}
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Job View</th>
                            <th scope="col">Email</th>
                            <th scope="col">CV</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Company</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $applications as $app )
                            <tr>
                                <th scope="row">{{$app->id}} </th>
                                <td><a href="{{route('single.job',$app->id)}}" class="btn btn-secondary">Job</a></td>
                                <td >{{$app->email}} </td>
                                <td><a href="{{asset('assets/cvs/'.$app->cv.'')}}" class="btn btn-info">CV</a> </td>
                                <td>{{$app->job_title}}</td>
                                <td>{{$app->company}}</td>
                                <td><a href="{{ route('delete.apps', $app->id) }}" class="btn btn-danger text-white text-center">Delete</a></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
