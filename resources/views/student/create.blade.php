@extends('layout.app')

@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Student Form</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action= "{{ route('students.store')}}" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="student_no">Student Number: </label>
                                    <input type="text" class="form-control" id="student_no" name="student_no" placeholder="Input Staff Number">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="firstname">Firstname: </label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Input Firstname">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="lastname">Lastname: </label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Input Lastname">
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="class">Class: </label>
                                    <select id="class" class="form-control" name="class">
                                        <option value="">Select Class </option>
                                        <option value="jss1">J.S.S.1</option>
                                        <option value="jss2">J.S.S.2</option>
                                        <option value="jss3">J.S.S.3</option>
                                        <option value="ss1">S.S.S.1</option>
                                        <option value="ss2">S.S.S.2</option>
                                        <option value="ss3">S.S.S.3</option>
                                    </select>
                                </div>
                                <input type="submit" name="time" class="btn btn-primary">
                            </form>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection