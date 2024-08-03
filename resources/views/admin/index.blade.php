@extends('layouts.company')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jobs</h5>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
                        <p class="card-text">number of jobs: {{$jobs}}</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>

                        <p class="card-text">number of categories: {{$categories}}</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admins</h5>

                        <p class="card-text">number of admins: {{$admins}}</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Applications</h5>

                        <p class="card-text">number of applications: {{$applications}}</p>

                    </div>
                </div>
            </div>
        </div>
        <!--  <div class="row">
           <div class="col">
             <div class="card">
               <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <table class="table">
     <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">First</th>
         <th scope="col">Last</th>
         <th scope="col">Handle</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <th scope="row">1</th>
         <td>Mark</td>
         <td>Otto</td>
         <td>@mdo</td>
       </tr>
       <tr>
         <th scope="row">2</th>
         <td>Jacob</td>
         <td>Thornton</td>
         <td>@fat</td>
       </tr>
       <tr>
         <th scope="row">3</th>
         <td>Larry</td>
         <td>the Bird</td>
         <td>@twitter</td>
       </tr>
     </tbody>
   </table> -->
    </div>
@endsection
