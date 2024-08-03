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
                    <h5 class="card-title mb-4 d-inline">Jobs</h5>
                    <a  href="{{route('create.jobs')}}" class="btn btn-dark mb-4 text-center float-right">Create Jobs</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Region</th>
                            <th scope="col">Company</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $jobs as $job )
                            <tr>
                                <th scope="row">{{$job->id}} </th>
                                <td>{{$job->job_title}}</td>
                                <td>{{$job->job_category}}</td>
                                <td>{{$job->job_region}}</td>
                                <td>{{$job->company}}</td>
                                <td><a href="{{ route('delete.job', $job->id) }}" class="btn btn-danger text-white text-center">Delete</a></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
