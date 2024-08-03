@extends('layouts.app')

@section('content')

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('{{ asset('assets/images/hero_1.jpg') }}'); margin-top:-24px;" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Edit Details</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <a href="#">Job</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Edit Details</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        @if(\Session::has('update'))
            <div class="alert alert-success">
                <h4>{!! \Session::get('update') !!}</h4>
            </div>
        @endif
    </div>

    <section class="site-section">
        <div class="container">

            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Edit Details</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="my-4">
               <button class="btn btn-lg btn-warning"> <a class="no-underline nav-link" href="{{route('users.edit_cv')}}">Edit Resume</a></>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <form class="p-4 p-md-5 border rounded" action="{{ route('users.update_details') }}" method="post">
                        @csrf
                        <!--job details-->

                        <div class="form-group">
                            <div class="flex">
                                <label for="first_name">First Name</label>
                                <input type="text" value="{{$userDetails->first_name}}" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                                @if($errors->has('first_name'))
                                    <p class="alert alert-warning">{{ $errors->first('first_name') }}</p>
                                @endif

                            <label for="last_name">Last Name</label>
                            <input type="text" value="{{$userDetails->last_name}}" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                                @if($errors->has('last_name'))
                                    <p class="alert alert-warning">{{ $errors->first('last_name') }}</p>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="bio">Job Title</label>
                            <input name="job_title" type="text" value="{{$userDetails->job_title}}" class="form-control" id="" placeholder="Job Title">
                        </div>
                        @if($errors->has('job_title'))
                            <p class="alert alert-warning">{{ $errors->first('job_title') }}</p>
                        @endif

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="bio">Bio</label>
                                <textarea name="bio"  id="" cols="30" rows="7" class="form-control" placeholder="Tell us about yourself...">{{$userDetails->bio}}</textarea>
                            </div>
                        </div>
                        @if($errors->has('bio'))
                            <p class="alert alert-warning">{{ $errors->first('bio') }}</p>
                        @endif

                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input name="facebook" type="text" value="{{$userDetails->facebook}}" class="form-control" id="" placeholder="FaceBook">
                        </div>
                        @if($errors->has('facebook'))
                            <p class="alert alert-warning">{{ $errors->first('facebook') }}</p>
                        @endif
                        <div class="form-group">
                            <label for="bio">Twitter</label>
                            <input name="twitter" type="text" value="{{$userDetails->twitter}}" class="form-control" id="" placeholder="Twitter">
                        </div>
                        @if($errors->has('twitter'))
                            <p class="alert alert-warning">{{ $errors->first('first_name') }}</p>
                        @endif
                        <div class="form-group">
                            <label for="bio">LinkedIn</label>
                            <input name="linkedin" type="text" value="{{$userDetails->linkedin}}" class="form-control" id="" placeholder="LinkedIn">
                        </div>
                        @if($errors->has('linkedin'))
                            <p class="alert alert-warning">{{ $errors->first('facebook') }}</p>
                        @endif


                        <div class="col-lg-4 ml-auto">
                            <div class="row">
                                <div class="col-6">
                                    <input type="submit" name="submit" class="btn btn-block btn-dark btn-md" style="margin-left: 200px;" value="Edit Details">
                                </div>
                            </div>
                        </div>


                    </form>
                </div>


            </div>

        </div>
    </section>


@endsection
