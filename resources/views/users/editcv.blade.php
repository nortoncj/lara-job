@extends('layouts.app')

@section('content')

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('{{ asset('assets/images/hero_1.jpg') }}'); margin-top:-24px;" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Update CV</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <a href="#">Job</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Update CV</strong></span>
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
                            <h2>Update CV</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <form class="p-4 p-md-5 border rounded" enctype="multipart/form-data" action="{{ route('users.update_cv') }}" method="post">
                        @csrf
                        <!--job details-->

                        <div class="form-group">

                                <label for="cv">Resume / CV</label>
                                <input type="file"  value="{{$userDetails->cv}}" name="cv" class="form-control" >

                        </div>
                        @if($errors->has('cv'))
                            <p class="alert alert-warning">{{ $errors->first('cv') }}</p>
                        @endif





                        <div class="col-lg-4 ml-auto">
                            <div class="row">
                                <div class="col-6">
                                    <input type="submit" name="submit" class="btn btn-block btn-dark btn-md" style="margin-left: 200px;" value="Upload CV">
                                </div>
                            </div>
                        </div>


                    </form>
                </div>


            </div>

        </div>
    </section>


@endsection
