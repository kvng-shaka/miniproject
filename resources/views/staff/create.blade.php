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
                                    <h4>Staff Form</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action= "{{ route('staff.store')}}" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="staff_no">Staff Number: </label>
                                    <input type="text" class="form-control" id="staff_no" name="staff_no" placeholder="Input Staff Number">
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
                                    <label for="levels">Levels: </label>
                                    <select id="levels" class="form-control" name="levels">
                                        <option value="">Select Your Level</option>
                                        <option value="Level 6">Level 6</option>
                                        <option value="Level 7">Level 7</option>
                                        <option value="Level 8">Level 8</option>
                                        <option value="Level 9">Level 9</option>
                                        <option value="Level 10">Level 10</option>
                                        <option value="Level 11">Level 11</option>
                                        <option value="Level 12">Level 12</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="class_held">Class Held: </label>
                                    <select id="class_held" class="form-control" name="class_held">
                                        <option value="">Select Class Held</option>
                                        <option value="jss1">J.S.S.1</option>
                                        <option value="jss2">J.S.S.2</option>
                                        <option value="jss3">J.S.S.3</option>
                                        <option value="ss1">S.S.S.1</option>
                                        <option value="ss2">S.S.S.2</option>
                                        <option value="ss3">S.S.S.3</option>
                                        <option value="--"> --- </option>
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