@extends('layouts.company')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Create Category</h5>
                    <form method="POST" action="{{route('save.category')}}" enctype="multipart/form-data">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="name" id="form2Example1" class="form-control" placeholder="Category" />

                        </div>
                        @if($errors->has('name'))
                            <p class="alert alert-warning">{{ $errors->first('name') }}</p>
                        @endif


                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-dark  mb-4 text-center">create</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
