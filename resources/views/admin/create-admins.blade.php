@extends('layouts.company')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Create Admins</h5>
                    <form method="POST" action="{{route('save.admin')}}" enctype="multipart/form-data">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 mt-4">
                            <input type="email" name="email" id="form2Example1" class="form-control" placeholder="email" />

                        </div>
                        @if($errors->has('email'))
                            <p class="alert alert-warning">{{ $errors->first('email') }}</p>
                        @endif

                        <div class="flex-row flex ">
                        <div class="form-outline mb-4">
                            <input type="text" name="first_name" id="form2Example1" class="form-control" placeholder="first name" />
                        </div>
                            @if($errors->has('first_name'))
                                <p class="alert alert-warning">{{ $errors->first('first_name') }}</p>
                            @endif
                        <div class="form-outline mb-4">
                            <input type="text" name="last_name" id="form2Example1" class="form-control" placeholder="last name" />
                        </div>
                            @if($errors->has('last_name'))
                                <p class="alert alert-warning">{{ $errors->first('last_name') }}</p>
                            @endif
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example1" class="form-control" placeholder="password" />
                        </div>
                        @if($errors->has('password'))
                            <p class="alert alert-warning">{{ $errors->first('password') }}</p>
                        @endif







                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-dark  mb-4 text-center">create</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
