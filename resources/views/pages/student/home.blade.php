@extends('layouts.main')

@section('pagecontent')
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h1 class="fw-bold mb-3">Student Management</h1>
                    <p class="text-secondary">Register and manage your students with ease.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <!-- Registration Form -->
                    <div class="glass-card p-4 p-md-5 mb-5">
                        <h4 class="fw-bold mb-4"><i class="bi bi-person-plus me-2 text-primary"></i>Register New Student
                        </h4>
                        <form action="{{route('student.save')}}" method="post">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label fw-medium">Student Name</label>
                                        <input type="text" class="form-control @error('stuname') is-invalid @enderror"
                                            id="name" name="stuname" placeholder="Enter full name">
                                        @error('stuname')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob" class="form-label fw-medium">Date of Birth</label>
                                        <input type="date" class="form-control @error('studob') is-invalid @enderror"
                                            id="dob" name="studob">
                                        @error('studob')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address" class="form-label fw-medium">Home Address</label>
                                        <input type="text" class="form-control @error('stuaddress') is-invalid @enderror"
                                            id="address" name="stuaddress" placeholder="Enter complete address">
                                        @error('stuaddress')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check2-circle me-1"></i> Register Student
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Students Table -->
                    <div class="glass-card overflow-hidden">
                        <div
                            class="p-4 border-bottom bg-light bg-opacity-10 d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold mb-0">Registered Students</h5>
                            <span class="badge bg-primary rounded-pill">{{count($students)}} Total</span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="ps-4">#</th>
                                        <th>Student Name</th>
                                        <th>DOB</th>
                                        <th>Address</th>
                                        <th class="text-end pe-4">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($students as $key => $student)
                                        <tr>
                                            <td class="ps-4 text-secondary">{{++$key}}</td>
                                            <td><span class="fw-medium">{{$student->stuname }}</span></td>
                                            <td>{{ \Carbon\Carbon::parse($student->studob)->format('M d, Y') }}</td>
                                            <td class="text-secondary small">{{ $student->stuaddress }}</td>
                                            <td class="text-end pe-4">
                                                <div class="action-icons">
                                                    <a href="{{ route('student.edit', $student->id)}}" class="edit"
                                                        title="Edit"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{ route('student.delete', $student->id)}}" class="delete"
                                                        title="Delete"><i class="bi bi-trash3"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center py-5">
                                                <div class="opacity-50">
                                                    <i class="bi bi-people style='font-size: 3rem;'"></i>
                                                    <p class="mt-2">No students registered yet.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection