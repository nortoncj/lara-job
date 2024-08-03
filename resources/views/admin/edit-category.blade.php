@extends('layouts.company')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Edit Category</h5>
                    <form method="POST" action="{{route('update.categories', $category->id)}}" enctype="multipart/form-data">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="name" id="form2Example1" class="form-control" value="{{$category->name}}" />

                        </div>
                        @if($errors->has('name'))
                            <p class="alert alert-warning">{{ $errors->first('name') }}</p>
                        @endif


                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-secondary  mb-4 text-center">Update</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
