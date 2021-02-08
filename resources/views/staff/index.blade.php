@extends('layout.app')

@section('content')
<div id="content" class="main-content">
<div class="container">
        <div class="row layout-top-spacing">
            <div id="tableFooter" class="col-lg-12 col-12 layout-spacing">
                <div class="row">
                    <div class="col-md-9">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4> Staff Table </h4>
                            </div>                       
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-condensed mb-4">
                                <thead>
                                    <tr>
                                        <th>Staff No.</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Class Held</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($staff as $staff)
                                    <tr>
                                        <td>{{$staff->staff_no}}</td>
                                        <td>{{$staff->firstname}}</td>
                                        <td>{{$staff->lastname}}</td>
                                        <td>{{$staff->class_held}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
       
       
    </div>
</div>
@endsection