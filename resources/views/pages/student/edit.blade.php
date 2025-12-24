@extends('layouts.main')


@section('pagecontent')

<div class="page-content">

    <div class="container">
        <div class="row">
            <div class="col-md-12 p-4">
                <center><h2>Student Management</h2></center>
            </div>
        </div>



        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">

                <div class="stu-form-area p-3">
                    <form action="{{route('student.update', $student->id)}}" method="post">

                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Student Name</label>
                                    <input type="text" value="{{$student->stuname}}" class="form-control @error('stuname') is-invalid @enderror" id="name" name="stuname">

                                    @error('stuname') 
                                    <div class="form-text text-danger">{{$message}}</div>
                                    
                                    @enderror

                                
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="dob" class="form-label">Student DOB</label>
                                    <input type="date" value="{{$student->studob}}" class="form-control @error('studob') is-invalid @enderror" id="dob" name="studob">


                                    @error('studob') 
                                    <div class="form-text text-danger">{{$message}}</div>
                                    
                                    @enderror

                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" value="{{$student->stuaddress}}" class="form-control @error('stuaddress') is-invalid @enderror" id="address" name="stuaddress">

                                    @error('stuaddress') 
                                    <div class="form-text text-danger">{{$message}}</div>
                                    
                                    @enderror


                                </div>
                            </div>
                        </div>
                          <button type="submit" class="btn btn-primary">Update Now</button>

                    </form>


                </div>


                
            </div>

            <div class="col-md-2"></div>
        </div>





    </div>



    </div>

@endsection