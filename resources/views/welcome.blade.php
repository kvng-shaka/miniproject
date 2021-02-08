@extends('layout.app')

@section('content')
     <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row">
                    <div class="col-md-9">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row layout-top-spacing">
                    <div id="tableFooter" class="col-lg-12 col-12 layout-spacing">
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
                                        @if(!empty($staff))
                                        <thead>
                                            <tr>
                                                <th>Staff No.</th>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Levels</th>
                                                <th>Class held</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($staff as $staff)
                                                <tr>
                                                    {{-- <td>{{$staff->staff_id}}</td> --}}
                                                    <td>{{$staff->staff_no}}</td>
                                                    <td>{{$staff->firstname}}</td>
                                                    <td>{{$staff->lastname}}</td>
                                                    <td>{{$staff->levels}}</td>
                                                    <td>{{$staff->class_held}}</td>
                                                    {{-- <td>{{$staff->class}}</td> --}}
                                                </tr>

                                                @if($staff->students != "")

                    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Staff No.: {{$staff->staff_no}}</h4>
                                        <h4>Staff FullName: {{$staff->firstname}}  {{$staff->lastname}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-4">
                                        <thead>
                                            <tr>
                                                <th>Student No.</th>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Class</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($staff->students as $student)
                                            <tr>
                                                <td>{{$student->id}}</td>
                                                <td>{{$student->firstname}}</td>
                                                <td>{{$student->lastname}}</td>
                                                <td>{{$student->class}}</td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                @endif

                                                
                                            @endforeach 
                                        </tbody>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        <!--  END CONTENT AREA  -->
@endsection